<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'duration', 'interest'
      ];

      public function borrowers(){
        return $this->belongsToMany(Borrower::class);
    }
}
