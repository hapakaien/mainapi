<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Datakrama\Eloquid\Traits\Uuids;

class Province extends Model
{
    use Uuids;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['id', 'island_id', 'created_at', 'updated_at'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'abbreviation'
    ];

    /**
     * Get the regency for the province.
     */
    public function regencies()
    {
        return $this->hasMany('App\Regency');
    }

    /**
     * Get the island that owns the province.
     */
    public function island()
    {
        return $this->belongsTo('App\Island');
    }
}
