<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;
use DB;
class Tema extends Model
{
        protected $table ="temas";
        protected $fillable =['nombre_tema','mod_id'];

        public static function Temas()
        {
             return DB::table('temas')
             ->join('modulos','modulos.id','=','temas.mod_id')
             ->select('temas.*','modulos.nombre_modulo')
             ->get();     
        }
}
