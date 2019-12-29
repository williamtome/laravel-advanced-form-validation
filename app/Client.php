<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	const TYPE_INDIVIDUAL = 'individual';
	const TYPE_LEGAL = 'legal';

    const MARITAL_STATUS = [
    	1 => 'Solteiro(a)',
    	2 => 'Casado(a)',
    	3 => 'Divorciado(a)'
    ];

    protected $fillable = [
    	'name',
        'document_number',
        'email',
        'phone',
        'defaulter',
        'date_birth',
        'sex',
        'marital_status',
        'physical_disability',
        'company_name',
        'client_type',
    ];
}
