<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('comments', function (Blueprint $table) {

            $table->dropForeign(['post_id']);
            $table->dropColumn('post_id');

        });

        Schema::table('comments', function (Blueprint $table) {

            $table->uuid('post_id')->after('content');
            $table->foreign('post_id')->references('id')->on('post')->cascadeOnDelete();

        });
    }

    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign(['post_id']);
            $table->dropColumn('post_id');

            $table->foreignId('post_id')->constrained('post')->cascadeOnDelete();
        });
    }
};
