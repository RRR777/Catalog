<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Invoice
 * @package App\Models
 * @version September 15, 2018, 4:24 pm UTC
 *
 * @property \App\Models\Customer customer
 * @property \Illuminate\Database\Eloquent\Collection orders
 * @property integer order_id
 * @property date issue_date
 * @property date due_date
 * @property float total
 */
class Invoice extends Model
{
    use SoftDeletes;
    use Sortable;

    public $table = 'invoices';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'order_id',
        'customerName',
        'itemName',
        'itemPrice',
        'itemQuantity',
        'total',
        'issue_date',
        'due_date'
    ];

        public $sortable = [
        'id',
        'order_id',
        'customerName',
        'itemName',
        'itemPrice',
        'itemQuantity',
        'total',
        'issue_date',
        'due_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'customerName' => 'string',
        'itemName' => 'string',
        'itemPrice' => 'double',
        'itemQuantity' => 'integer',
        'total' => 'double',
        'issue_date' => 'date',
        'due_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function order()
    {
        return $this->belongsTo(\App\Models\Order::class);
    }
}
