<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $fillable = ['title','description','user_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
