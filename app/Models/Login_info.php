<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login_info extends Model
{
    use HasFactory;
    protected $table = "login_info";
    protected $primaryKey = "id";
}
