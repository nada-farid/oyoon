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
        Schema::table('hawkmas', function (Blueprint $table) {
            $table->text('description')->nullable()->after('title');
            $table->string('version')->nullable()->after('description');
            $table->date('effective_date')->nullable()->after('version');
            $table->date('expiry_date')->nullable()->after('effective_date');
            $table->string('document_type')->nullable()->after('expiry_date'); // policy, regulation, report, etc.
            $table->string('status')->default('active')->after('document_type'); // active, draft, archived
            $table->integer('sort_order')->default(0)->after('status');
            $table->text('tags')->nullable()->after('sort_order'); // JSON array of tags
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hawkmas', function (Blueprint $table) {
            $table->dropColumn([
                'description',
                'version',
                'effective_date',
                'expiry_date',
                'document_type',
                'status',
                'sort_order',
                'tags'
            ]);
        });
    }
};