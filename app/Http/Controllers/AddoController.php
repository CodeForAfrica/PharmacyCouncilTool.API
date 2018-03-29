<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addo;
use App\Owner;

use Unlu\Laravel\Api\QueryBuilder;

class AddoController extends Controller
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

    public function index(Request $request)
    {
        $queryBuilder = new QueryBuilder(new Addo, $request);
        
        // Single Addo
        if($request->limit && $request->limit == 1)
        {
            $addo = json_decode("{}");
            $status = 0;

            if(isset($queryBuilder->build()->get()[0]))
            {
                $addo = $queryBuilder->build()->get()[0];

                // check for region
                if($addo->region_id != 9999)
                    $addo->region = $addo->region;
                else $addo->region = $this->unknown_region;

                // Check for district
                if($addo->district_id != 9999)
                    $addo->district = $addo->district;
                else $addo->district = $this->unknown_district;

                // Check for ward
                if($addo->ward_id !== 9999)
                    $addo->ward = $addo->ward;
                else $addo->ward = $this->unknown_ward;

                //$addo->owner = $addo->owner;
                $status = 200;
            }
            else
            {
                $status = 404;
            }

            return response()->json([
                'status' => $status,
                'addo' => $addo
            ],200);
        }
        else
        {
            $addos = $queryBuilder->build()->get();
            $status = 0;
            
            if($addos && count($addos) > 0)
            {
                $status = 200;

                for($x=0; $x < count($addos); $x++){
                    // check for region
                    if($addos[$x]->region_id != 9999)
                        $addos[$x]->region = $addos[$x]->region;
                    else $addos[$x]->region = $this->unknown_region;

                    // Check for district
                    if($addos[$x]->district_id != 9999)
                        $addos[$x]->district = $addos[$x]->district;
                    else $addos[$x]->district = $this->unknown_district;

                    // Check for ward
                    if($addos[$x]->ward_id !== 9999)
                        $addos[$x]->ward = $addos[$x]->ward;
                    else $addos[$x]->ward = $this->unknown_ward;

                    //$addos[$x]->owner = $addos[$x]->owner;
                }
            }
            else $status = 404;

            return response()->json([
                'status' => $status,
                'addos' => $addos
            ],200);
        }
    }

    public function show(Addo $addo)
    {
        $status = "";
        if($addo)
        {
            // check for region
            if($addo->region_id != 9999)
                $addo->region = $addo->region;
            else $addo->region = $this->unknown_region;

            // Check for district
            if($addo->district_id != 9999)
                $addo->district = $addo->district;
            else $addo->district = $this->unknown_district;

            // Check for ward
            if($addo->ward_id !== 9999 || $addo->ward_id == "")
                $addo->ward = $addo->ward;
            else $addo->ward = $this->unknown_ward;
            
                // Finding Owner
                $owner = Owner::where('id', $addo->owners_ids)->first();
            $addo->owner = $owner;
            $status = 200;
        }
        else $status = 404;

        return response()->json([
            'status' => $status,
            'addo' => $addo
        ], 200);
    }

    public function store(Request $request)
    {
        $addo = Addo::create($request->all());

        return response()->json([
            'status' => 201,
            'addo' => $addo
        ], 201);
    }

    public function update(Request $request, Addo $addo)
    {
        $addo->update($request->all());

        return response()->json([
            'status' => 200,
            'addo' => $addo
        ], 200);
    }

    public function delete(Addo $addo)
    {
        $addo->delete();

        return response()->json(null, 204);
    }
}
