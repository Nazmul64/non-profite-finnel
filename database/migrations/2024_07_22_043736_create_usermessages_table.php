<?php declare(strict_types=1); 

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
        Schema::create('usermessages', function (Blueprint $table) {
            $table->id();
            $table->string('guest_name');
            $table->string('guest_email')->unique();
            $table->text('guest_messages');
            $table->string('status')->default('unread');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usermessages');
    }
};
