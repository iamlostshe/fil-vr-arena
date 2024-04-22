<article class="c-game-item">
    <div class="c-game-item__meta">
        @php
            /** @var \App\Models\Game $game */
        @endphp
        <div class="c-layout">
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
                <a href="{{route_alias(\App\Constants\RouteNames::GAMES_DETAIL, $game)}}"
                   class="c-button c-button--readmore">{!! __('app.more_details') !!}</a>
                <a href="{{$game->getTrailerLink()}}" data-fancybox=""
                   class="c-button c-button--readmore">{!! __('app.watch_trailer') !!}</a>
            </div>

        </div>

    </div>
    <div class="c-game-item__media">
        <img src="{{$game->poster()}}" alt=""/>
    </div>
</article>

