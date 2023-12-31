<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Category extends Model
{
    use HasFactory;

    protected $guarded = []; 

    public function task(){
        return $this->belongsToMany(Task::class);
    }
}
