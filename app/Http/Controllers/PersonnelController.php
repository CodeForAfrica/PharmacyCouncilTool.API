<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnel;

use Unlu\Laravel\Api\QueryBuilder;

class PersonnelController extends Controller
{
    public function index(Request $request)
    {
        $queryBuilder = new QueryBuilder(new Personnel, $request);
        
        // Single Personnel
        if($request->limit && $request->limit == 1)
        {
            $personnel = json_decode("{}");
            $status = 0;

            if(isset($queryBuilder->build()->get()[0]))
            {
                $personnel = $queryBuilder->build()->get()[0];
                $status = 200;
            }
            else
            {
                $status = 404;
            }

            return response()->json([
                'status' => $status,
                'personnel' => $personnel
            ],200);
        }
        else
        {
            $personnels = $queryBuilder->build()->get();
            $status = 0;
            
            if($personnels && count($personnels) > 0) $status = 200;
            else $status = 404;

            return response()->json([
                'status' => $status,
                'personnels' => $personnels
            ],200);
        }
    }

    public function show(Personnel $personnel)
    {
        $status = "";
        if($personnel) $status = 200;
        else $status = 404;

        return response()->json([
            'status' => $status,
            'personnel' => $personnel
        ], 200);
    }

    public function store(Request $request)
    {
        $personnel = Personnel::create($request->all());

        return response()->json([
            'status' => 201,
            'personnel' => $personnel
        ], 201);
    }

    public function update(Request $request, Personnel $personnel)
    {
        $personnel->update($request->all());

        return response()->json([
            'status' => 200,
            'personnel' => $personnel
        ], 200);
    }

    public function delete(Personnel $personnel)
    {
        $personnel->delete();

        return response()->json(null, 204);
    }
}
