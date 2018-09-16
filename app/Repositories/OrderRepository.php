<?php

namespace App\Repositories;

use App\Models\Order;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OrderRepository
 * @package App\Repositories
 * @version September 11, 2018, 2:34 pm UTC
 *
 * @method Order findWithoutFail($id, $columns = ['*'])
 * @method Order find($id, $columns = ['*'])
 * @method Order first($columns = ['*'])
*/
class OrderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'customer_id',
        'item_id',
        'quantity',
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Order::class;
    }
}
