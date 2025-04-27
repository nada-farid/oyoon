<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('site_name');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtubte')->nullable();
            $table->string('instagram')->nullable();
            $table->string('snap_chat')->nullable();
            $table->string('pinterest')->nullable();
            $table->longText('short_descrption')->nullable();
            $table->longText('description')->nullable();
            $table->longText('about_description')->nullable();
            $table->string('donation_url')->nullable();
            $table->string('chairman_description')->nullable();
            $table->string('counter_1_text')->nullable();
            $table->integer('counter_1_value')->nullable();
            $table->string('counter_2_text')->nullable();
            $table->integer('counter_2_value')->nullable();
            $table->string('counter_3_text')->nullable();
            $table->integer('counter_3_value')->nullable();
            $table->longText('vision')->nullable();
            $table->longText('mission')->nullable();
            $table->longText('values')->nullable();
            $table->longText('initiative')->nullable();
            $table->longText('support_text')->nullable();
            $table->longText('membership_conditions')->nullable();
            $table->longText('loss_membership')->nullable();
            $table->longText('commitments_membership')->nullable();
            $table->longText('scope')->nullable();
            $table->timestamps();
        });
    }
}
