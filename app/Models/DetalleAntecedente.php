<?php

namespace App\Models;
namespace App\Models\FichaPaciente;
namespace App\Models\TipoAntecedente;

use Illuminate\Database\Eloquent\Model;

class DetalleAntecedente extends Model
{
    protected $fillable = [
        'IdTipoAntecedente','Nombre','Descripcion',
    ];

    public function TipoAntecedente()
    {
        return $this->hasOne(TipoAntecedente::class);
    }

    public function FichaPacientes()
    {
        return $this->belongsToMany(FichaPaciente::class, 'FichaAntecedente','IdDetalleAntecedente','IdFichaAntecedente')
                        ->as('FichaAntecedente')
                        ->withTimestamps();
    }
}