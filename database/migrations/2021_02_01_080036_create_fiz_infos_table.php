<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiz_infos', function (Blueprint $table) {
            $table->id();
            $table->string('birth_date');
            $table->string('birth_place');
            $table->string('citizenship');
            $table->string('passport_ser');
            $table->string('passport_num');
            $table->string('passport_who');
            $table->string('passport_date');
            $table->string('inn')->nullable();
            $table->string('snils')->nullable();
            $table->string('address_reg');
            $table->string('address_prozh');
            $table->string('phone');
            $table->string('doc_copiya_passport')->nullable();
            $table->string('doc_copiya_inn')->nullable();
            $table->string('doc_copiya_snils')->nullable();
            $table->string('doc_doverennost')->nullable();
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
        Schema::dropIfExists('fiz_infos');
    }
}
