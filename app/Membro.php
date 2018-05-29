<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'pai',
        'mae',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'cep',
        'uf',
        'tel1',
        'tel2',
        'cel',
        'email',
        'dtaNascimento',
        'cpf',
        'rg',
        'orgaoExp',
        'igreja',
        'idade',
        'dtaDesligamento',
        'motivoDesligamento',
        'dtaBatismoEs',
        'dtaBatismoAguas',
        'procedencia',
        'funcaoEclesiastica',
        'funcaoMinisterial',
        'tipoSanguineo',
        'fatorRh',
        'naturalidade',
        'nacionalidade',
        'estadoCivil',
        'etinia',
        'profissao',
        'departamento',
        'destino',
        'sexo',
        'obs',
        'fotoId',
        'ativo'
    ];

    public $timestamps = true;
}
