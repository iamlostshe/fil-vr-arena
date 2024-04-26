<?php

namespace App\Models;

use App\Constants\EntityFields;
use App\Traits\LocaleScopes;
use App\Traits\Localization;
use App\Traits\Translates;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Metatag extends Model {
    use HasFactory;
    use Translates;
    use LocaleScopes;
    use Localization;

    protected $fillable = [
        EntityFields::URI,
        EntityFields::TITLE,
        EntityFields::DESCRIPTION,
        EntityFields::KEYWORDS,
    ];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = []) {

        parent::__construct($attributes);
        $this->selectedLanguage = App::getLocale();
    }

    /**
     * @return mixed
     */
    public function getTitle() {

        $this->setLanguage($this->selectedLanguage);

        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getDescription() {

        $this->setLanguage($this->selectedLanguage);

        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getKeywords() {

        $this->setLanguage($this->selectedLanguage);

        return $this->keywords;
    }

}
