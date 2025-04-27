<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProjectsTable extends Migration
{
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->unsignedBigInteger('beneficiar_id')->nullable();
            $table->foreign('beneficiar_id', 'beneficiar_fk_10436877')->references('id')->on('beneficiaries');
        });
    }
}
