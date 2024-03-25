<?php

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
        Schema::create('dish_order', function (Blueprint $table) {
             //creo colonna rest_user_id e la posiziono dopo id nella tab dip 
            $table->unsignedBigInteger('dish_id');
             //creo vincolo foreign key e faccio riferimento alla colonna rest_user_id che fa riferimento alla colonna 'id' della tabella 'rest_users'
            $table->foreign('dish_id')->references('id')->on('dishes')->cascadeOnDelete();

            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->cascadeOnDelete();

            $table->primary(['dish_id','order_id']);

            $table->integer('dish_quantity')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dish_order');
    }
};
