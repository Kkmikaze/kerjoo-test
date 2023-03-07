<?php

namespace App\Interfaces;

interface AnnualLeaveRepositoryInterface
{
    public function getAllAnnualLeaves();
    public function getAnnualLeaveById($annualLeaveId);
    public function deleteAnnualLeave($annualLeaveId);
    public function createAnnualLeave(array $annualLeaveDetails);
    public function updateAnnualLeave($annualLeaveId, array $newDetails);
}
