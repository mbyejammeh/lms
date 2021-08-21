<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function grade() {
        return $this->belongsTo(Grade::class);
    }

    /*protected $fillable = [
        'name', 'grade_id'
      ];*/
}
