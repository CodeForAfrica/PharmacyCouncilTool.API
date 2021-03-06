<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dispenser;

use Unlu\Laravel\Api\QueryBuilder;

class DispenserController extends Controller
{
    public function index(Request $request)
    {
        $queryBuilder = new QueryBuilder(new Dispenser, $request);
        
        // Single Dispenser
        if($request->limit && $request->limit == 1)
        {
            $dispenser = json_decode("{}");
            $status = 0;

            if(isset($queryBuilder->build()->get()[0]))
            {
                $dispenser = $queryBuilder->build()->get()[0];
                $status = 200;
            }
            else
            {
                $status = 404;
            }

            return response()->json([
                'status' => $status,
                'dispenser' => $dispenser
            ],200);
        }
        else
        {
            $dispensers = $queryBuilder->build()->get();
            $status = 0;
            
            if($dispensers && count($dispensers) > 0) $status = 200;
            else $status = 404;

            return response()->json([
                'status' => $status,
                'dispensers' => $dispensers
            ],200);
        }
    }

    public function show(Dispenser $dispenser)
    {
        $status = "";
        if($dispenser) $status = 200;
        else $status = 404;

        return response()->json([
            'status' => $status,
            'dispenser' => $dispenser
        ], 200);
    }

    public function store(Request $request)
    {
        $dispenser = Dispenser::create($request->all());

        return response()->json([
            'status' => 201,
            'dispenser' => $dispenser
        ], 201);
    }

    public function update(Request $request, Dispenser $dispenser)
    {
        $dispenser->update($request->all());

        return response()->json([
            'status' => 200,
            'dispenser' => $dispenser
        ], 200);
    }

    public function delete(Dispenser $dispenser)
    {
        $dispenser->delete();

        return response()->json(null, 204);
    }
}
