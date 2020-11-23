<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->increments('job_id');
            $table->string('job_title')->nullable();
            $table->string('job_reference_no')->nullable();
            $table->date('job_created_at')->nullable();
            $table->date('job_end_at')->nullable();
            $table->string('job_technologies')->nullable();
            $table->integer('job_salary')->nullable();
            $table->string('job_listed_platform')->nullable();
            $table->string('job_description')->nullable();
            $table->timestamp('table_created_at')->useCurrent();
            $table->timestamp('table_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job');
    }
}
