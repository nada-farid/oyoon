<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportMoneysTable extends Migration
{
    public function up()
    {
        Schema::create('report_moneys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('part');
            $table->integer('year');
            $table->string('link')->nullable();
            $table->boolean('published')->default(0)->nullable();
            $table->timestamps();
        });
    }
}
