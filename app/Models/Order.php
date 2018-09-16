<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * Class Order
 * @package App\Models
 * @version September 11, 2018, 2:34 pm UTC
 *
 * @property \App\Models\Customer customer
 * @property \App\Models\Item item
 * @property integer customer_id
 * @property integer item_id
 * @property integer quantity
 */
class Order extends Model
{
    use SoftDeletes;
    use Sortable;

    public $table = 'orders';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'customer_id',
        'item_id',
        'quantity',
        'total'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customer_id' => 'integer',
        'item_id' => 'integer',
        'quantity' => 'integer',
        'total' => 'double'
    ];

    public $sortable = [
        'id',
        'customer_id',
        'item_id',
        'quantity',
        'total',
        'created_at'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'quantity' => 'required|numeric|min:1|max:11',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function customer()
    {
        return $this->belongsTo(\App\Models\Customer::class)->orderBy('firstName');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function item()
    {
        return $this->belongsTo(\App\Models\Item::class);
    }

    public function invoices()
    {
        return $this->hasMany(\App\Models\Invoice::class);
    }
}
