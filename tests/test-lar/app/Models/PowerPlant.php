<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Postcode;

class PowerPlant extends Model
{
    use HasFactory;

    /**
     * Table to which the model refers
     * 
     * @var string 
     */
    protected $table = 'power_plants';
    /**
     * The primary key associated with the table.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model id should be cast to an integer and incremented.
     * 
     * @var bool
     */
    protected $increating = true;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = ['name','postcode_nr','value'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = true;

    public function postcode() 
    {
        return $this->belongsTo(Postcode::class,'postcode_nr','postcode');
    }

    
}
