<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanya extends Model
{
    protected $table = 'tb_pertanyaan';
    protected $primaryKey = 'id_pertanyaan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pertanyaan','jenis','desk','created_at'
    ];
    public function getPertanyaan(){
        return $this->select('*')->get();
    }

}
