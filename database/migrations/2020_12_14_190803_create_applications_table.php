<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status')->nullable();
            $table->date('application_date')->nullable();
            $table->string('company_name')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('linkedin_name')->nullable();
            $table->string('Address')->nullable();
            $table->string('job_title')->nullable();
            $table->string('job_description')->nullable();
            $table->string('technologies')->nullable();
            $table->string('reference_number')->nullable();
            $table->integer('salary')->nullable();
            $table->date('ending_date')->nullable();
            $table->string('source')->nullable();
            $table->integer('fit_value')->nullable();
            $table->boolean('resume')->nullable();
            $table->boolean('cover_letter')->nullable();
            $table->boolean('transcript')->nullable();
            $table->boolean('reference_document')->nullable();
            $table->string('notes')->nullable();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
