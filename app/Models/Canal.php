<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Canal extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    public function agence()
    {
        return $this->belongsTo(Agence::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    public function employes()
    {
        return $this->belongsToMany(Employe::class)->withPivot('permission');
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
