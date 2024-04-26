@extends('layouts.app')
@section('title', $page->getTitle())
@section('page')
    <section class="c-section" id="section-page">

        <div class="c-page has-media">
            <div class="c-page__media">
                <img src="{{asset('/img/bg-team.jpg')}}">
            </div>
            <div class="c-layout">
                <div class="c-page__meta">
                    <div class="c-page__title">
                        {!! $page->getTitle() !!}
                    </div>
                    <div class="c-page__text">
                        {!! $page->getPageBody() !!}
                    </div>
                    <div class="c-page__actions">
                        <a href="{{route('games')}}" class="c-button c-button--readmore">{!! __('app.about_the_adventure') !!}</a>
                        <a href="https://www.youtube.com/watch?v=no4D4xJdxYQ&amp;t=3s" data-fancybox="" class="c-button c-button--readmore">{!! __('app.watch_trailer') !!}</a>
                        @include('partials.reserve_button')
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
