<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 10, 2);
            $table->decimal('interest', 10, 2);
            $table->unsignedBigInteger('borrower_id');
            $table->foreign('borrower_id')->references('id')->on('borrowers')->onDelete('cascade');
            $table->unsignedBigInteger('guarantor_id');
            $table->foreign('guarantor_id')->references('id')->on('guarantors')->onDelete('cascade');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->longText('purpose');   
            $table->decimal('amount_payable', 10, 2);
            $table->decimal('monthly_payable', 10, 2);         
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('loans');
    }
}
