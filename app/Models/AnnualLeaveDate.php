<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnualLeaveDate extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'annual_leave_id', 'date'
    ];

    public function anualLeave() {
        return $this->belongsTo(AnnualLeave::class, 'annual_leave_id', 'id');
    }
}
