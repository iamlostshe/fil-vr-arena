<?php

use App\Constants\EntityFields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    :void {

        Schema::create('games', function(Blueprint $table) {

            $table->id();
            $table->string(EntityFields::TITLE)
                ->nullable();
            $table->text(EntityFields::DESCRIPTION)
                ->nullable();
            $table->string(EntityFields::GENRE)
                ->nullable();
            $table->string(EntityFields::TEASER)
                ->nullable();
            $table->string(EntityFields::DURATION);
            $table->string(EntityFields::PLAYERS);
            $table->string(EntityFields::AGE);
            $table->string(EntityFields::TRAILER_LINK);
            $table->string(EntityFields::STATUS);
            $table->integer(EntityFields::WEIGHT)
                ->default(500)
                ->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    :void {

        Schema::dropIfExists('games');
    }
};
