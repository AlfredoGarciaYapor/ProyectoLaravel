<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('tasks')){
            Schema::create('tasks', function (Blueprint $table) {
                $table->id();
                if (!Schema::hasColumn('tasks', 'title')) {
                    $table->string('title', 255);
                }
                if (!Schema::hasColumn('tasks', 'description')) {
                    $table->text('description');
                }
                if (!Schema::hasColumn('tasks', 'status')) {
                    $table->string('status', 255);
                }
                if (!Schema::hasColumn('tasks', 'duDate')) {
                    $table->date('dueDate');
                }
            });
        } else {
            $table->id();
            $table->string('title', 255);
            $table->text('description');
            $table->string('status', 255);
            $table->date('dueDate');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
