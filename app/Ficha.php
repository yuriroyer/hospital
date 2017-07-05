<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    protected $fillable = [
        'nome', 'registro', 'users_id', 'diagnostico_inicial', 'data_admissao', 'sexo', 'idade', 'leito', 'condicao_risco',
        'terminologia', 'data', 'inicio', 'fim', 'ducacao', 'classificacao', 'emergencia', 'motivo', 'tricotomia',
        'tricotomia_data_hora', 'transfusao_sanguinea', 'cirurgiao', 'instrumentador',
        'anestesista', 'auxiliar_cirurgia', 'cirtulantes', 'anestesia', 'antimicrobiano'
    ];
}
