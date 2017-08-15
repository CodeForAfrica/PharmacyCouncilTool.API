<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pharmacy;

class PharmacyController extends Controller
{
    public function index()
    {
        return response()->json([
            'pharmacies' => Pharmacy::all()
        ], 200);
    }

    public function show(Pharmacy $pharmacy)
    {
        return response()->json([
            'pharmacy' => $pharmacy
        ], 200);
    }

    public function store(Request $request)
    {
        $pharmacy = Pharmacy::create($request->all());

        return response()->json($pharmacy, 201);
    }

    public function update(Request $request, Pharmacy $pharmacy)
    {
        $pharmacy->update($request->all());

        return response()->json($pharmacy, 200);
    }

    public function delete(Pharmacy $pharmacy)
    {
        $pharmacy->delete();

        return response()->json(null, 204);
    }
}
