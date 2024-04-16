<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{

    protected $table = 'companyLiaInfo';

    protected $fillable = [
        'companyId',
        'title',
        'description',
        'yourJob',
        'offer',
        'lookingFor',
        'study',
        'availableSpots'
    ];

    use HasFactory;
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
