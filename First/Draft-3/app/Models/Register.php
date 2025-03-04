<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    // Specify the table name if it's different from the default 'registers'
    protected $table = 'registers';

    // Define the fillable fields for mass assignment
    protected $fillable = ['name', 'pass', 'email'];

    // Disable timestamps if your table does not have created_at and updated_at columns
    public $timestamps = false;
}