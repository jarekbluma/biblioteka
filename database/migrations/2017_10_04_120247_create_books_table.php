<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('autor')->nullable();
            $table -> string('tytul')->nullable();
            $table -> string('wydawnictwo')->nullable();
            $table -> string('rok')->nullable();
            $table -> string('status')->nullable();
            $table -> string('data_poz')->nullable();
            $table -> string('termin_oddania')->nullable();
            $table -> string('pozyczajacy')->nullable();
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
