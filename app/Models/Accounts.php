<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    protected $table = 'Accounts';

    protected $primaryKey = 'Id';

    protected $fillable = [
        'Name',
        'Email',
        'Password',
        'EmailVerifiedAt',
        'FullName',
        'Gender',
        'IsEmailVerified',
        'Status',
        'Role',
        'LastLoginAt',
        'LastLoginIp',
        'LoginAttempts',
        'Photo',
        'Language',
        'SubscribeNewsletter',
    ];

    /**
     * 隱藏的屬性
     */
    protected $hidden = [
        'Password',
    ];
}