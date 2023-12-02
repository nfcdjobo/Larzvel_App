<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Car extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'cars';

    protected $fillable  = [ 'marque', 'matricule', 'image', 'couleur', 'user_id', 'member_id' ];

    

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function members()
    {
        return $this->belongsTo(Member::class);
    }
}
