<?php

namespace App\Repositories;

use App\Interfaces\AnnualLeaveRepositoryInterface;
use App\Models\AnnualLeave;

class AnnualLeaveRepository implements AnnualLeaveRepositoryInterface 
{
    public function getAllAnnualLeaves() 
    {
        return AnnualLeave::all();
    }

    public function getAnnualLeaveById($annualLeaveId) 
    {
        return AnnualLeave::findOrFail($annualLeaveId);
    }

    public function deleteAnnualLeave($annualLeaveId) 
    {
        AnnualLeave::destroy($annualLeaveId);
    }

    public function createAnnualLeave(array $annualLeaveDetails) 
    {
        return AnnualLeave::create($annualLeaveDetails);
    }

    public function updateAnnualLeave($annualLeaveId, array $newDetails) 
    {
        return AnnualLeave::whereId($annualLeaveId)->update($newDetails);
    }
}