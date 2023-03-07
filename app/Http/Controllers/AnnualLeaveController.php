<?php

namespace App\Http\Controllers;

use App\Interfaces\AnnualLeaveRepositoryInterface;
use App\Models\AnnualLeave;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AnnualLeaveController extends Controller
{
    private AnnualLeaveRepositoryInterface $annualLeaveRepository;

    public function __construct(AnnualLeaveRepositoryInterface $annualLeaveRepository) 
    {
        $this->annualLeaveRepository = $annualLeaveRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->annualLeaveRepository->getAllannualLeaves()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnnualLeave  $annualLeave
     * @return \Illuminate\Http\Response
     */
    public function show(AnnualLeave $annualLeave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnnualLeave  $annualLeave
     * @return \Illuminate\Http\Response
     */
    public function edit(AnnualLeave $annualLeave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnnualLeave  $annualLeave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnnualLeave $annualLeave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnnualLeave  $annualLeave
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnnualLeave $annualLeave)
    {
        //
    }
}
