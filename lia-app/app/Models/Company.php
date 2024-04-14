<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Company extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'companies';

    protected $fillable = [
        'companyName',
        'email',
        'password',
        'adress',
        'contactPerson',
        'phone',
        'description',
        'industry',
        'employees',
        'language',
        'linkedin',
        'homepage'
    ];

    public function CompanyInfo()
    {
        return $this->hasOne(CompanyInfo::class);
    }

    public $timestamps = false;
}
