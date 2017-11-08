<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use App\Premise;
use App\Addo;
use App\Owner;

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
            $pharmacy = null;

            if(isset($queryBuilder->build()->get()[0]))
            {
                $attendance = $queryBuilder->build()->get()[0];
                $status = 200;

                if($attendance->type == "Premise"){
                    $premise = Premise::where('fin', $attendance->pharmacy_registration_number)->first();

                    if($premise)
                    {
                        $status = 200;
                        $message = "success";
                        $pharmacy = array(
                            'type' => "Premise",
                            'registration_number' => $premise->fin,
                            'name' => $premise->name,
                            'location' => $premise->physical,
                            'street' => $premise->village,
                            'ward' => $premise->ward,
                            'district' => $premise->district,
                            'region' => $premise->region,
                            'pharmacist' => ucfirst(strtolower($premise->pharmacist->firstname)) ." ". ucfirst(strtolower($premise->pharmacist->middlename)) ." ". ucfirst(strtolower($premise->pharmacist->surname)),
                            'owner' => ucfirst(strtolower($premise->owner->firstname)) ." ". ucfirst(strtolower($premise->owner->middlename)) ." ". ucfirst(strtolower($premise->owner->surname))
                        );
                    }
                    else
                    {
                        // No premise found
                    }
                }
                else{
                    // Searching for Addo
                    $addo = Addo::where('accreditation_no', $attendance->pharmacy_registration_number)->first();
            
                    if($addo)
                    {
                        $status = 200;
                        $message = "success";
                        $pharmacy = array(
                            'type' => "Addo",
                            'registration_number' => $addo->accreditation_no,
                            'name' => $addo->name,
                            'location' => $addo->street . " " . $addo->ward,
                            'street' => $addo->street,
                            'ward' => $addo->ward,
                            'district' => $addo->district,
                            'region' => $addo->region,
                            'pharmacist' => "",
                            'owner' => ucfirst(strtolower($addo->owner->firstname)) ." ". ucfirst(strtolower($addo->owner->middlename)) ." ". ucfirst(strtolower($addo->owner->surname))
                        );
                    }
                }

                $attendance->pharmacy = $pharmacy;
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
                for($x = 0; $x < count($attendances); $x++){
                    $pharmacy = null;
                    if($attendances[$x]->type == "Premise"){
                        $premise = Premise::where('fin', $attendances[$x]->pharmacy_registration_number)->first();
    
                        if($premise)
                        {
                            $status = 200;
                            $message = "success";
                            $pharmacy = array(
                                'type' => "Premise",
                                'registration_number' => $premise->fin,
                                'name' => $premise->name,
                                'location' => $premise->physical,
                                'street' => $premise->village,
                                'ward' => $premise->ward,
                                'district' => $premise->district,
                                'region' => $premise->region,
                                'pharmacist' => ucfirst(strtolower($premise->pharmacist->firstname)) ." ". ucfirst(strtolower($premise->pharmacist->middlename)) ." ". ucfirst(strtolower($premise->pharmacist->surname)),
                                'owner' => ucfirst(strtolower($premise->owner->firstname)) ." ". ucfirst(strtolower($premise->owner->middlename)) ." ". ucfirst(strtolower($premise->owner->surname))
                            );
                        }
                        else
                        {
                            // No premise found
                        }
                    }
                    else{
                        // Searching for Addo
                        $addo = Addo::where('accreditation_no', $attendances[$x]->pharmacy_registration_number)->first();
                
                        if($addo)
                        {
                            $status = 200;
                            $message = "success";
                            $pharmacy = array(
                                'type' => "Addo",
                                'registration_number' => $addo->accreditation_no,
                                'name' => $addo->name,
                                'location' => $addo->street . " " . $addo->ward,
                                'street' => $addo->street,
                                'ward' => $addo->ward,
                                'district' => $addo->district,
                                'region' => $addo->region,
                                'pharmacist' => "",
                                'owner' => ucfirst(strtolower($addo->owner->firstname)) ." ". ucfirst(strtolower($addo->owner->middlename)) ." ". ucfirst(strtolower($addo->owner->surname))
                            );
                        }
                    }
    
                    $attendances[$x]->pharmacy = $pharmacy;
                }
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
        if($attendance){
            $status = 200;

            if($attendance->type == "Premise"){
                $premise = Premise::where('fin', $attendance->pharmacy_registration_number)->first();

                if($premise)
                {
                    $status = 200;
                    $message = "success";
                    $pharmacy = array(
                        'type' => "Premise",
                        'registration_number' => $premise->fin,
                        'name' => $premise->name,
                        'location' => $premise->physical,
                        'street' => $premise->village,
                        'ward' => $premise->ward,
                        'district' => $premise->district,
                        'region' => $premise->region,
                        'pharmacist' => ucfirst(strtolower($premise->pharmacist->firstname)) ." ". ucfirst(strtolower($premise->pharmacist->middlename)) ." ". ucfirst(strtolower($premise->pharmacist->surname)),
                        'owner' => ucfirst(strtolower($premise->owner->firstname)) ." ". ucfirst(strtolower($premise->owner->middlename)) ." ". ucfirst(strtolower($premise->owner->surname))
                    );
                }
                else
                {
                    // No premise found
                }
            }
            else{
                // Searching for Addo
                $addo = Addo::where('accreditation_no', $attendance->pharmacy_registration_number)->first();
        
                if($addo)
                {
                    $status = 200;
                    $message = "success";
                    $pharmacy = array(
                        'type' => "Addo",
                        'registration_number' => $addo->accreditation_no,
                        'name' => $addo->name,
                        'location' => $addo->street . " " . $addo->ward,
                        'street' => $addo->street,
                        'ward' => $addo->ward,
                        'district' => $addo->district,
                        'region' => $addo->region,
                        'pharmacist' => "",
                        'owner' => ucfirst(strtolower($addo->owner->firstname)) ." ". ucfirst(strtolower($addo->owner->middlename)) ." ". ucfirst(strtolower($addo->owner->surname))
                    );
                }
            }

            $attendance->pharmacy = $pharmacy;
        }
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
