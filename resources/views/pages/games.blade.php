@extends('layouts.app')
@section('title', __('game_item.games'))
@section('page')
        <section class="c-section" id="section-games-list">
            <div class="c-layout">
                <div class="c-section__title">{!! __('game_item.games') !!}</div>
            </div>
            <div class="c-game__list">
                @foreach($games as $game)
                    @include('blocks.game_item', ['game' => $game])
                @endforeach

            </div><!--/c-game__list-->
        </section>

@endsection
