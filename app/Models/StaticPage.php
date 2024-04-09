<?php

namespace App\Models;

use App\Constants\EntityFields;
use App\Traits\LocaleScopes;
use App\Traits\Localization;
use App\Traits\Translates;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

/**
 *
 */
class StaticPage extends Model {

    use HasFactory;
    use Translates;
    use LocaleScopes;
    use Localization;

    /**
     * @var array
     */
    protected $fillable = [
        EntityFields::PAGE_KEY,
        EntityFields::STATUS,
        EntityFields::PAGE_KEY
    ];
    public function __construct(array $attributes = []) {

        parent::__construct($attributes);
        $this->selectedLanguage = App::getLocale();
        $this->translatable = [
            EntityFields::TITLE,
            EntityFields::BODY,
        ];
        $this->translatedAttributes = [
            EntityFields::TITLE,
            EntityFields::BODY,
        ];
    }


    /**
     * Создание псевдонима (ключа) для страницы
     * @return void
     */
    public function rechangePageKey() {

        $this->page_key = Str::slug(Str::lower($this->page_key));
    }

    /**
     * @return string
     */
    public function getPageKey()
    :string {
        $this->setLanguage($this->selectedLanguage);
        return $this->page_key;
    }

    /**
     * @return mixed
     */
    public function getPageBody()
    :?string {
        $this->setLanguage($this->selectedLanguage);
        return $this->body;
    }

    /**
     * @return string|null
     */
    public function getTitle()
    :?string {

        return $this->title;
    }

    /**
     * @return bool
     */
    public function isPublished() {

        return $this->status === 1;
    }

}
