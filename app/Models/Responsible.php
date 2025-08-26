<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    use HasFactory;
    protected $perPage = 10;

    protected $fillable = [
        'name',
        'age',
        'mail',
        'identity_card',
        'phone_number',
        'departament',
        'gender',
        'nationality',
        'address',
        'academic_role',
        'registration_date',
    ];

    public function academic_area()
    {
        return $this->belongsTo(Academic_area::class);
    }

    public function loans()
    {
        return $this->hasMany(Loans::class);
    }

    public function maintenance_report()
    {
        return $this->belongsTo(Maintenance_report::class);
    }




}
