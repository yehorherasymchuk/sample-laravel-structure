<?php

use App\Models\Order;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('status')->default(Order::STATUS_NEW);
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('price')->default(0);;
            $table->unsignedInteger('fullPrice')->default(0);
            $table->unsignedInteger('deliveryPrice')->default(0);
            $table->timestamps();

            $table->index([
                'city_id',
                'status',
            ]);
            $table->index([
                'company_id',
                'status',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
