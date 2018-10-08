<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = ['title', 'description', 'status_id', 'created_at', 'updated_at'];
    

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
