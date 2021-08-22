<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guarantor extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'middle_name', 'last_name', 'date_of_birth', 'phone1', 'phone2', 'address', 'email', 'employment_date', 'payroll_number', 'designation_id', 'grade_id', 'borrower_id'
      ];

      public function designation(){
        return $this->belongsTo(Designation::class);
    }

      public function grade(){
        return $this->belongsTo(Grade::class);
    }

    public function borrower(){
        return $this->belongsTo(Borrower::class);
    }
}
