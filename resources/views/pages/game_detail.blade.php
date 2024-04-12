@extends('layouts.app')
@section('page')
<section class="c-section" id="section-game">
    <div class="c-game">
        <div class="c-game__meta">
            <div class="c-layout">
                <div class="c-game__content">
                    <div class="c-game__title">
                        {{ $game->getTitle()}}
                    </div>
                    <ul class="c-game__info">
                        <li><span>{!! __('game_item.genre') !!}:</span> {{$game->getGenre()}}</li>
                        <li><span>{!! __('game_item.duration') !!}:</span> {{$game->getDuration()}}</li>
                        <li><span>{!! __('game_item.age') !!}:</span> {{$game->getAge()}}</li>
                        <li><span>{!! __('game_item.players') !!}:</span> {{$game->getPlayers()}}</li>
                    </ul>
                    <div class="c-game__text">
                        <p>
                           {{$game->getTeaser()}}
                        </p>
                    </div>
                    <div class="c-game__actions">
                        @include('partials.reserve_button')
                        <a href="{{$game->trailer_link}}" data-fancybox="" class="c-button c-button--readmore">{!! __('app.watch_trailer') !!}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="c-game__media">
            <iframe src="{{$game->trailer_link}}?mode=opaque&amp;wmode=transparent&amp;autoplay=1&amp;loop=1&amp;controls=0&amp;modestbranding=1&amp;rel=0&amp;autohide=1&amp;showinfo=0&amp;color=white&amp;iv_load_policy=3&amp;theme=light&amp;wmode=transparent&amp;mute=1" frameborder="0" allow="autoplay"></iframe>
        </div>
    </div>
</section>

<section class="c-section" id="section-game-info">
    <div class="c-layout">
        <div class="c-game-chapter">
            <div class="c-game-chapter__media">
                <img src="{{$game->descriptionImage()}}" alt=""/>
            </div>
            <div class="c-game-chapter__meta">
                <div class="c-game-chapter__title">
                    {{$game->getTitle()}}
                </div>
                <div class="c-game-chapter__text">
                    {!! $game->getDescription()!!}
                </div>
                <div class="c-game-chapter__actions">
                    @include('partials.reserve_button')
                </div>
            </div>
        </div>
    </div>
</section>

<section class="c-section" id="section-game-gallery">
    <div class="swiper swiper-gallery js-swiper-gallery">

        <div class="swiper-wrapper">
            @foreach($game->gallery() as $image)

            <article class="swiper-slide">

                <div class="swiper__title">
                    <span class="swiper__title__value">{{__('app.gameplay')}}</span>
                </div>
                <img src="{{$image['url']}}"/>
            </article>
            @endforeach
        </div><!---/swiper-wrapper-->
        <button class="swiper-button-prev js-swiper-gallery-prev"></button>
        <button class="swiper-button-next js-swiper-gallery-next"></button>
    </div><!--/swiper-->
</section>
@endsection
