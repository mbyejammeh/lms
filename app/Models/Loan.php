<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount', 'borrower_id', 'type_id', 'purpose'
      ];

    public function borrower(){
        return $this->belongsTo(Borrower::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}