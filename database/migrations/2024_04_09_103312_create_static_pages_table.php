<?php

use App\Constants\EntityFields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     * @return void
     */
    public function up() {

        Schema::create('static_pages', function(Blueprint $table) {

            $table->id();
            $table->string(EntityFields::PAGE_KEY)
                ->unique()
                ->index();
            $table->string(EntityFields::TITLE)
                ->nullable();
            $table->longText(EntityFields::BODY)
                ->nullable();
            $table->tinyInteger(EntityFields::STATUS)
                ->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down() {

        Schema::dropIfExists('static_pages');
    }
};
