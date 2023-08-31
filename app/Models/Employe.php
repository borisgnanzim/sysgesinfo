<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

use App\Models\User;
//use Orchid\Platform\Models\User;
use Illuminate\Support\Str ;

class Employe extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function canaux()
    {
        return $this->belongsToMany(Canal::class)->withPivot('permission');
    } 

    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function($employe){
            $user = new User;
            $user->name = Str::slug($employe->nom . $employe->prenom, '');
            $user -> email = $employe->email;
            $user -> password = bcrypt('UTB');
            if ($employe->admin ) {
              //$user -> permissions = [platform.index, platform.systems.roles, platform.systems.users, platform.systems.attachment] ;
              //$user -> assignRole('admin'); 
              //$user -> inRole('admin'); 
              //$user -> permissions -> {"platform.index": true, "platform.systems.roles": true, "platform.systems.users": true, "platform.systems.attachment": true};

            //  
            
            $permissions = [
                'platform.index'=> true,
                'platform.systems.roles'=> true,
                'platform.systems.users'=> true,
                'platform.systems.attachment'=> true,
                ] ;


               // $user->syncPermissions($permissions);
               $user -> permissions = $permissions ;

            }

            $user ->save();

            $employe->user_id = $user->id;
        });
    }

    
}
