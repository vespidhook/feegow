<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Agendamentos.
 *
 * @package namespace App\Entities;
 */
class Agendamentos extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'speciality_id',
        'professional_id',
        'name',
        'cpf',
        'source_id',
        'birthdate',
        'date_time'
    ];

    public function setCpfAttribute($value){
        $this->attributes['cpf'] = str_replace(['-', '.'], '', $value);
    }

}
