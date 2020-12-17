<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ToDoList;

class Task extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(ToDoList::class); //jedan Task pripada listama
    }
}
