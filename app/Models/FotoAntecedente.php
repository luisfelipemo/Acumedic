<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;
class FotoAntecedente extends Model
{
    protected $fillable = [
        'IdPaciente','Tipo','Url','Nombre','Descripcion',
    ];

    public function paciente()
    {
        return $this->hasOne(Paciente::class);
    }
}
