<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'drivers';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'identification';
    /**
     * Indicates if the IDs are auto-incrementing.
     * Options: true -> Auto-Increment; false -> No Auto-Increment
     *
     * @var bool
     */
    public $incrementing = false;
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';
    /**
     * Indicates if the model should be timestamped.
     * Options: true -> able; false -> enable
     *
     * @var bool
     */
    public $timestamps = true;
    /**
     * Names variables CREATED_AT and UPDATED_AT (default)
     */
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /**
    * Get the user that owns the phone.
    */
   public function vehicle()
   {
       return $this->belongsTo('App\Vehicle', 'fk_driver', 'identification');
   }
}
