<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    use HasFactory;

    protected $fillable = ['value_goal','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function powerplants()
    {
        return $this->belongsToMany(PowerPlant::class,'power_plant_monitor','monitor_id','power_plant_id');
    }
}
