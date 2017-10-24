<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

use Unlu\Laravel\Api\QueryBuilder;

class OwnerController extends Controller
{
    public function index(Request $request)
    {
        $queryBuilder = new QueryBuilder(new Owner, $request);
        
        // Single Owner
        if($request->limit && $request->limit == 1)
        {
            $owner = json_decode("{}");
            $status = 0;

            if(isset($queryBuilder->build()->get()[0]))
            {
                $owner = $queryBuilder->build()->get()[0];
                $status = 200;
            }
            else
            {
                $status = 404;
            }

            return response()->json([
                'status' => $status,
                'owner' => $owner
            ],200);
        }
        else
        {
            $owners = $queryBuilder->build()->get();
            $status = 0;
            
            if($owners && count($owners) > 0) $status = 200;
            else $status = 404;

            return response()->json([
                'status' => $status,
                'owners' => $owners
            ],200);
        }
    }

    public function show(Owner $owner)
    {
        $status = "";
        if($owner) $status = 200;
        else $status = 404;

        return response()->json([
            'status' => $status,
            'owner' => $owner
        ], 200);
    }

    public function store(Request $request)
    {
        $owner = Owner::create($request->all());

        return response()->json([
            'status' => 201,
            'owner' => $owner
        ], 201);
    }

    public function update(Request $request, Owner $owner)
    {
        $owner->update($request->all());

        return response()->json([
            'status' => 200,
            'owner' => $owner
        ], 200);
    }

    public function delete(Owner $owner)
    {
        $owner->delete();

        return response()->json(null, 204);
    }
}
