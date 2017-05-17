<?php

namespace Manishyadav\LaravelApplicationLogs\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Model for log table 
 * 
 * @author manishyadav <manishyadav0012@gmail.com>
 *
 */
class Log extends Model
{
    /**
     * Using this trait will enable us to 
     * soft delete the entries in database
     * by filling in the deleted_at field.
     */
    use SoftDeletes;
    
    /**
     * The table name associated with this model.
     * 
     * @var string
     */
    protected $table = 'logs';
    
    /**
     * List of all the mass assignable fields
     * 
     * @var array
     */
    protected $fillable = [
        'env',
        'message',
        'level',
        'context',
        'extra'
    ];
    
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'context' => 'array',
        'extra'   => 'array'
    ];
}
