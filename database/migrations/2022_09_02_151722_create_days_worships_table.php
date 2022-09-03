<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaysWorshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('days_worships', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('church_id')->nullable(false);
            $table->string('sunday')->nullable(true);
            $table->string('youth_meeting')->nullable(true);
            $table->string('tuesday')->nullable(true);
            $table->string('wednesday')->nullable(true);
            $table->string('thursday')->nullable(true);
            $table->string('friday')->nullable(true);
            $table->string('saturday')->nullable(true);
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
        Schema::dropIfExists('days_worships');
    }
}
