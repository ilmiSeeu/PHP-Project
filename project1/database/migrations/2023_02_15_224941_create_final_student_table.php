<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finalStudents', function (Blueprint $table) {
        $table->String('AppId')->unique();
        $table->String('Name');
        $table->String('surname');
        $table->integer('Prof1_Name')->nullable();
        $table->integer('Prof2_Name')->nullable();
        $table->integer('Prof3_Name')->nullable();
        $table->integer('Total');
        $table->integer('UGS_GPA');
        $table->integer('MAS_GPA');
        $table->double('Bachelor_I_Ekuivalentuar')->nullable();
        $table->integer('Inst_Status1')->nullable();
        $table->double('Master_I_Ekuivalentuar')->nullable();
        $table->integer('Inst_Status2')->nullable();
        $table->double('Suksesi_30%');
        $table->double('Gjuha_20%')->nullable();
        $table->double('Punimet_20%')->nullable();
        $table->double('Intervista_30%');
        $table->double('Gjithsejt');
        $table->String('UGS_Institution_Name');
        $table->String('MA_Institution_Name');
        $table->String('Faculty');

        $table->boolean('Status')->nullable();

        
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finalStudents');
    }
};
