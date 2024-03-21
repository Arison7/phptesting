<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postcode extends Model
{
    use HasFactory;

    protected $table = '4pp';

    public function powerPlants()
    {
        return $this->hasMany(PowerPlant::class,'postcode_nr','postcode');
    }
}
