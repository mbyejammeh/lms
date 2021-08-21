<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function designation() {
        return $this->belongsTo(Designation::class);
    }

    public function grade() {
        return $this->belongsTo(Grade::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
