<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class finalStudents_table extends Model


{
    protected $primaryKey = 'AppId';
    public $timestamps = false;

    protected $fillable = ["AppId",
    "Name",
    "surname",
    "Prof1_Name",
    "Prof2_Name",
    "Prof3_Name",
    "Total",
    "UGS_GPA",
    "MAS_GPA",
    "Bachelor_I_Ekuivalentuar",
    "Inst_Status1",
    "Master_I_Ekuivalentuar",
    "Inst_Status2",
    "Suksesi_30%",
    "Gjuha_20%",
    "Punimet_20%",
    "Intervista_30%",
    "Gjithsejt",
    "UGS_Institution_Name",
    "MA_Institution_Name",
    "Faculty","Status"];
    public $table = 'finalStudents';
   
}
