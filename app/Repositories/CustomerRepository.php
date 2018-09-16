<?php

namespace App\Repositories;

use App\Models\Customer;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CustomerRepository
 * @package App\Repositories
 * @version September 11, 2018, 2:29 pm UTC
 *
 * @method Customer findWithoutFail($id, $columns = ['*'])
 * @method Customer find($id, $columns = ['*'])
 * @method Customer first($columns = ['*'])
 */
class CustomerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'firstName',
        'lastName',
        'email',
        'country',
        'total_revenue'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Customer::class;
    }
}
