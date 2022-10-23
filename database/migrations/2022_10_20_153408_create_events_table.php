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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->text('creative_name');
            $table->text('name');
            $table->text('slug');
            $table->longText('description');
            $table->longText('rules');
            $table->text('contact');
            $table->string('category');
            $table->integer('entry_fee');
            $table->integer('max_team_members');
            $table->string('poster');
            $table->boolean('project_based_event')->default(0);
            $table->boolean('fifa_event')->default(0);
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
        Schema::dropIfExists('events');
    }
};
