<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ip_infos', function (Blueprint $table) {
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
            $table->string('ogrnip_ser');
            $table->string('ogrnip_num');
            $table->string('ogrnip_date');
            $table->string('address_prozh');
            $table->string('address_reg');
            $table->string('phone');
            $table->string('doc_copiya_passport')->nullable();
            $table->string('doc_copiya_inn')->nullable();
            $table->string('doc_copiya_snils')->nullable();
            $table->string('doc_doverennost')->nullable();
            $table->string('doc_ogrnip')->nullable();
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
        Schema::dropIfExists('ip_infos');
    }
}
