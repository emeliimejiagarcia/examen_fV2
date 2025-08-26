<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $perPage = 10;

    protected $fillable = ['username',
    'current_condition',
    'last_update',
    'date_time',
    'loan_date',
    'return_date',
    'equipment_number',
    'serial_number',
    'condition_loan',
    'vendor_id',
    'loans_id',
    'technological_equipment_id',
    'type_equipment_id'];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function loans()
    {
        return $this->hasMany(Loans::class);
    }

    public function technological_equipment()
    {
        return $this->hasMany(Technological_equipment::class);
    }

    public function type_equipment()
    {
        return $this->belongsTo(Type_equipment::class);
    }
}
