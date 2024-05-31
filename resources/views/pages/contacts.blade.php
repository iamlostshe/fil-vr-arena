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
    <section class="c-section" id="section-map">
        <div class="c-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d777.8932692489827!2d-9.104068!3d38.750558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd19330018a0c101%3A0x176e741ebce86d37!2sAnother%20World%20Parking!5e0!3m2!1sru!2skg!4v1717149333719!5m2!1sru!2skg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

@endsection
