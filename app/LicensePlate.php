<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Datakrama\Eloquid\Traits\Uuids;

class LicensePlate extends Model
{
    use Uuids;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['id', 'created_at', 'updated_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get the regency license plate for the license plate.
     */
    public function regencyLicensePlates()
    {
        return $this->hasMany('App\RegencyLicensePlate');
    }

    /**
     * The regency that belong to the license plate.
     */
    public function regencies()
    {
        return $this->belongsToMany('App\Regency', 'regency_license_plates')->using('App\RegencyLicensePlate');
    }
}
