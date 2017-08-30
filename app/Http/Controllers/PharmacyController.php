<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pharmacy;

use Unlu\Laravel\Api\QueryBuilder;

class PharmacyController extends Controller
{
    public function index(Request $request)
    {
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
            return response()->json([
                'status' => 200,
                'pharmacies' => $queryBuilder->build()->get()
            ],200);
        }
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
