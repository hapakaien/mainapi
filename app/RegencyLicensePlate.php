<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Datakrama\Eloquid\Traits\Uuids;

class RegencyLicensePlate extends Pivot
{
    use Uuids;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['id', 'regency_id', 'license_plate_id', 'created_at', 'updated_at'];

    /**
     * Get the regency that owns the regency license plate.
     */
    public function regency()
    {
        return $this->belongsTo('App\Regency');
    }

    /**
     * Get the license plate that owns the regency license plate.
     */
    public function licensePlate()
    {
        return $this->belongsTo('App\LicensePlate');
    }
}
