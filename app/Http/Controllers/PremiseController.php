<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Premise;

use Unlu\Laravel\Api\QueryBuilder;

class PremiseController extends Controller
{
    public function index(Request $request)
    {
        $queryBuilder = new QueryBuilder(new Premise, $request);
        
        // Single Premise
        if($request->limit && $request->limit == 1)
        {
            $premise = json_decode("{}");
            $status = 0;

            if(isset($queryBuilder->build()->get()[0]))
            {
                $premise = $queryBuilder->build()->get()[0];
                $status = 200;
                $premise->owner = $premise->owner;
                $premise->pharmacist = $premise->pharmacist;
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
            $status = 0;
            
            if($premises && count($premises) > 0)
            {
                $status = 200;

                for($x=0; $x < count($premises); $x++){
                    $premises[$x]->owner = $premises[$x]->owner;
                    $premises[$x]->pharmacist = $premises[$x]->pharmacist;
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
        if($premise)
        {
            $status = 200;
            $premise->owner = $premise->owner;
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
