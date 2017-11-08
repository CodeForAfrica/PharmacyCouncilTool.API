<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pharmacy;
use App\Addo;
use App\Premise;

use Unlu\Laravel\Api\QueryBuilder;

class PharmacyController extends Controller
{
    public function index(Request $request)
    {
        /* -- OLD CODES -->
        $queryBuilder = new QueryBuilder(new Pharmacy, $request);
        
        // Single Pharmacy
        if($request->limit && $request->limit == 1)
        {
            $pharmacy = json_decode("{}");
            $status = 0;

            if(isset($queryBuilder->build()->get()[0]))
            {
                $pharmacy = $queryBuilder->build()->get()[0];
                $status = 200;
            }
            else
            {
                $status = 404;
            }

            return response()->json([
                'status' => $status,
                'pharmacy' => $pharmacy
            ],200);
        }
        else
        {
            $pharmacies = $queryBuilder->build()->get();
            $status = 0;
            
            if($pharmacies && count($pharmacies) > 0) $status = 200;
            else $status = 404;

            return response()->json([
                'status' => $status,
                'pharmacies' => $pharmacies
            ],200);
        }
        */
        $status = 0;
        $message = "";
        $pharmacy = null;


        if($request->registration_number)
        {
            $registration_number = $request->registration_number;

            // Searching for Addo
            $addo = Addo::where('accreditation_no', $registration_number)->first();

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
                    'ward' => $addo->ward->name,
                    'district' => $addo->district->name,
                    'region' => $addo->region->name,
                    'registration_date' => '',
                    'pharmacist' => "",
                    'owner' => ucfirst(strtolower($addo->owner->firstname)) ." ". ucfirst(strtolower($addo->owner->middlename)) ." ". ucfirst(strtolower($addo->owner->surname))
                );
            }
            else{
                // No Addo found
                // Searching for Premise
                $premise = Premise::where('fin', $registration_number)->first();

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
                        'ward' => $premise->ward->name,
                        'district' => $premise->district->name,
                        'region' => $premise->region->name,
                        'registration_date' => $premise->registration_date,
                        'pharmacist' => ucfirst(strtolower($premise->pharmacist->firstname)) ." ". ucfirst(strtolower($premise->pharmacist->middlename)) ." ". ucfirst(strtolower($premise->pharmacist->surname)),
                        'owner' => ucfirst(strtolower($premise->owner->firstname)) ." ". ucfirst(strtolower($premise->owner->middlename)) ." ". ucfirst(strtolower($premise->owner->surname))
                    );
                }
                else
                {
                    // No premise found
                    $status = 404;
                }
            }
        }
        else
        {
            $status = 404;
            $message = "Pitisha namba ya usajili wa Duka la Dawa.";
            $pharmacy = null;
        }

        return response()->json([
            'status' => $status,
            'message' => $message,
            'pharmacy' => $pharmacy
        ],200);
    }

    public function show(Pharmacy $pharmacy)
    {
        $status = "";
        if($pharmacy) $status = 200;
        else $status = 404;

        return response()->json([
            'status' => $status,
            'pharmacy' => $pharmacy
        ], 200);
    }

    public function store(Request $request)
    {
        $pharmacy = Pharmacy::create($request->all());

        return response()->json([
            'status' => 201,
            'pharmacy' => $pharmacy
        ], 201);
    }

    public function update(Request $request, Pharmacy $pharmacy)
    {
        $pharmacy->update($request->all());

        return response()->json([
            'status' => 200,
            'pharmacy' => $pharmacy
        ], 200);
    }

    public function delete(Pharmacy $pharmacy)
    {
        $pharmacy->delete();

        return response()->json(null, 204);
    }
}
