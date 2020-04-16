<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tb_survey';
    protected $primaryKey = 'id_survey';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_survey','id','id_pertanyaan','value','created_at'
    ];

    public function getAll(){
        return $this->select('*')->get();
    }
    public function getJoinpertanyaan(){
        return $this->select('*')
        ->join('tb_pertanyaan','tb_survey.id_pertanyaan','=','tb_pertanyaan.id_pertanyaan')
        ->get();
    }
}

