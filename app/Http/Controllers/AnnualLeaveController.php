<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnualLeaveRequest;
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
            'message' => 'Berhasil',
            'data' => $this->annualLeaveRepository->getAllannualLeaves()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AnnualLeaveRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnnualLeaveRequest $request)
    {
        try {
            $validated = array_merge(['user_id' => 1], $request->validated());
        
            return response()->json([
                'message' => 'Berhasil',
                'data' => $this->annualLeaveRepository->createAnnualLeave($validated)
            ]);
        } catch (\Throwable $th) {
            $error = $th->getMessage() . '(' . $th->getCode() . ') => ' . $th->getFile() . ':' . $th->getline();
            Log::error($error);
            return response()->json([
                'message' => 'Terjadi Kendala Server',
                'data' => null
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $annualLeaveId = $request->route('id');
        
        return response()->json([
            'message' => 'Berhasil',
            'data' => $this->annualLeaveRepository->getAnnualLeaveById($annualLeaveId)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnnualLeave $annualLeave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnnualLeave $annualLeave)
    {
        //
    }
}
