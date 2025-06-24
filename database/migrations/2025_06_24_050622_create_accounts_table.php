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
        Schema::create('Accounts', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string('Name')->comment('使用者名稱');
            $table->string('Email', 255)->unique()->comment('使用者電子郵件');
            $table->string('Password')->comment('密碼（加密）');
            $table->timestamp('EmailVerifiedAt')->nullable()->comment('電子郵件驗證時間');
            
            // 個人資訊
            $table->string('FullName')->nullable()->comment('全名');
            $table->enum('Gender', ['male', 'female', 'other'])->nullable()->comment('性別');
            
            // 帳號狀態
            $table->boolean('IsEmailVerified')->default(false)->comment('電子郵件是否已驗證');
            $table->enum('Status', ['active', 'inactive', 'suspended', 'deleted'])->default('active')->comment('帳號狀態');
            
            // 權限
            $table->string('Role')->default('general')->comment('使用者身分');
            
            // 登入相關
            $table->timestamp('LastLoginAt')->nullable()->comment('最後登入時間');
            $table->string('LastLoginIp')->nullable()->comment('最後登入IP');
            $table->integer('LoginAttempts')->default(0)->comment('登入嘗試次數');
            
            // 個人設定
            $table->string('Photo')->nullable()->comment('頭像路徑');
            $table->string('Language', 10)->default('zh-TW')->comment('語言偏好');
            $table->boolean('SubscribeNewsletter')->default(false)->comment('是否訂閱電子報');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Accounts');
    }
};
