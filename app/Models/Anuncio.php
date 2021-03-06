<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Paquete;
use App\Models\Image;

class Anuncio extends Model
{

    protected $fillable = [
        'ciudad',
        'telefono',
        'direccion',
        'edad',
        // 'foto',
        'categoria_id',
        'user_id',
        'paquete_id',
        'zona',
        'titulo',
        'descripcion',
    ];
    public $timestamps = true;
    protected $dates = ['created_at', 'updated_at'];

    public function categoria(){

        return $this->belongsTo(Categoria::class);
    }
    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function paquete(){
        return $this->hasOne(Paquete::class);
    }

//             SCOPES O FILTROS DE BUSQUEDA PERSONALIZADOS PARA EL MODELO DE ANUNCIO
    public function scopeTitulos($query, $titulo){
        if($titulo){
            return $query->where('titulo','like','%'.$titulo.'%');
        }
    }
    public function scopeCiudades($query, $ciudad){
        if($ciudad){
            return $query->where('ciudad','=',$ciudad);
        }
    }
    public function scopeCategorias($query, $categoria){
        if($categoria){
            return $query->where('categoria_id','=',$categoria);
        }
    }
}
