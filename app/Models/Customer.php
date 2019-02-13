<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use App\Filters\CustomerFilter;
use Illuminate\Database\Eloquent\Builder;

class Customer extends Model
{
    use SoftDeletes;
    use Sortable;

    public $table = 'customers';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'firstName',
        'lastName',
        'email',
        'country'
    ];

    public $sortable = [
        'id',
        'firstName',
        'lastName',
        'email',
        'country',
        'totalRevenue',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstName' => 'string',
        'lastName' => 'string',
        'email' => 'string',
        'country' => 'string',
        'totalRevenue' => 'double'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstName' => 'required|min:3|max:30',
        'lastName' => 'required|min:3|max:30',
        'email' => 'required|string|email|max:30',
        'country' => 'required|string'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class);
    }

    public function scopeFilter(Builder $builder, $request)
    {
        return (new CustomerFilter($request))->filter($builder);
    }
}
