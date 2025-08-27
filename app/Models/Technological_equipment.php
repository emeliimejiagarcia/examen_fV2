<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technological_equipment extends Model
{
    use HasFactory;
    protected $perPage = 10;

    protected $fillable = [
        'mark',
        'equipment_name',
        'serial_number',
        'condition',
        'location',
        'entry_date',
        'brand',
        'acquisition_date',
        'availability',
        'inventory_code',
        'technology_category',
        'vendor_id'
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function type_equipment()
    {
        return $this->belongsTo(Type_equipment::class);
    }

    public function academic_area()
    {
        return $this->belongsTo(Academic_area::class);
    }

    public function loans()
    {
        return $this->hasMany(Loans::class);
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    public function maintenance_reports()
    {
        return $this->hasMany(Maintenance_report::class);
    }


}
