<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Academic_area extends Model
{
    use HasFactory;

    protected $perPage = 10;

    protected $fillable = ['area_name',
    'area_code',
    'location',
    'equipment_coordinator',
    'area_type',
    'description',
    'equipment_quantity',
    'responsible_id',
    'technological_equipment_id',
    ];

    public function responsible()
    {
        return $this->belongsTo(Responsible::class);
    }

    public function technological_equipment()
    {
        return $this->hasMany(Technological_equipment::class);
    }


}
