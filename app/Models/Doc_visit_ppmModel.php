<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc_visit_ppmModel extends Model
{
    // use HasFactory;
    protected $table = 'doc_visit_ppm';
    protected $fillable = ['doc_name',
                            'territoryname',];
    
    public $timestamps = false;
}
