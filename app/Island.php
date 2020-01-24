<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Island extends Model
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
     * Get the province for the island.
     */
    public function provinces()
    {
        return $this->hasMany('App\Province');
    }

    /**
     * Get all of the posts for the country.
     */
    public function regencies()
    {
        return $this->hasManyThrough('App\Regency', 'App\Province');
    }
}
