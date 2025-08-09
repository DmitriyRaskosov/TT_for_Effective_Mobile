<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * @var mixed|string[]
     */

    protected $table = 'tasks';
    protected $fillable = ['title', 'description', 'status'];
    public $timestamps = false;
}
