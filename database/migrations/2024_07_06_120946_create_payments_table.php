<?php
/*  Recommended fields for the 'payments' table:

    id (primary key)
    order_id (foreign key to orders table)
    amount
    payment_method (e.g., credit card, PayPal, etc.)
    status (e.g., pending, completed, failed)
    transaction_id (unique identifier from payment gateway)
    payment_date
    created_at
    updated_at
*/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 10, 2);
            $table->string('payment_method');
            $table->enum('status', ['pending', 'completed', 'failed']);
            $table->string('transaction_id')->nullable();
            $table->timestamp('payment_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
