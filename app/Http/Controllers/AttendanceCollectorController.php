<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Premise;
use App\Attendance;

class AttendanceCollectorController extends Controller
{
    public function index(Request $request)
    {
        $status = 0;
        $message = "";
        $amount = 0;

        //dd((int)$request->days);

        // Checking for passed registration number, days and sender phone
        if($request->has('registration_number') && $request->has('days') && $request->has('sender_phone'))
        {
            $registration_number = $request->registration_number;
            $days = (int)$request->days;
            $sender_phone = $request->sender_phone;

            // Checking for premises or addo
            // Searching for Premise
            $premise = Premise::where('fin', $registration_number)->first();

            if($premise){
                // Checking sender phone number and owner phonenumber
                if($premise->owner->phone == $sender_phone){
                    // Save Attendance
                    Attendance::create([
                        'type' => "Premise",
                        'pharmacy_registration_number' => $registration_number,
                        'days' => $days
                    ]);
    
                    $status = 200;
                    $message = "Mahudhurio ya wiki ya duka lako la dawa yamehifadhiwa.";
                }
                else{
                    $status = 404;
                    $message = "Mmliki husika wa duka la dawa anaruhusiwa kuripoti mahudhurio.";
                }
            }
            else{
                $status = 404;
                $message = "Hakuna duka la dawa lenye namba ya usajili wa ".$registration_number."";
            }

        }
        else
        {
            $status = 404;
            $message = "Namba ya usajili wa duka na idadi ya siku za kutohudhuria zinahitajika.";
        }

        return response()->json([
            'status' => $status,
            'message' => $message
        ],200);
    }
}