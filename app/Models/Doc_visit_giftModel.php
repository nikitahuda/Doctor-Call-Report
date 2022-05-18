<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc_visit_giftModel extends Model
{
    // use HasFactory;
    protected $table = 'doc_visit_gift';
    protected $fillable = ['doc_name',
                            'territoryname',];
    
    public $timestamps = false;
}
