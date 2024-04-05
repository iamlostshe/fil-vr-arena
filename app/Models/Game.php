<?php

namespace App\Models;

use App\Constants\EntityFields;
use App\Constants\MediaNames;
use App\Traits\LocaleScopes;
use App\Traits\Localization;
use App\Traits\Translates;
use App\Traits\UrlAliasable;
use Eminiarts\Tabs\Traits\HasTabs;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\FileAdder;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * @method void prepareToAttachMedia(Media $media, FileAdder $fileAdder)
 */
class Game extends Model implements HasMedia {
    use HasTabs;
    use HasFactory;
    use Translates;
    use SoftDeletes;
    use UrlAliasable;
    use LocaleScopes;
    use Localization;
    use InteractsWithMedia;

    protected $table = 'games';

    protected $fillable = [
        EntityFields::DURATION,
        EntityFields::PLAYERS,
        EntityFields::AGE,
        EntityFields::TRAILER_LINK,
        EntityFields::STATUS,
    ];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = []) {

        parent::__construct($attributes);
        $this->selectedLanguage = App::getLocale();
        $this->translatable = [
            EntityFields::TITLE,
            EntityFields::TEASER,
            EntityFields::DESCRIPTION,
            EntityFields::GENRE,
        ];
        $this->translatedAttributes = [
            EntityFields::TITLE,
            EntityFields::TEASER,
            EntityFields::DESCRIPTION,
            EntityFields::GENRE,
        ];
    }

    /**
     * @return mixed
     */
    public function getTitle() {

        $this->setLanguage($this->selectedLanguage);

        return $this->title;
    }

    public function getTeaser() {

            $this->setLanguage($this->selectedLanguage);

            return $this->teaser;
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
    public function getGenre() {

        $this->setLanguage($this->selectedLanguage);

        return $this->genre;
    }

    /**
     * @return mixed
     */
    public function getDuration() {

        return $this->duration;
    }

    /**
     * @return mixed
     */
    public function getPlayers() {

        return $this->players;
    }

    /**
     * @return mixed
     */
    public function getAge() {

        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getTrailerLink() {

        return $this->trailer_link;
    }

    /**
     * @return mixed
     */
    public function getStatus() {

        return $this->status;
    }


    /**
     * @param Media|null $media
     *
     * @return void
     */
    public function registerMediaConversions(?Media $media = NULL)
    :void {

        $this->addMediaConversion('thumb')
            ->width(130)
            ->height(130);
        $this->addMediaConversion('teaser')
            ->width(368)
            ->height(232);
        $this->addMediaConversion(MediaNames::GAME_POSTER_IMAGE)
            ->width(2000)
            ->height(752);
        $this->addMediaConversion(MediaNames::GAME_DESCRIPTION_IMAGE)
            ->width(2000)
            ->height(752);
    }

    /**
     * @return void
     */
    public function registerMediaCollections()
    :void {

        $this->addMediaCollection(MediaNames::GAME_POSTER_IMAGE)
            ->singleFile();
        $this->addMediaCollection(MediaNames::GAME_DESCRIPTION_IMAGE)
            ->singleFile();
        $this->addMediaCollection(MediaNames::GAME_DETAIL_GALLERY);

    }

    /**
     * @return string|null
     */
    public function poster()
    :?string {

        return $this->getFirstMediaUrl(MediaNames::GAME_POSTER_IMAGE) ? $this->getFirstMediaUrl(MediaNames::GAME_POSTER_IMAGE, MediaNames::GAME_POSTER_IMAGE) : NULL;
    }

    /**
     * @return string|null
     */
    public function descriptionImage()
    :?string {

        return $this->getFirstMediaUrl(MediaNames::GAME_DESCRIPTION_IMAGE) ? $this->getFirstMediaUrl(MediaNames::GAME_DESCRIPTION_IMAGE, MediaNames::GAME_DESCRIPTION_IMAGE) : NULL;
    }

    /**
     * @return array
     */
    public function gallery()
    :array {

        $result = [];
        $gallery = $this->getMedia(MediaNames::GAME_DETAIL_GALLERY) ? $this->getMedia(MediaNames::GAME_DETAIL_GALLERY) : [];
        foreach ($gallery as $key => $media) {

            $result[$key]['url'] = $media->getUrl();
            $result[$key]['text'] = $media->getCustomProperty('text');
        }

        return $result;
    }


}
