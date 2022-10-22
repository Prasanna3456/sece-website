<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function team_status()
    {
        $order_statuses = collect(\App\Enum\TeamStatusEnum::values());
        if (!is_object($order_statuses)) {
            throw new \Exception('Migration error: The TeamStatusEnum::values() did not return an object');
        } else {
            return $order_statuses->toArray();
        }
    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $status = $this->team_status();
            
            $table->id();
            $table->string('team_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('institution_name');
            $table->string('course');
            $table->string('department');
            $table->string('year_section');
            $table->enum('status',$status)->default(0);
            $table->string('razorpay_order_id')->nullable();
            $table->unsignedBigInteger('event_id')->references('id')->on('events');
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
        Schema::dropIfExists('teams');
    }
};
