<?php

namespace App\Filters;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class CustomerFilter extends AbstractFilter
{
    protected $filters = [
        'country' => CountryFilter::class
    ];
}
