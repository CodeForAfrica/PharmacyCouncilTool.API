<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Premise;
use App\Owner;

use Unlu\Laravel\Api\QueryBuilder;

class PremiseController extends Controller
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
        $queryBuilder = new QueryBuilder(new Premise, $request);

        // Single Premise
        if($request->limit && $request->limit == 1)
        {
            $premise = json_decode("{}");
            $owners = array();
            $status = 0;

            if(isset($queryBuilder->build()->get()[0]))
            {
                $premise = $queryBuilder->build()->get()[0];
                $status = 200;

                // check for region
                if($premise->region_id != 9999)
                    $premise->region = $premise->region;
                else $premise->region = $this->unknown_region;

                // Check for district
                if($premise->district_id != 9999)
                    $premise->district = $premise->district;
                else $premise->district = $this->unknown_district;

                // Check for ward
                if($premise->ward_id !== 9999)
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
                if($premise->pharmacist_id !== 9999)
                    $premise->pharmacist = $premise->pharmacist;
                else $premise->pharmacist = $this->unknown_personnel;
            }
            else
            {
                $status = 404;
            }
            return response()->json([
                'status' => $status,
                'premise' => $premise
            ],200);
        }
        else
        {
            $premises = $queryBuilder->build()->get();
            $owners = array();
            $status = 0;
            
            if($premises && count($premises) > 0)
            {
                $status = 200;

                for($x=0; $x < count($premises); $x++){
                    // check for region
                    if($premises[$x]->region_id != 9999)
                        $premises[$x]->region = $premises[$x]->region;
                    else $premises[$x]->region = $this->unknown_region;

                    // Check for district
                    if($premises[$x]->district_id != 9999)
                        $premises[$x]->district = $premises[$x]->district;
                    else $premises[$x]->district = $this->unknown_district;

                    // Check for ward
                    if($premises[$x]->ward_id !== 9999)
                        $premises[$x]->ward = $premises[$x]->ward;
                    else $premises[$x]->ward = $this->unknown_ward;

                    // Getting owners
                    if($premises[$x]->owners_ids){
                        $owners_ids = explode(":",$premises[$x]->owners_ids);
                        if(count($owners_ids) > 0){
                            for($p=0;$p < count($owners_ids); $p++){
                                $owner = Owner::find($owners_ids[$p]);
                                if(!empty($owner) && isset($owner->id)){
                                    $owners[] = $owner;
                                }
                            }
                        }
                    }

                    $premises[$x]->owners = $owners;

                    // Check for pharmacist
                    if($premises[$x]->pharmacist_id !== 9999)
                        $premises[$x]->pharmacist = $premises[$x]->pharmacist;
                    else $premises[$x]->pharmacist = $this->unknown_personnel;
                }
            }
            else $status = 404;

            return response()->json([
                'status' => $status,
                'premises' => $premises
            ],200);
        }
    }

    public function show(Premise $premise)      
    {
        $status = "";
        $owners = array();

        if($premise)
        {
            $status = 200;

            // check for region
            if($premise->region_id != 9999)
                $premise->region = $premise->region;
            else $premise->region = $this->unknown_region;

            // Check for district
            if($premise->district_id != 9999)
                $premise->district = $premise->district;
            else $premise->district = $this->unknown_district;

            // Check for ward
            if($premise->ward_id !== 9999)
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
            $premise->pharmacist = $premise->pharmacist;
        }
        else $status = 404;

        return response()->json([
            'status' => $status,
            'premise' => $premise
        ], 200);
    }

    public function store(Request $request)
    {
        $premise = Premise::create($request->all());

        return response()->json([
            'status' => 201,
            'premise' => $premise
        ], 201);
    }

    public function update(Request $request, Premise $premise)
    {
        $premise->update($request->all());

        return response()->json([
            'status' => 200,
            'premise' => $premise
        ], 200);
    }

    public function delete(Premise $premise)
    {
        $premise->delete();

        return response()->json(null, 204);
    }
}
