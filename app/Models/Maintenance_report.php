<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance_report extends Model
{
    use HasFactory;
    protected $perPage = 10;

    protected $fillable =['report_date',
    'description',
    'action',
    'responsible',
    'equipment_condition',
    'equipment_name',
    'maintenance_date',
    'maintenance_type',
    'technician_name',
    'maintenance_cost',
    'report_status',
    'responsible_id',
    'technological_equipment_id'];

    public function responsible()
    {
        return $this->belongsTo(Responsible::class);
    }

    public function technological_equipment()
    {
        return $this->hasMany(Technological_equipment::class);
    }




}
