<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setLoanTypeAttribute($value)
    {
        $this->attributes['loan_type'] = json_encode($value);
    }

    public function getLoanTypeAttribute($value)
    {
        return $this->attributes['loan_type'] = json_decode($value);
    }
}
