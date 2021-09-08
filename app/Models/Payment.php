<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_id', 'borrower_id', 'payment', 'balance', 'payment_for' 
      ];


    public function borrower(){
        return $this->belongsTo(Borrower::class);
    }

    public function loan(){
        return $this->belongsTo(Loan::class);
    }
}
