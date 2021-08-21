<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'middle_name', 'last_name', 'date_of_birth', 'phone1', 'phone2', 'address', 'email', 'employment_date', 'payroll_number', 'grade_id', 'type_id', 'status'
      ];

      public function payments(){
        return $this->hasMany(Payment::class);
    }

    public function guarantors(){
        return $this->hasOne(Guarantor::class);
    }

    public function types(){
        return $this->hasOne(Type::class);
    }

    public function designations(){
        return $this->hasOne(Designation::class);
    }

    public function grades(){
        return $this->hasOne(Grade::class);
    }
}
