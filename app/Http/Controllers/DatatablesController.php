<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Premise;
use App\Owner;
use App\Personnel;
use App\Dispenser;
use App\User;
use App\Attendance;
use App\Report;
use App\Region;
use App\District;
use App\Ward;
use App\Addo;

use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class DatatablesController extends Controller
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

    public function index(){

    }

    public function getPremises(Request $request){
        $columns = array(
            0 => 'id',
            1 => 'fin', 
            2 => 'name',
            3 => 'category',
            4 => 'district',
            5 => 'region',
            6 => 'id'
        );

        //Getting status
        $status = $request->status;

        if($status != ""){
            $totalData = Premise::where('renewal_status','=', $status)->count();
            $totalFiltered = $totalData;
        }
        else{
            $totalData = Premise::count();
            $totalFiltered = $totalData;
        }
        
        $limit = $request->limit;
        $start = $request->start;

        $order = $columns[$request->order];
        $dir = $request->dir;
        $search = $request->search;

        if(empty($search))
        {            
            if($status != ""){
                $premises = Premise::where('renewal_status','=', $status)
                         ->offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
            }
            else{
                $premises = Premise::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
            }
        }
        else{
            if($status != ""){
                $premises =  Premise::where('renewal_status','=', $status)
                                ->where(function($query) use($search){
                                    $query->where('fin','LIKE',"%{$search}%")
                                        ->orWhere('name', 'LIKE',"%{$search}%")
                                        ->orWhere('category', 'LIKE',"%{$search}%");
                                })
                                ->offset($start)
                                ->limit($limit)
                                ->orderBy($order,$dir)
                                ->get();

                $totalFiltered = Premise::where('renewal_status','=', $status)
                                ->where(function($query) use($search){
                                    $query->where('fin','LIKE',"%{$search}%")
                                        ->orWhere('name', 'LIKE',"%{$search}%")
                                        ->orWhere('category', 'LIKE',"%{$search}%");
                                })
                                ->count();
            }
            else{
                $premises =  Premise::where('fin','LIKE',"%{$search}%")
                                ->orWhere('name', 'LIKE',"%{$search}%")
                                ->orWhere('category', 'LIKE',"%{$search}%")
                                ->offset($start)
                                ->limit($limit)
                                ->orderBy($order,$dir)
                                ->get();

                $totalFiltered = Premise::where('fin','LIKE',"%{$search}%")
                                ->orWhere('name', 'LIKE',"%{$search}%")
                                ->orWhere('category', 'LIKE',"%{$search}%")
                                ->count();
            }
        }

        $data = array();
        if(!empty($premises))
        {
            foreach ($premises as $premise)
            {
                $nestedData['id'] = $premise->id;
                $nestedData['fin'] = $premise->fin;
                $nestedData['name'] = $premise->name;
                $nestedData['category'] = $premise->category;

                    // check for region
                    if($premise->region_id != 9999)
                        $premise->region = $premise->region;
                    else $premise->region = $this->unknown_region;

                    // Check for district
                    if($premise->district_id != 9999)
                        $premise->district = $premise->district;
                    else $premise->district = $this->unknown_district;

                    // Check for pharmacist
                    if($premise->pharmacist_id != 9999)
                        $premise->pharmacist = $premise->pharmacist;
                    else $premise->pharmacist = $this->unknown_personnel;
                    
                $nestedData['district'] = $premise->district['name'];
                $nestedData['region'] = $premise->region['name'];
                $nestedData['pharmacist'] = $premise->pharmacist['firstname']." ".$premise->pharmacist['surname'];
                $nestedData['options'] = "<a href='/admin/pharmacies/delete/".$premise->id."' type='button' class='btn btn-xs btn-danger no-radius' style='margin-right:10px'>Delete</a>";
                $nestedData['options'] .= "<a href='/admin/pharmacies/edit/".$premise->id."' type='button' class='btn btn-xs btn-warning no-radius' style='margin-right:10px;'>Edit</a>";
                $nestedData['options'] .= "<a href='/admin/pharmacies/view/".$premise->id."' type='button' class='btn btn-xs btn-success no-radius'>View</a>";
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
            );

        echo json_encode($json_data);
    }

    public function getOwners(Request $request){
        $columns = array(
            0 => 'id',
            1 => 'firstname', 
            2 => 'middlename',
            3 => 'surname',
            4 => 'phone',
            5 => 'email',
            6 => 'occupation',
            7 => 'status',
            8 => 'id'
        );

        //Getting status
        $status = $request->status;

        if($status != ""){
            $totalData = Owner::where('status','=', $status)->count();
            $totalFiltered = $totalData;
        }
        else{
            $totalData = Owner::count();
            $totalFiltered = $totalData;
        }
        
        $limit = $request->limit;
        $start = $request->start;

        $order = $columns[$request->order];
        $dir = $request->dir;
        $search = $request->search;

        if(empty($search))
        {            
            if($status != ""){
                $owners = Owner::where('status','=', $status)
                         ->offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
            }
            else{
                $owners = Owner::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
            }
        }
        else{
            if($status != ""){
                $owners =  Owner::where('status','=', $status)
                            ->where(function($query) use($search){
                                $query->where('firstname','LIKE',"%{$search}%")
                                    ->orWhere('middlename', 'LIKE',"%{$search}%")
                                    ->orWhere('surname', 'LIKE',"%{$search}%")
                                    ->orWhere('phone', 'LIKE',"%{$search}%")
                                    ->orWhere('email', 'LIKE',"%{$search}%")
                                    ->orWhere('occupation', 'LIKE',"%{$search}%");
                            })
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

                $totalFiltered = Owner::where('status','=', $status)
                            ->where(function($query) use($search){
                                $query->where('firstname','LIKE',"%{$search}%")
                                    ->orWhere('middlename', 'LIKE',"%{$search}%")
                                    ->orWhere('surname', 'LIKE',"%{$search}%")
                                    ->orWhere('phone', 'LIKE',"%{$search}%")
                                    ->orWhere('email', 'LIKE',"%{$search}%")
                                    ->orWhere('occupation', 'LIKE',"%{$search}%");
                            })
                            ->count();
            }
            else{
                $owners =  Owner::where('firstname','LIKE',"%{$search}%")
                            ->orWhere('middlename', 'LIKE',"%{$search}%")
                            ->orWhere('surname', 'LIKE',"%{$search}%")
                            ->orWhere('phone', 'LIKE',"%{$search}%")
                            ->orWhere('email', 'LIKE',"%{$search}%")
                            ->orWhere('occupation', 'LIKE',"%{$search}%")
                            ->orWhere('status', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

                $totalFiltered = Owner::where('firstname','LIKE',"%{$search}%")
                            ->orWhere('middlename', 'LIKE',"%{$search}%")
                            ->orWhere('surname', 'LIKE',"%{$search}%")
                            ->orWhere('phone', 'LIKE',"%{$search}%")
                            ->orWhere('email', 'LIKE',"%{$search}%")
                            ->orWhere('occupation', 'LIKE',"%{$search}%")
                            ->orWhere('status', 'LIKE',"%{$search}%")
                            ->count();
            }
        }

        $data = array();
        if(!empty($owners))
        {
            foreach ($owners as $owner)
            {
                $nestedData['id'] = $owner->id;
                $nestedData['firstname'] = $owner->firstname;
                $nestedData['middlename'] = $owner->middlename;
                $nestedData['surname'] = $owner->surname;
                $nestedData['phone'] = $owner->phone;
                $nestedData['email'] = $owner->email;
                $nestedData['occupation'] = $owner->occupation;
                $nestedData['status'] = $owner->status;

                $nestedData['options'] = "<a href='/admin/owners/delete/".$owner->id."' type='button' class='btn btn-xs btn-danger no-radius' style='margin-right:10px'>Delete</a>";
                $nestedData['options'] .= "<a href='/admin/owners/edit/".$owner->id."' type='button' class='btn btn-xs btn-warning no-radius' style='margin-right:10px;'>Edit</a>";
                $nestedData['options'] .= "<a href='/admin/owners/view/".$owner->id."' type='button' class='btn btn-xs btn-success no-radius'>View</a>";
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
            );

        echo json_encode($json_data);
    }

    public function getPersonnels(Request $request){
        $columns = array(
            0 => 'id',
            1 => 'type',
            2 => 'firstname', 
            3 => 'middlename',
            4 => 'surname',
            5 => 'phone',
            6 => 'email',
            7 => 'id'
        );

        //Getting type
        $type = $request->type;

        if($type != ""){
            $totalData = Personnel::where('type','=', $type)->count();
            $totalFiltered = $totalData;
        }
        else{
            $totalData = Personnel::count();
            $totalFiltered = $totalData;
        }
        
        $limit = $request->limit;
        $start = $request->start;

        $order = $columns[$request->order];
        $dir = $request->dir;
        $search = $request->search;

        if(empty($search))
        {            
            if($type != ""){
                $personnels = Personnel::where('type','=', "$type")
                         ->offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
            }
            else{
                $personnels = Personnel::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
            }
        }
        else{
            if($type != ""){
                $personnels =  Personnel::where('type', '=', $type)
                            ->where(function($query) use($search){
                                $query->orwhere('firstname','LIKE',"%{$search}%")
                                    ->orWhere('middlename', 'LIKE',"%{$search}%")
                                    ->orWhere('surname', 'LIKE',"%{$search}%")
                                    ->orWhere('phone', 'LIKE',"%{$search}%")
                                    ->orWhere('email', 'LIKE',"%{$search}%");
                            })
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

                $totalFiltered = Personnel::where('type', '=', $type)
                            ->where(function($query) use($search){
                                $query->orwhere('firstname','LIKE',"%{$search}%")
                                    ->orWhere('middlename', 'LIKE',"%{$search}%")
                                    ->orWhere('surname', 'LIKE',"%{$search}%")
                                    ->orWhere('phone', 'LIKE',"%{$search}%")
                                    ->orWhere('email', 'LIKE',"%{$search}%");
                            })
                            ->count();
            }
            else{
                $personnels =  Personnel::where('type', 'LIKE',"%{$search}%")
                            ->orwhere('firstname','LIKE',"%{$search}%")
                            ->orWhere('middlename', 'LIKE',"%{$search}%")
                            ->orWhere('surname', 'LIKE',"%{$search}%")
                            ->orWhere('phone', 'LIKE',"%{$search}%")
                            ->orWhere('email', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

                $totalFiltered = Personnel::where('type', 'LIKE',"%{$search}%")
                            ->orwhere('firstname','LIKE',"%{$search}%")
                            ->orWhere('middlename', 'LIKE',"%{$search}%")
                            ->orWhere('surname', 'LIKE',"%{$search}%")
                            ->orWhere('phone', 'LIKE',"%{$search}%")
                            ->orWhere('email', 'LIKE',"%{$search}%")
                            ->count();
            }
        }

        $data = array();
        if(!empty($personnels))
        {
            foreach ($personnels as $personnel)
            {
                $nestedData['id'] = $personnel->id;
                $nestedData['type'] = $personnel->type;
                $nestedData['firstname'] = $personnel->firstname;
                $nestedData['middlename'] = $personnel->middlename;
                $nestedData['surname'] = $personnel->surname;
                $nestedData['phone'] = $personnel->phone;
                $nestedData['email'] = $personnel->email;

                $nestedData['options'] = "<a href='/admin/personnel/delete/".$personnel->id."' type='button' class='btn btn-xs btn-danger no-radius' style='margin-right:10px'>Delete</a>";
                $nestedData['options'] .= "<a href='/admin/personnel/edit/".$personnel->id."' type='button' class='btn btn-xs btn-warning no-radius' style='margin-right:10px;'>Edit</a>";
                $nestedData['options'] .= "<a href='/admin/personnel/view/".$personnel->id."' type='button' class='btn btn-xs btn-success no-radius'>View</a>";
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
            );

        echo json_encode($json_data);
    }

    public function getDispensers(Request $request){
        $columns = array(
            0 => 'id',
            1 => 'pin',
            2 => 'fullname', 
            3 => 'registration_date',
            4 => 'certificate_no',
            5 => 'training_place',
            7 => 'id'
        );

        $totalData = Dispenser::count();
            
        $totalFiltered = $totalData;
        
        $limit = $request->limit;
        $start = $request->start;

        $order = $columns[$request->order];
        $dir = $request->dir;
        $search = $request->search;

        if(empty($search))
        {            
            $dispensers = Dispenser::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else{
            $dispensers =  Dispenser::where('pin', 'LIKE',"%{$search}%")
                            ->orwhere('firstname','LIKE',"%{$search}%")
                            ->orWhere('middlename', 'LIKE',"%{$search}%")
                            ->orWhere('surname', 'LIKE',"%{$search}%")
                            ->orWhere('registration_date', 'LIKE',"%{$search}%")
                            ->orWhere('certificate_no', 'LIKE',"%{$search}%")
                            ->orWhere('training_place', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

            $totalFiltered = Dispenser::where('pin', 'LIKE',"%{$search}%")
                            ->orwhere('firstname','LIKE',"%{$search}%")
                            ->orWhere('middlename', 'LIKE',"%{$search}%")
                            ->orWhere('surname', 'LIKE',"%{$search}%")
                            ->orWhere('registration_date', 'LIKE',"%{$search}%")
                            ->orWhere('certificate_no', 'LIKE',"%{$search}%")
                            ->orWhere('training_place', 'LIKE',"%{$search}%")
                            ->count();
        }

        $data = array();
        if(!empty($dispensers))
        {
            foreach ($dispensers as $dispenser)
            {
                $nestedData['id'] = $dispenser->id;
                $nestedData['pin'] = $dispenser->pin;
                $nestedData['fullname'] = $dispenser->firstname." ".$dispenser->middlename." ".$dispenser->surname;
                $nestedData['registration_date'] = $dispenser->registration_date;
                $nestedData['certificate_no'] = $dispenser->certificate_no;
                $nestedData['training_place'] = $dispenser->training_place;

                $nestedData['options'] = "<a href='/admin/dispensers/delete/".$dispenser->id."' type='button' class='btn btn-xs btn-danger no-radius' style='margin-right:10px'>Delete</a>";
                $nestedData['options'] .= "<a href='/admin/dispensers/edit/".$dispenser->id."' type='button' class='btn btn-xs btn-warning no-radius' style='margin-right:10px;'>Edit</a>";
                $nestedData['options'] .= "<a href='/admin/dispensers/view/".$dispenser->id."' type='button' class='btn btn-xs btn-success no-radius'>View</a>";
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
            );

        echo json_encode($json_data);
    }

    public function getUsers(Request $request){
        $columns = array(
            0 => 'id',
            1 => 'name',
            2 => 'email', 
            3 => 'date_registered',
            4 => 'id'
        );

        $totalData = User::count();
            
        $totalFiltered = $totalData;
        
        $limit = $request->limit;
        $start = $request->start;

        $order = $columns[$request->order];
        $dir = $request->dir;
        $search = $request->search;

        if(empty($search))
        {            
            $users = User::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else{
            $users =  User::where('name', 'LIKE',"%{$search}%")
                            ->orwhere('email','LIKE',"%{$search}%")
                            ->orWhere('date_registered', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

            $totalFiltered = User::where('name', 'LIKE',"%{$search}%")
                            ->orwhere('email','LIKE',"%{$search}%")
                            ->orWhere('date_registered', 'LIKE',"%{$search}%")
                            ->count();
        }

        $data = array();
        if(!empty($users))
        {
            foreach ($users as $user)
            {
                $nestedData['id'] = $user->id;
                $nestedData['name'] = $user->name;
                $nestedData['email'] = $user->email;
                $nestedData['date_registered'] = Carbon::createFromFormat('Y-m-d H:i:s',$user->created_at)->toDateTimeString();

                $nestedData['options'] = "<a href='#' type='button' class='btn btn-xs btn-danger no-radius' style='margin-right:10px;'>Delete</a>";
                $nestedData['options'] .= "<a href='/admin/users/edit/".$user->id."' type='button' class='btn btn-xs btn-warning no-radius' style='margin-right:10px;'>Edit</a>";
                $nestedData['options'] .= "<a href='/admin/users/view/".$user->id."' type='button' class='btn btn-xs btn-success no-radius'>View</a>";
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
            );

        echo json_encode($json_data);
    }

    public function getAttendances(Request $request){
        $columns = array(
            0 => 'id',
            1 => 'type',
            2 => 'pharmacy_registration_no', 
            3 => 'pharmacy_name',
            4 => 'pharmacist',
            5 => 'days',
            6 => 'owner',
            7 => 'id'
        );

        $totalData = Attendance::count();
            
        $totalFiltered = $totalData;
        
        $limit = $request->limit;
        $start = $request->start;

        $order = $columns[$request->order];
        $dir = $request->dir;
        $search = $request->search;

        if(empty($search))
        {            
            $attendances = Attendance::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else{
            $attendaces =  Attendance::where('name', 'LIKE',"%{$search}%")
                            ->orwhere('email','LIKE',"%{$search}%")
                            ->orWhere('date_registered', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

            $totalFiltered = Attendance::where('name', 'LIKE',"%{$search}%")
                            ->orwhere('email','LIKE',"%{$search}%")
                            ->orWhere('date_registered', 'LIKE',"%{$search}%")
                            ->count();
        }

        $data = array();
        if(!empty($attendances))
        {
            foreach ($attendances as $attendance)
            {
                $pharmacy_name = "UNKNOWN";
                $pharmacist = "UNKNOWN";
                $owner = "UNKNOWN";

                $nestedData['id'] = $attendance->id;
                $nestedData['type'] = $attendance->type;
                $nestedData['pharmacy_registration_no'] = $attendance->pharmacy_registration_number;
                    // Finding Pharmacy Name
                    if($attendance->type == "Premise"){
                        $pharmacy = Premise::where('fin', $attendance->pharmacy_registration_number)->first();
                        if($pharmacy){
                            $pharmacy_name = $pharmacy->name;
                            $pharmacist = ucfirst(strtolower($pharmacy->pharmacist->firstname)) ." ". ucfirst(strtolower($pharmacy->pharmacist->middlename)) ." ". ucfirst(strtolower($pharmacy->pharmacist->surname));
                        }
                    }
                    else if($attendance->type == "Addo"){
                        $pharmacy = Addo::where('accreditation_no', $attendance->pharmacy_registration_number)->first();
                        if($pharmacy){
                            $pharmacy_name = $pharmacy->name;
                            //$pharmacist = ucfirst(strtolower($pharmacy->pharmacist->firstname)) ." ". ucfirst(strtolower($pharmacy->pharmacist->middlename)) ." ". ucfirst(strtolower($pharmacy->pharmacist->surname));
                        }
                    }
                
                $nestedData['pharmacy_name'] = $pharmacy_name;
                $nestedData['pharmacist'] = $pharmacist;
                $nestedData['days'] = $attendance->days;
                $nestedData['owner'] = $owner;

                $nestedData['options'] = "<a href='#' type='button' class='btn btn-xs btn-danger no-radius' style='margin-right:10px;'>Delete</a>";
                $nestedData['options'] .= "<a href='/admin/users/edit/".$attendance->id."' type='button' class='btn btn-xs btn-warning no-radius' style='margin-right:10px;'>Edit</a>";
                $nestedData['options'] .= "<a href='/admin/users/view/".$attendance->id."' type='button' class='btn btn-xs btn-success no-radius'>View</a>";
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
            );

        echo json_encode($json_data);
    }

    public function getReports(Request $request){
        $columns = array(
            0 => 'id',
            1 => 'gender',
            2 => 'pharmacy_registration_no', 
            3 => 'message',
            4 => 'id'
        );

        //Getting gender
        $gender = $request->gender;

        if($gender != ""){
            $totalData = Report::where('gender','=', $gender)->count();
            $totalFiltered = $totalData;
        }
        else{
            $totalData = Report::count();
            $totalFiltered = $totalData;
        }
        
        $limit = $request->limit;
        $start = $request->start;

        $order = $columns[$request->order];
        $dir = $request->dir;
        $search = $request->search;

        if(empty($search))
        {            
            if($gender != ""){
                $reports = Report::where('gender','=', $gender)
                         ->offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
            }
            else{
                $reports = Report::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
            }
        }
        else{
            if($gender != ""){
                $reports =  Report::where('gender', '=', $gender)
                            ->where(function($query) use($search){
                                $query->orwhere('pharmacy_registration_number','LIKE',"%{$search}%")
                                    ->orWhere('message', 'LIKE',"%{$search}%");
                            })
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

                $totalFiltered = Report::where('gender', '=', $gender)
                            ->where(function($query) use($search){
                                $query->orwhere('pharmacy_registration_number','LIKE',"%{$search}%")
                                    ->orWhere('message', 'LIKE',"%{$search}%");
                            })
                            ->count();
            }
            else{
                $reports =  Report::where('gender', 'LIKE',"%{$search}%")
                            ->orwhere('pharmacy_registration_number','LIKE',"%{$search}%")
                            ->orWhere('message', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

                $totalFiltered = Report::where('gender', 'LIKE',"%{$search}%")
                            ->orwhere('pharmacy_registration_number','LIKE',"%{$search}%")
                            ->orWhere('message', 'LIKE',"%{$search}%")
                            ->count();
            }
        }

        $data = array();
        if(!empty($reports))
        {
            foreach ($reports as $report)
            {
                $nestedData['id'] = $report->id;
                $nestedData['gender'] = $report->gender;
                $nestedData['pharmacy_registration_no'] = $report->pharmacy_registration_number;
                $nestedData['message'] = $report->message;

                $nestedData['options'] = "<a href='#' type='button' class='btn btn-xs btn-danger no-radius' style='margin-right:10px;'>Delete</a>";
                $nestedData['options'] .= "<a href='#' type='button' class='btn btn-xs btn-warning no-radius' style='margin-right:10px;'>Edit</a>";
                $nestedData['options'] .= "<a href='/admin/reports/view/".$report->id."' type='button' class='btn btn-xs btn-success no-radius'>View</a>";
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
            );

        echo json_encode($json_data);
    }

    public function getRegions(Request $request){
        $columns = array(
            0 => 'id',
            1 => 'name',
            2 => 'capital',
            3 => 'districts',
            4 => 'zone',
            5 => 'population',
            6 => 'options'
        );

        $totalData = Region::count();
            
        $totalFiltered = $totalData;
        
        $limit = $request->limit;
        $start = $request->start;

        $order = $columns[$request->order];
        $dir = $request->dir;
        $search = $request->search;

        if(empty($search))
        {            
            $regions = Region::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else{
            $regions =  Region::where('name', 'LIKE',"%{$search}%")
                            ->orwhere('capital','LIKE',"%{$search}%")
                            ->orWhere('districts', 'LIKE',"%{$search}%")
                            ->orWhere('zone', 'LIKE',"%{$search}%")
                            ->orWhere('population', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

            $totalFiltered = Region::where('name', 'LIKE',"%{$search}%")
                            ->orwhere('capital','LIKE',"%{$search}%")
                            ->orWhere('districts', 'LIKE',"%{$search}%")
                            ->orWhere('zone', 'LIKE',"%{$search}%")
                            ->orWhere('population', 'LIKE',"%{$search}%")
                            ->count();
        }

        $data = array();
        if(!empty($regions))
        {
            foreach ($regions as $region)
            {
                $nestedData['id'] = $region->id;
                $nestedData['name'] = $region->name;
                $nestedData['capital'] = $region->capital;
                $nestedData['districts'] = $region->districts;
                $nestedData['zone'] = $region->zone;
                $nestedData['population'] = $region->population;

                $nestedData['options'] = "<a href='#' type='button' class='btn btn-xs btn-danger no-radius' style='margin-right:10px;'disabled>Delete</a>";
                $nestedData['options'] .= "<a href='#' type='button' class='btn btn-xs btn-warning no-radius' style='margin-right:10px;'disabled>Edit</a>";
                $nestedData['options'] .= "<a href='#' type='button' class='btn btn-xs btn-success no-radius' disabled>View</a>";
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
            );

        echo json_encode($json_data);
    }

    public function getDistricts(Request $request){
        $columns = array(
            0 => 'id',
            1 => 'name',
            2 => 'capital',
            3 => 'region',
            4 => 'population',
            5 => 'options'
        );

        $totalData = District::count();
            
        $totalFiltered = $totalData;
        
        $limit = $request->limit;
        $start = $request->start;

        $order = $columns[$request->order];
        $dir = $request->dir;
        $search = $request->search;

        if(empty($search))
        {            
            $districts = District::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else{
            $districts =  District::where('name', 'LIKE',"%{$search}%")
                            ->orwhere('capital','LIKE',"%{$search}%")
                            ->orWhere('population', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

            $totalFiltered = District::where('name', 'LIKE',"%{$search}%")
                            ->orwhere('capital','LIKE',"%{$search}%")
                            ->orWhere('population', 'LIKE',"%{$search}%")
                            ->count();
        }

        $data = array();
        if(!empty($districts))
        {
            foreach ($districts as $district)
            {
                $region_name = "UNKNOWN";

                $nestedData['id'] = $district->id;
                $nestedData['name'] = $district->name;
                $nestedData['capital'] = $district->capital;
                    // Finding Region Name
                    $region = Region::where('id', $district->region_id)->first();
                    if($region) $region_name = $region->name;
                    
                $nestedData['region'] = $region_name;
                $nestedData['population'] = $district->population;

                $nestedData['options'] = "<a href='#' type='button' class='btn btn-xs btn-danger no-radius' style='margin-right:10px;'disabled>Delete</a>";
                $nestedData['options'] .= "<a href='#' type='button' class='btn btn-xs btn-warning no-radius' style='margin-right:10px;'disabled>Edit</a>";
                $nestedData['options'] .= "<a href='#' type='button' class='btn btn-xs btn-success no-radius' disabled>View</a>";
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
            );

        echo json_encode($json_data);
    }

    public function getWards(Request $request){
        $columns = array(
            0 => 'id',
            1 => 'name',
            2 => 'district',
            3 => 'options'
        );

        $totalData = Ward::count();
            
        $totalFiltered = $totalData;
        
        $limit = $request->limit;
        $start = $request->start;

        $order = $columns[$request->order];
        $dir = $request->dir;
        $search = $request->search;

        if(empty($search))
        {            
            $wards = Ward::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else{
            $wards =  Ward::where('name', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

            $totalFiltered = Ward::where('name', 'LIKE',"%{$search}%")
                            ->count();
        }

        $data = array();
        if(!empty($wards))
        {
            foreach ($wards as $ward)
            {
                $district_name = "UNKNOWN";

                $nestedData['id'] = $ward->id;
                $nestedData['name'] = $ward->name;
                    // Finding District Name
                    $district = District::where('id', $ward->district_id)->first();
                    if($district) $district_name = $district->name;
                
                $nestedData['district'] = $district_name;

                $nestedData['options'] = "<a href='#' type='button' class='btn btn-xs btn-danger no-radius' style='margin-right:10px;'disabled>Delete</a>";
                $nestedData['options'] .= "<a href='#' type='button' class='btn btn-xs btn-warning no-radius' style='margin-right:10px;'disabled>Edit</a>";
                $nestedData['options'] .= "<a href='#' type='button' class='btn btn-xs btn-success no-radius' disabled>View</a>";
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
            );

        echo json_encode($json_data);
    }

    public function getAddos(Request $request){
        $columns = array(
            0 => 'id',
            1 => 'name', 
            2 => 'fin',
            3 => 'region',
            4 => 'district',
            5 => 'ward',
            6 => 'owners',
            7 => 'id'
        );

        $totalData = Addo::count();
        $totalFiltered = $totalData;
        
        $limit = $request->limit;
        $start = $request->start;

        $order = $columns[$request->order];
        $dir = $request->dir;
        $search = $request->search;

        if(empty($search))
        {            
            $addos = Addo::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else{
            $addos =  Addo::where('name','LIKE',"%{$search}%")
                                ->orWhere('fin', 'LIKE',"%{$search}%")
                                ->offset($start)
                                ->limit($limit)
                                ->orderBy($order,$dir)
                                ->get();

            $totalFiltered = Addo::where('name','LIKE',"%{$search}%")
                                ->orWhere('fin', 'LIKE',"%{$search}%")
                                ->orWhere('category', 'LIKE',"%{$search}%")
                                ->count();
        }

        $data = array();
        if(!empty($addos))
        {
            foreach ($addos as $addo)
            {
                $nestedData['id'] = $addo->id;
                $nestedData['name'] = $addo->name;
                $nestedData['fin'] = $addo->fin;

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

                    // Check for owners
                    $owners_names = "";
                    if($addo->owners_ids != ""){
                        $ids = explode(":",$addo->owners_ids);
                        if(count($ids) > 0){
                            for($x=0; $x<count($ids); $x++){
                                // Finding Owner
                                $owner = Owner::where('id', $ids[$x])->first();
                                if($owner){
                                    $owners_names .= ucfirst(strtolower($owner->firstname));
                                    $owners_names .= " ";
                                    $owners_names .= ucfirst(strtolower($owner->surname));
                                }
                            }
                        }
                    }


                $nestedData['region'] = $addo->region['name'];
                $nestedData['district'] = $addo->district['name'];
                $nestedData['ward'] = $addo->ward['name'];
                $nestedData['owners'] = $owners_names;
                $nestedData['options'] = "<a href='/admin/addos/delete/".$addo->id."' type='button' class='btn btn-xs btn-danger no-radius' style='margin-right:10px'>Delete</a>";
                $nestedData['options'] .= "<a href='/admin/addos/edit/".$addo->id."' type='button' class='btn btn-xs btn-warning no-radius' style='margin-right:10px;'>Edit</a>";
                $nestedData['options'] .= "<a href='/admin/addos/view/".$addo->id."' type='button' class='btn btn-xs btn-success no-radius'>View</a>";
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
            );

        echo json_encode($json_data);
    }
}