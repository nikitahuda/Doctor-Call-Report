<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocgiftModel extends Model
{
    protected $table = 'docgift';
    protected $fillable = ['doc_name',
                            'territoryname',];
    
    public $timestamps = false;

}
