@extends('layouts.app')
@section('title', $page->getTitle())
@section('page')
<section class="c-section" id="section-content">
    <div class="c-layout">
        <div class="c-page__meta">
            <div class="c-page__title">
                {!! $page->getTitle() !!}
            </div>
            <div class="c-page__text c-format">
                {!! $page->getPageBody() !!}
            </div>
        </div>
    </div>
</section>
@endsection
