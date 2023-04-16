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
    public function up(): void
    {
        Schema::create('git_hub_users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ref_id');
            $table->string('username')->unique();
            $table->string('full_name');
            $table->string('avatar_url');
            $table->string('url');
            $table->integer('public_repos');
            $table->integer('public_gists');
            $table->integer('followers');
            $table->integer('following');
            $table->date('start_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('git_hub_users');
    }
};
