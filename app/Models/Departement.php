<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Departement extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;


    public function agence()
    {
        return $this->belongsTo(Agence::class);
    }

    public function employes()
    {
        return $this->hasMany(Employe::class);
    }
    
    public function canaux()
    {
        return $this->hasMany(Canal::class);
    }

}
