<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $table = 'members';

    protected $guarded = ['id'];

    public function province(){
        return $this->belongsTo(Province::class);
    }
    public function regency(){
        return $this->belongsTo(Regency::class);
    }
    public function district(){
        return $this->belongsTo(District::class);
    }
    public function village(){
        return $this->belongsTo(Village::class);
    }
}
