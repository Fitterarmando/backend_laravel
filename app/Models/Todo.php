<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'user_id',
        'state_id'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function states()
    {
        return  $this->hasOne(State::class);
    }
}
