<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * Class Item
 * @package App\Models
 * @version September 11, 2018, 2:34 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Order
 * @property string name
 * @property decimal price
 */
class Item extends Model
{
    use SoftDeletes;
    use Sortable;

    public $table = 'items';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'price',
        'image',
        'sku',
        'status',
        'specialPrice',
        'description'
    ];

    public $sortable = [
        'id',
        'name',
        'price',
        'sku',
        'status',
        'specialPrice',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'price' => 'double',
        'image' => 'string',
        'sku' => 'string',
        'status' => 'string',
        'specialPrice'  => 'double',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|min:3|max:30',
        'price' => 'required|numeric|min:1|max:20000',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'sku'=> 'required|string|min:3|max:30',
        'status' => 'required|string',
        'specialPrice' => 'numeric|min:1|max:20000',
        'description' => 'string'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class);
    }
}
