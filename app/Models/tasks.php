<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class tasks extends Model
{
    use HasFactory;
    use Notifiable;

    public function comment()
    {
        return $this->hasMany(comments::class,'task_id');
    }
}
