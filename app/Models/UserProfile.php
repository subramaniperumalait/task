<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;


    protected $fillable = [
        'fullname', 'email', 'phonenumber', 'address', 'city',
        'state', 'country', 'zipcode', 'role', 'gender', 'dob', 'status'
    ];
}
