<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{

    protected $table = 'companyLiaInfo';

    use HasFactory;
    public function company()
    {
        return $this->belongsTo(company::class);
    }
}
