<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;
use App\Models\Task;

class ToDoList extends Model
{
    use HasFactory;

    public function user () {
        return $this->belongsTo(User::class);
        //jedna lista pripada jednom Useru
    }

    public function tasks(){ //jedna lista ima vise taskova
        return $this->HasMany(Task::class);
    }

}
