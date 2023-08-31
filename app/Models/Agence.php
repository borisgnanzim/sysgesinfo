<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;




class Agence extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $fillable = [
        'nom',
        'Ville',
        'adresse',
       
    ];

    public function departements()
    {
        return $this->hasMany(Departement::class);
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
