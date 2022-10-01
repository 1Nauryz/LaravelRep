<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('post_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign('posts_comment_id_foreign');
            $table->dropColumn('comment_id');
        });
        Schema::dropIfExists('comments');
    }
};
