<?php namespace ReaZzon\Gutenberg\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBlocksTable extends Migration
{
    public function up()
    {
        Schema::table('reazzon_gutenberg_blocks', function(Blueprint $table) {
            $table->renameColumn('title', 'raw_title');
            $table->string('title')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('reazzon_gutenberg_blocks', function(Blueprint $table) {
            $table->text('title')->nullable()->change();
            $table->renameColumn('raw_title', 'title');
        });
    }
}