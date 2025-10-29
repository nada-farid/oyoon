<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudienceSatisfactionsTable extends Migration
{
    public function up()
    {
        Schema::create('audience_satisfactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->boolean('published')->default(0)->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('audience_satisfactions');
    }
}

