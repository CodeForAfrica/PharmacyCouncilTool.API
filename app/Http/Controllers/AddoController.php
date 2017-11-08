<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addo;

use Unlu\Laravel\Api\QueryBuilder;

class AddoController extends Controller
{
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
                $addo->region = $addo->region;
                $addo->district = $addo->district;
                $addo->ward = $addo->ward;
                $addo->owner = $addo->owner;
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
                    $addos[$x]->region = $addos[$x]->region;
                    $addos[$x]->district = $addos[$x]->district;
                    $addos[$x]->ward = $addos[$x]->ward;
                    $addos[$x]->owner = $addos[$x]->owner;
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
            $addo->region = $addo->region;
            $addo->district = $addo->district;
            $addo->ward = $addo->ward;
            $addo->owner = $addo->owner;
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
