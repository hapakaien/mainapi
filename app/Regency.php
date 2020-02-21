<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Znck\Eloquent\Traits\BelongsToThrough;
use Datakrama\Eloquid\Traits\Uuids;

class Regency extends Model
{
    use Uuids, BelongsToThrough;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['id', 'province_id', 'created_at', 'updated_at'];
    
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'code'
    ];

    /**
     * Get the province that owns the regency.
     */
    public function province()
    {
        return $this->belongsTo('App\Province');
    }

    /**
     * Get the island that owns the regency.
     */
    public function island()
    {
        return $this->belongsToThrough('App\Island', 'App\Province');
    }

    /**
     * Get the regency license plate for the regency.
     */
    public function regencyLicensePlates()
    {
        return $this->hasMany('App\RegencyLicensePlate');
    }
    
    /**
     * The license plate that belong to the regency.
     */
    public function licensePlates()
    {
        return $this->belongsToMany('App\LicensePlate', 'regency_license_plates')->using('App\RegencyLicensePlate');
    }
}
