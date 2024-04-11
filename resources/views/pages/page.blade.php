@extends('layouts.app')
@section('page')
<section class="c-section" id="section-content">
    <div class="c-layout">
        <div class="c-page__meta">
            <div class="c-page__title">
                {!! $page->getTitle() !!}
            </div>
            <div class="c-page__text">
                {!! $page->getPageBody() !!}
            </div>
        </div>
    </div>
</section>
@endsection
