<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * Class Role
 * @package App\Models
 * @version September 11, 2018, 2:35 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection orders
 * @property string name
 */
class Role extends Model
{
    use SoftDeletes;
    use Sortable;

    public $table = 'roles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    public $sortable = [
        'name',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|min:3|max:30',
    ];

    public function users()
    {
        return $this->hasMany(\App\Models\User::class);
    }
}
