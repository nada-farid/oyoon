<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudienceSatisfactionItemsTable extends Migration
{
    public function up()
    {
        Schema::create('audience_satisfaction_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('audience_satisfaction_id');
            $table->boolean('published')->default(0)->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('audience_satisfaction_id', 'audience_satisfaction_id_fk')
                ->references('id')
                ->on('audience_satisfactions')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('audience_satisfaction_items');
    }
}

