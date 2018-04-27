<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addo;
use App\Premise;
use App\Owner;

use Unlu\Laravel\Api\QueryBuilder;

class LookUpController extends Controller
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
        $pharmacies = array();
        $table_data = "";
        $tafuta_query = "";

        if(($request->region && $request->district && $request->ward) || $request->name)
        {
            $region_id = $request->region;
            $district_id = $request->district;
            $ward_id = $request->ward;
            $name = $request->name;

            // Searching for Addos
            if($region_id != 0 && $district_id != 0 && $ward_id != 0 && $name != ""){
                $addos = Addo::where('region_id', $region_id)
                        ->where('district_id', $district_id)
                        ->where('ward_id', $ward_id)
                        ->where('name','LIKE',"%{$name}%")->limit(5)->get();
            }
            else if(($region_id != 0 && $district_id != 0 && $ward_id != 0) && (empty($name) || $name == "")){
                $addos = Addo::where('region_id', $region_id)
                        ->where('district_id', $district_id)
                        ->where('ward_id', $ward_id)->limit(5)->get();
            }
            else if(($region_id == 0 && $district_id == 0 && $ward_id == 0) && $name != ""){
                $addos = Addo::where('name','LIKE',"%{$name}%")->limit(5)->get();
            }

            if(count($addos) > 0){
                for($x = 0; $x < count($addos); $x++){
                    $addo = $addos[$x];

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

                    // Adding to table_data.
                    if($region_id != 0 && $district_id != 0 && $ward_id != 0 && $name != ""){
                        $tafuta_query .= "".$addo->ward['name'].", ".$addo->district['name']." - ".$addo->region['name']." & <strong>Jina</strong> ".$name."";
                    }
                    else if(($region_id != 0 && $district_id != 0 && $ward_id != 0) && (empty($name) || $name == "")){
                        $tafuta_query .= "".$addo->ward['name'].", ".$addo->district['name']." - ".$addo->region['name']."";
                    }
                    else if(($region_id == 0 && $district_id == 0 && $ward_id == 0) && $name != ""){
                        $tafuta_query .= "<strong>Jina</strong> ".$name."";
                    }

                    $table_data .= '
                        <tr>
                            <td style="width:30%;"><strong>Jina la Duka la Dawa</strong></td>
                            <td><span id="pharmacy-name">'.$addo->name.'</span></td>
                        </tr>
                        <tr>
                            <td style="width:30%;"><strong>Namba ya Usajili</strong></td>
                            <td><span id="pharmacy-name">'.$addo->fin.'</span></td>
                        </tr>
                        <tr>
                            <td><strong>Mfamasia</strong></td>
                            <td><span id="pharmacist-name">UNKNOWN</span></td>
                        </tr>
                        <tr>
                            <td><strong>Sehemu</strong></td>
                            <td><span id="pharmacy-location">'.$addo->street.'</span></td>
                        </tr>
                        <tr>
                            <td><strong>Tarehe ya Usajili</strong></td>
                            <td><span id="pharmacy-registration-date">UNKNOWN</span></td>
                        </tr>
                        <tr><td colspan="2" style="border-bottom: 2px solid #ddd; padding: 0px;">&nbsp;</td></tr>
                        <tr><td colspan="2" style="padding: 0px; height: 5px;">&nbsp;</td></tr>';

                    //$pharmacies[] = $pharmacy;
                }// <-- End For Loop
            }

            // Searching for Premises.
            if($region_id != 0 && $district_id != 0 && $ward_id != 0 && $name != ""){
                $premises = Premise::where('region_id', $region_id)
                        ->where('district_id', $district_id)
                        ->where('ward_id', $ward_id)
                        ->where('name','LIKE',"%{$name}%")->limit(5)->get();
            }
            else if(($region_id != 0 && $district_id != 0 && $ward_id != 0) && (empty($name) || $name == "")){
                $premises = Premise::where('region_id', $region_id)
                        ->where('district_id', $district_id)
                        ->where('ward_id', $ward_id)->limit(5)->get();
            }
            else if(($region_id == 0 && $district_id == 0 && $ward_id == 0) && $name != ""){
                $premises = Premise::where('name','LIKE',"%{$name}%")->limit(5)->get();
            }

            if(count($premises) > 0){
                for($p = 0; $p < count($premises); $p++){
                    $premise = $premises[$p];

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
                    $owners_ids = $owners = array();
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

                    // Adding to table_data.
                    if($tafuta_query == ""){
                        if($region_id != 0 && $district_id != 0 && $ward_id != 0 && $name != ""){
                            $tafuta_query .= "".$premise->ward['name'].", ".$premise->district['name']." - ".$premise->region['name']." & <strong>Jina</strong> ".$name."";
                        }
                        else if(($region_id != 0 && $district_id != 0 && $ward_id != 0) && (empty($name) || $name == "")){
                            $tafuta_query .= "".$premise->ward['name'].", ".$premise->district['name']." - ".$premise->region['name']."";
                        }
                        else if(($region_id == 0 && $district_id == 0 && $ward_id == 0) && $name != ""){
                            $tafuta_query .= "<strong>Jina</strong> ".$name."";
                        }
                    }

                    $table_data .= '
                        <tr>
                            <td style="width:30%;"><strong>Jina la Duka la Dawa</strong></td>
                            <td><span id="pharmacy-name">'.$premise->name.'</span></td>
                        </tr>
                        <tr>
                            <td style="width:30%;"><strong>Namba ya Usajili</strong></td>
                            <td><span id="pharmacy-name">'.$premise->fin.'</span></td>
                        </tr>
                        <tr>
                            <td><strong>Mfamasia</strong></td>
                            <td><span id="pharmacist-name">'.ucfirst(strtolower($premise->pharmacist->firstname)) ." ". ucfirst(strtolower($premise->pharmacist->middlename)) ." ". ucfirst(strtolower($premise->pharmacist->surname)).'</span></td>
                        </tr>
                        <tr>
                            <td><strong>Sehemu</strong></td>
                            <td><span id="pharmacy-location">'.$premise->physical.'</span></td>
                        </tr>
                        <tr>
                            <td><strong>Tarehe ya Usajili</strong></td>
                            <td><span id="pharmacy-registration-date">'.$premise->registration_date.'</span></td>
                        </tr>
                        <tr><td colspan="2" style="border-bottom: 2px solid #ddd; padding: 0px;">&nbsp;</td></tr>
                        <tr><td colspan="2" style="padding: 0px; height: 5px;">&nbsp;</td></tr>';

                    //$pharmacies[] = $pharmacy;
                }
            }

            if($table_data != ""){
                $status = 200;
                $message = "Success";
            }
            else{
                $status = 404;
                $message = "Hakuna Pharmacy";
            }
        }
        else
        {
            $status = 404;
            $message = "Pitisha mahali au jina la duka la dawa.";
            $pharmacies = array();
            $table_data = "";
            $tafuta_query = "";
        }

        return response()->json([
            'status' => $status,
            'message' => $message,
            'pharmacies' => $pharmacies,
            'table_data' => $table_data,
            'tafuta_query' => $tafuta_query
        ],200);
    }

    public function search(Request $request){
        $status = 0;
        $message = "";
        $pharmacies = array();

        $location = $request->location;
        $name = $request->name;

        
        if($request->search_by && $request->query)
        {
            // For Addo
            //Search by pharmacy name.
            if($request->search_by == "name"){
                $addos = Addo::where('name','LIKE',"%{$name}%")->limit(20)->get();
            }

            if(count($addos) > 0){
                for($x = 0; $x < count($addos); $x++){
                    $addo = $addos[$x];

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

                    $pharmacies[] = $pharmacy;
                }// <-- End For Loop
            }// <-- End IF

            // For Premise
            //Search by pharmacy name.
            if($request->search_by == "name"){
                $premises = Premise::where('name','LIKE',"%{$name}%")->limit(20)->get();
            }

            if(count($premises) > 0){
                for($p = 0; $p < count($premises); $p++){
                    $premise = $premises[$p];

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
                    $owners_ids = $owners = array();
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

                    $pharmacies[] = $pharmacy;
                }
            }
        }
        else
        {
            $status = 404;
            $message = "Pitisha mahali au jina la duka la dawa.";
            $pharmacies = array();
        }

        return response()->json([
            'status' => $status,
            'message' => $message,
            'pharmacies' => $pharmacies
        ],200);
    }
}

