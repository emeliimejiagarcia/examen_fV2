<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan_history extends Model
{
    use HasFactory;
    protected $perPage = 10;

    protected $fillable = ['username',
    'equipment_name',
    'type_equipment',
    'loan_date',
    'input_status',
    'exit_status',
    'condition',
    'loan_code',
    'description',
    'loan_id'];

    public function loans()
    {
        return $this->belongsTo(Loans::class);
    }
}
