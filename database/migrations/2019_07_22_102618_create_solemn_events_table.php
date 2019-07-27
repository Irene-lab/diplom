<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolemnEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solemn_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',255);
            $table->text('meta_description');
            $table->text('description');

            $table->string('groom_name', 255);
            $table->string('groom_photo', 255);
            $table->text('groom_description');

            $table->string('bride_name', 255);
            $table->string('bride_photo', 255);
            $table->text('bride_description');

            $table->string('first_wee_meet_title', 255);
            $table->string('first_wee_meet_date', 255);
            $table->string('first_wee_meet_description', 255);

            $table->string('first_date_title', 255);
            $table->string('first_date_date', 255);
            $table->string('first_date_description', 255);

            $table->string('relationship_title', 255);
            $table->string('relationship_date', 255);
            $table->string('relationship_description', 255);
            
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
        Schema::dropIfExists('solemn_events');
    }
}
