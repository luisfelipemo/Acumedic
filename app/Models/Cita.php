<?php

namespace App\Models;
use App\Models\Paciente;
use App\Models\TipoConsulta;
use App\Models\EstatusConsulta;
use App\Models\Horario;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use softDeletes;
    protected $fillable = [
        'IdPaciente','IdTipoConsulta','IdEstatusConsulta','Descripcion','Fecha',
    ];

    public function paciente()
    {
        return $this->hasOne(Paciente::class);
    }

    public function tipoConsulta()
    {
        return $this->hasOne(TipoConsulta::class);
    }

    public function estatusConsulta()
    {
        return $this->hasOne(EstatusConsulta::class);
    }

    public function horarios()
    {
        return $this->belongsToMany(Horario::class, 'CitaHorario','IdCita','IdHorario')
                        ->as('CitaHorario')
                        ->withTimestamps();
    }
}
