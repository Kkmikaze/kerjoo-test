<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnualLeave extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'reason', 'status'
    ];

    public function annualLeaveDates() {
        return $this->hasMany(AnnualLeaveDate::class, 'annual_leave_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
