<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pharmacy;
use App\Addo;
use App\Premise;
use App\Owner;

use Unlu\Laravel\Api\QueryBuilder;

class PharmacyController extends Controller
{
    public $unknown_region = array(
        'name' => "UNKNOWN",
        'capital' => "UNKNOWN",
        'districts' => 0,
        'keycode' => "UNKNOWN",
        'area' => "UNKNOWN",
        'population' => "UNKNOWN",
        'postcode' => "UNKNOWN",
        'zone' => "UNKNOWN"
    );

    public $unknown_district = array(
        'region_id' => 9999,
        'name' => "UNKNOWN",
        'keycode' => "UNKNOWN",
        'capital' => "UNKNOWN",
        'area' => "UNKNOWN",
        'population' => "UNKNOWN"
    );

    public $unknown_ward = array(
        'district_id' => 9999,
        'name' => "UNKNOWN",
        'keycode' => "UNKNOWN"
    );

    public $unknown_personnel = array(
        'type' => "UNKNOWN",
        'keycode' => 00,
        'firstname' => "UNKNOWN",
        'middlename' => "UNKNOWN",
        'surname' => "UNKNOWN",
        'phone' => "UNKNOWN",
        'email' => "UNKNOWN"
    );

    public function index(Request $request)
    {
        $status = 0;
        $message = "";
        $pharmacy = null;

        if($request->registration_number)
        {
            $registration_number = $request->registration_number;

            // Searching for Addo
            $addo = Addo::where('fin', $registration_number)->first();

            if($addo)
            {
                $status = 200;
                $message = "success";

                // check for region
                if($addo->region_id != 9999)
                    $addo->region = $addo->region;
                else $addo->region = $this->unknown_region;

                // Check for district
                if($addo->district_id != 9999)
                    $addo->district = $addo->district;
                else $addo->district = $this->unknown_district;

                // Check for ward
                if($addo->ward_id != 9999)
                    $addo->ward = $addo->ward;
                else $addo->ward = $this->unknown_ward;
                
                $pharmacy = array(
                    'type' => "Addo",
                    'registration_number' => $addo->fin,
                    'name' => $addo->name,
                    'location' => $addo->street . " " . $addo->ward['name'],
                    'street' => $addo->street,
                    'ward' => $addo->ward['name'],
                    'district' => $addo->district['name'],
                    'region' => $addo->region['name'],
                    'registration_date' => "UNKNOWN",
                    'pharmacist' => "UNKNOWN",
                    'owners' => ""
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

                    // check for region
                    if($premise->region_id != 9999)
                        $premise->region = $premise->region;
                    else $premise->region = $this->unknown_region;

                    // Check for district
                    if($premise->district_id != 9999)
                        $premise->district = $premise->district;
                    else $premise->district = $this->unknown_district;

                    // Check for ward
                    if($premise->ward_id != 9999)
                        $premise->ward = $premise->ward;
                    else $premise->ward = $this->unknown_ward;

                    // Getting owners
                    if($premise->owners_ids){
                        $owners_ids = explode(":",$premise->owners_ids);
                        if(count($owners_ids) > 0){
                            for($x=0;$x < count($owners_ids); $x++){
                                $owner = Owner::find($owners_ids[$x]);
                                if(!empty($owner) && isset($owner->id)){
                                    $owners[] = $owner;
                                }
                            }
                        }
                    }

                    $premise->owners = $owners;

                    // Check for pharmacist
                    if($premise->pharmacist_id != 9999)
                        $premise->pharmacist = $premise->pharmacist;
                    else $premise->pharmacist = $this->unknown_personnel;
                    
                    $pharmacy = array(
                        'type' => "Premise",
                        'registration_number' => $premise->fin,
                        'name' => $premise->name,
                        'location' => $premise->physical,
                        'street' => $premise->village,
                        'ward' => $premise->ward['name'],
                        'district' => $premise->district['name'],
                        'region' => $premise->region['name'],
                        'registration_date' => $premise->registration_date,
                        'pharmacist' => ucfirst(strtolower($premise->pharmacist->firstname)) ." ". ucfirst(strtolower($premise->pharmacist->middlename)) ." ". ucfirst(strtolower($premise->pharmacist->surname)),
                        'owners' => $premise->owners
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
