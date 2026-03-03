<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class tourcategory_model extends Model
{
    
    protected $table='tour_category_tbl';
    protected $primaryKey = 'tour_id';
     protected $fillable = [
        'tour_category',
        'is_deleted',
        'added_date'
    ];

    public $timestamps = false;
}
