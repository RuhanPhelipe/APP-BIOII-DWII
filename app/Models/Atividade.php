<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Atividade extends Model{
    use HasFactory, SoftDeletes;

    public function reuniao(){
        return $this->hasMany('\App\Models\Reuniao');
    }

    public function integrante(){
        return $this->belongsToMany('\App\Models\Integrante', 'atividade_integrates');
    }
}
