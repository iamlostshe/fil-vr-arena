@extends('layouts.app')
@section('title', $page->getTitle())
@section('page')
    <section class="c-section" id="section-contacts">
        <div class="c-layout">
            <div class="c-page__title">
                {!! $page->getTitle() !!}
            </div>
            <div class="c-section__container">
                <div class="c-section__meta">
                    <div class="c-page__text c-format">
                        {!! $page->getPageBody() !!}
                    </div>
                </div>
                <div class="c-section__form">
                    <script>!function(a,m,o,c,r,m){a[o+c]=a[o+c]||{setMeta:function(p){this.params=(this.params||[]).concat([p])}},a[o+r]=a[o+r]||function(f){a[o+r].f=(a[o+r].f||[]).concat([f])},a[o+r]({id:"1358547",hash:"82b5e5c53109c865fa645f9188e386c2",locale:"en"}),a[o+m]=a[o+m]||function(f,k){a[o+m].f=(a[o+m].f||[]).concat([[f,k]])}}(window,0,"amo_forms_","params","load","loaded");</script><script id="amoforms_script_1358547" async="async" charset="utf-8" src="https://forms.kommo.com/forms/assets/js/amoforms.js?1723916461"></script>
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
