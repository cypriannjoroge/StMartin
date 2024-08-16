<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->decimal('amount', 10, 2);
            $table->string('mpesa_transaction_id')->nullable();
            $table->string('status')->default('pending'); // 'pending', 'completed', 'failed'
            $table->text('response')->nullable(); // Store the raw response from M-Pesa
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
