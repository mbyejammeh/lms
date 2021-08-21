<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'grade_id'
      ];

      public function grades(){
        return $this->hasOne(Grade::class);
    }

    public function guarantors(){
      return $this->belongsToMany(Guarantor::class);
  }

  public function borrowers(){
    return $this->belongsToMany(Borrower::class);
}

}
