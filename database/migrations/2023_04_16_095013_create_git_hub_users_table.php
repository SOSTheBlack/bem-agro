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
            $table->string('full_name')->nullable();
            $table->integer('public_repos')->nullable();
            $table->integer('public_gists')->nullable();
            $table->integer('followers')->nullable();
            $table->integer('following')->nullable();
            $table->string('avatar_url')->nullable();
            $table->string('url');
            $table->text('bio')->nullable();
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
