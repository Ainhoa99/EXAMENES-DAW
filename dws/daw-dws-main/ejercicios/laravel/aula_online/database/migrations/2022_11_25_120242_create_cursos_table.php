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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('nombre', 50);
            $table->integer('nivel');
            $table->integer('horas');

            $table->foreignId('id_profesor')->constrained('profesores')->cascadeOnDelete();
            // $table->unsignedBigInteger('id_profesor');
            // $table->foreign('id_profesor')->references('id')->on('profesores')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cursos', function (Blueprint $table) {
            $table->dropForeign('users_id_profesor_foreign');
            $table->dropColumn('id_profesor');
        });

        Schema::dropIfExists('cursos');
    }
};
