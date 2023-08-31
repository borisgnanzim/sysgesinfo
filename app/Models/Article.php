<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Article extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $fillable = [
        'type',
        'titre',
        'contenu',
        'employe_id',
        'canal_id',
        'fichier',
       
    ];

    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }

    public function canal()
    {
        return $this->belongsTo(Canal::class);
    }
}
