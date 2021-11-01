<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('transcation_id');
            $table->longText('reference');
            $table->string('job_id');
            $table->integer('proposal_id');
            $table->integer('milestone_id')->nullable();
            $table->integer('freelancer_id');
            $table->integer('client_id');
            $table->string('amount');
            $table->string('escrow_fee');
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
        Schema::dropIfExists('transactions');
    }
}
