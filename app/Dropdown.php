<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dropdown extends Model
{
  protected $fillable = [
        'id',
        'depots',
    ];

    public function getAssignedAttribute()
    {
        $depots = $this->attributes['depots'];
        $depot = preg_split("/[,]/",$depots);
        return serialize($depot);
    }
}
