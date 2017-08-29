<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

use Unlu\Laravel\Api\QueryBuilder;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $queryBuilder = new QueryBuilder(new Report, $request);
        return response()->json([
            'status' => 200,
            'reports' => $queryBuilder->build()->get()
        ],200);
    }

    public function show(Report $report)
    {
        return response()->json([
            'status' => 200,
            'report' => $report
        ], 200);
    }

    public function store(Request $request)
    {
        $report = Report::create($request->all());

        return response()->json([
            'status' => 201,
            'report' => $report
        ], 201);
    }

    public function update(Request $request, Report $report)
    {
        $report->update($request->all());

        return response()->json([
            'status' => 200,
            'report' => $report
        ], 200);
    }

    public function delete(Report $report)
    {
        $report->delete();

        return response()->json(null, 204);
    }
}
