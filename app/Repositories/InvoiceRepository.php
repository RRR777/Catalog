<?php

namespace App\Repositories;

use App\Models\Invoice;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InvoiceRepository
 * @package App\Repositories
 * @version September 15, 2018, 4:24 pm UTC
 *
 * @method Invoice findWithoutFail($id, $columns = ['*'])
 * @method Invoice find($id, $columns = ['*'])
 * @method Invoice first($columns = ['*'])
*/
class InvoiceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Invoice::class;
    }
}
