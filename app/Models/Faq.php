<?php

namespace App\Models;

use App\Constants\EntityFields;
use App\Traits\LocaleScopes;
use App\Traits\Localization;
use App\Traits\Translates;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class Faq extends Model
{
    use HasFactory;
    use Translates;
    use LocaleScopes;
    use Localization;
    use SoftDeletes;
    protected $fillable = [
        EntityFields::WEIGHT
    ];
    protected $table = 'faq';
    public function __construct(array $attributes = []) {


        parent::__construct($attributes);
        $this->selectedLanguage = App::getLocale();
        $this->translatable = [
            EntityFields::TITLE,
            EntityFields::DESCRIPTION,
        ];
        $this->translatedAttributes = [
            EntityFields::TITLE,
            EntityFields::DESCRIPTION,
        ];
    }

    /**
     * @return mixed
     */
    public function getTitle()
    :mixed {

        $this->setLanguage($this->selectedLanguage);

        return $this->title;
    }
    /**
     * @return mixed
     */
    public function getDescription()
    :mixed {

        $this->setLanguage($this->selectedLanguage);

        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    :mixed {

        return $this->weight;
    }

}
