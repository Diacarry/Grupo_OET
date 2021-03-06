<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vehicles';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'license_plate';
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
    * Get the owner that owns the phone.
    */
   public function owner()
   {
       return $this->belongsTo('App\Owner', 'fk_owner', 'identification');
   }
   /**
     * Get the driver record associated with the user.
     */
    public function driver()
    {
        return $this->belongsTo('App\Driver', 'fk_driver');
    }
}
