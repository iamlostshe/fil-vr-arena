<section class="c-section" id="section-games">
    <div class="c-layout">
        <div class="c-section__title">
            {!! __('home.block_3_title') !!}
        </div>
    </div>
    <div class="c-layout c-layout--wide">
        <div class="c-swiper has-paginator swiper js-swiper-games">
            <div class="swiper-wrapper">
                @php
                /** @var \App\Models\Game $game */
                @endphp
                @foreach($games as $game)
                <article class="c-game-item swiper-slide">
                    <div class="c-game-item__meta">
                        <div class="c-game-item__title">
                           {{$game->getTitle()}}
                        </div>
                        <ul class="c-game-item__info">
                            <li><span>{!! __('game_item.genre') !!}:</span> {{$game->getGenre()}}</li>
                            <li><span>{!! __('game_item.duration') !!}:</span> {{$game->getDuration()}}</li>
                            <li><span>{!! __('game_item.age') !!}:</span> {{$game->getAge()}}</li>
                            <li><span>{!! __('game_item.players') !!}:</span> {{$game->getPlayers()}}</li>
                        </ul>
                        <div class="c-game-item__text">
                            {{$game->getTeaser()}}
                        </div>
                        <div class="c-game-item__actions">
                            @include('partials.reserve_button')
                            <a href="{{route(\App\Constants\RouteNames::GAMES_DETAIL, $game->id)}}" class="c-button c-button--readmore">{!! __('app.more_details') !!}</a>
                            <div class="o-mobile-only">
                                <a href="{{$game->getTrailerLink()}}" data-fancybox="" class="c-button c-button--readmore">{!! __('app.watch_trailer') !!}</a>
                            </div>
                        </div>

                    </div>
                    <div class="c-game-item__media">
                        <img src="{{$game->poster()}}" alt=""/>
                        <a href="{{$game->getTrailerLink()}}" data-fancybox="" class="c-game-item__play"></a>
                    </div>
                </article>
                @endforeach

            </div><!---/swiper-wrapper-->
            <button class="swiper-button-prev js-swiper-games-prev"></button>
            <button class="swiper-button-next js-swiper-games-next"></button>
            <div class="swiper-pagination js-swiper-games-pagination"></div>
        </div><!--/swiper-->
    </div>
</section>
