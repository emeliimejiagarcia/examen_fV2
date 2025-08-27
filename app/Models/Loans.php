<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
    use HasFactory;

    protected $perPage = 10;

    protected $fillable = ['departure_date',
    'expected_date',
    'delivery_date',
    'delivery_observation',
    'return_observation',
    'loan_date',
    'loan_duration',
    'username',
    'user_type',
    'area',
    'academic_role',
    'contact_phone',
    'user_address',
    'equipment_name',
    'equipment_type',
    'brand',
    'model',
    'condition_loan',
    'responsible_id',
    'technological_equipment_id'];

    public function responsible()
    {
        return $this->belongsTo(Responsible::class);
    }

    public function technological_equipment()
    {
        return $this->belongsTo(Technological_equipment::class);
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    public function loan_histories()
    {
        return $this->hasMany(Loan_history::class);
    }
}
