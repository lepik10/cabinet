<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ur_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name_full');
            $table->string('kpp');
            $table->string('ogrn');
            $table->string('inn');
            $table->string('address_ur');
            $table->string('address_fact');
            $table->string('bank_name');
            $table->string('dolzhnost_fio');
            $table->string('bank_rc');
            $table->string('bank_kc');
            $table->string('bank_bik');
            $table->string('phone');
            $table->string('contact_name')->nullable();
            $table->string('contact_phone');
            $table->string('doc_copiya_inn')->nullable();
            $table->string('doc_ogrn')->nullable();
            $table->string('doc_egrul')->nullable();
            $table->string('doc_copiya_polnomoch')->nullable();
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
        Schema::dropIfExists('ur_infos');
    }
}
