@extends('layouts.app')
@section('page')

        <section class="c-section">

            <div class="c-page">
                <div class="c-layout">
                    <div class="c-page__meta">
                        <div class="c-page__title">
                            <span>Contatos</span>
                        </div>
                        <div class="c-page__text">
                            <p>
                                R. Dr. Joaquim Pires de Lima 119, 4200-347 Porto<br/>
                                Phone +351965914900<br/>
                                Email anotherworld.porto@gmail.com
                            </p>
                        </div>
                        <div class="c-page__actions">
                            <a href="{{route('games')}}" class="c-button c-button--readmore">sobre a aventura</a>
                            <a href="https://www.youtube.com/watch?v=no4D4xJdxYQ&t=3s" data-fancybox="" class="c-button c-button--readmore">Ver trailer</a>
                            <a href="#" class="c-button">Reserva uma experiência</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        
        <section class="c-section" id="section-map">
            <div class="c-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6007.004809121346!2d-8.597186000000002!3d41.16720800000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2465519b6db6ff%3A0xa2bd2faeb4a75628!2sAnother%20World%20-%20Porto!5e0!3m2!1sen!2sru!4v1711709315117!5m2!1sen!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

@endsection
