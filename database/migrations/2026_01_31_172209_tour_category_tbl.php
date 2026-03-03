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
        Schema::create('tour_category_tbl',function(Blueprint $table){
            $table->id('tour_id');


            $table->string('tour_category');
            $table->boolean('is_deleted')->default(0);



            $table->timestamp('added_date');



        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_category_tbl');
        //
    }
};
