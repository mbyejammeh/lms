<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
      'name', 'salary'
    ];

    public function designations(){
      return $this->hasOne(Designation::class);
  }

  public function borrowers(){
    return $this->belongsToMany(Borrower::class);
}

public function guarantors(){
  return $this->belongsToMany(Guarantor::class);
}
}
