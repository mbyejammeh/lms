<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount', 'interest', 'borrower_id', 'guarantor_id', 'type_id', 'purpose', 'total_payable', 'monthly_payable','status' 
      ];

    public function borrower(){
        return $this->belongsTo(Borrower::class);
    }

    public function guarantor(){
        return $this->belongsTo(Guarantor::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
