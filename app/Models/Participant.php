<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'folio', 'url', 'url_pepebot', 'tel' ,'user','AreaPesca',
        'NombreEmbarcacion','fechaPesca','artePesca','pesoEviserado','talla',
        'validated','showed', 'comentarios'
    ];
}
