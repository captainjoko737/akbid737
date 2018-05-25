<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MPengumuman extends Model {
    
    protected $table = 'pengumuman';
    protected $primaryKey = 'id_pengumuman';

    public $timestamps = false;

    protected $fillable = [
        'judul',
        'konten',
        'status',
    ];
}
