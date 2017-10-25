<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;

use Unlu\Laravel\Api\QueryBuilder;

class AttendanceController extends Controller
{
    public function index(Request $request)
    {
        $queryBuilder = new QueryBuilder(new Attendance, $request);
        
        // Single Attendance
        if($request->limit && $request->limit == 1)
        {
            $attendance = json_decode("{}");
            $status = 0;

            if(isset($queryBuilder->build()->get()[0]))
            {
                $attendance = $queryBuilder->build()->get()[0];
                $status = 200;
            }
            else
            {
                $status = 404;
            }

            return response()->json([
                'status' => $status,
                'attendance' => $attendance
            ],200);
        }
        else
        {
            $attendances = $queryBuilder->build()->get();
            $status = 0;
            
            if($attendances && count($attendances) > 0)
            {
                $status = 200;
            }
            else $status = 404;

            return response()->json([
                'status' => $status,
                'attendances' => $attendances
            ],200);
        }
    }

    public function show(Attendance $attendance)
    {
        $status = "";
        if($attendance) $status = 200;
        else $status = 404;

        return response()->json([
            'status' => $status,
            'attendance' => $attendance
        ], 200);
    }

    public function store(Request $request)
    {
        $attendance = Attendance::create($request->all());

        return response()->json([
            'status' => 201,
            'attendance' => $attendance
        ], 201);
    }

    public function update(Request $request, Attendance $attendance)
    {
        $attendance->update($request->all());

        return response()->json([
            'status' => 200,
            'attendance' => $attendance
        ], 200);
    }

    public function delete(Attendance $attendance)
    {
        $attendance->delete();

        return response()->json(null, 204);
    }
}
