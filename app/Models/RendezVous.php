<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class RendezVous extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'rendez_vous';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'daterdv',
        'heurerdv',
        'idforfait',
        'iduser',

    ];
}
