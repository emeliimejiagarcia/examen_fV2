<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_equipment extends Model
{
    use HasFactory;

    protected $perPage = 10;

    protected $fillable = ['equipment_name',
    'description',
    'category',
    'loan_time',
    'worth','power_consumption',
    'technology_category',
    'code',
    'type_status',
    'creation_date',
    'technological_equipment_id'
    ];

    public function technological_equipment()
    {
        return $this->belongsTo(Technological_equipment::class);
    }
}
