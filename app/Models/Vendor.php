<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Vendor extends Model
{
    use HasFactory;

    protected $perPage = 10;
    protected $fillable = [
        'name',
        'point_contact',
        'phone_number',
        'mail',
        'delivered_products',
        'warranty',
        'address',
        'department',
        'age',
        'identity_card',
        'authorization_file',
    ];

    public function image()
    {
        if ($this->authorization_file) {
            return asset('storage/' . $this->authorization_file);
        }
    }

    public function technological_equipment()
    {
        return $this->belongsTo(Technological_equipment::class);
    }

    public function registration()
    {
        return $this->hasMany(Registration::class);
    }
}
