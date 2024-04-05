@extends('layouts.app')
@section('page')

        <section class="c-hero" id="section-hero">
            <div class="c-layout">
                <div class="c-hero__meta">
                    <div class="c-hero__logo">
                        <img src="{{asset("/img/logo-text.svg")}}" alt="ANOTHER WORLD"/>
                    </div>

                    <div class="c-hero__content">
                        <div class="c-hero__title">{!! __('home.block_1_title') !!}</div>
                        <ul class="c-hero__options">
                            <li>{!! __('home.block_1_list.item_1') !!}</li>
                            <li>{!! __('home.block_1_list.item_2') !!}</li>
                            <li>{!! __('home.block_1_list.item_3') !!}</li>
                        </ul>
                        <div class="c-hero__actions">
                            <a href="#" class="c-button">{!! __('home.book_button') !!}</a>
                        </div>
                    </div>

                    <div class="c-promo">
                        <div class="c-promo__title">{!! __('home.block_2_title') !!}</div>
                        <div class="c-promo__list">
                            <article class="c-promo-item">
                                <div class="c-promo-item__media">
                                    <img src="{{asset('/img/promo-girl.png')}}" alt=""/>
                                </div>
                                <div class="c-promo-item__meta">
                                    {!! __('home.block_2_list.item_1') !!}
                                </div>
                            </article>
                            <article class="c-promo-item">
                                <div class="c-promo-item__media">
                                    <img src="{{asset('/img/promo-visor.png')}}" alt=""/>
                                </div>
                                <div class="c-promo-item__meta">
                                    {!! __('home.block_2_list.item_2') !!}
                                </div>
                            </article>
                            <article class="c-promo-item">
                                <div class="c-promo-item__media">
                                    <img src="{{asset('/img/promo-boy.png')}}" alt=""/>
                                </div>
                                <div class="c-promo-item__meta">
                                    {!! __('home.block_2_list.item_3') !!}
                                </div>
                            </article>
                        </div><!--/c-promo__list-->

                    </div><!--/c-promo-->

                </div>
            </div>
        </section>

       @include('widgets.games', ['games' => $games])

        <section class="c-section" id="section-price">
            <div class="c-layout">
                <div class="c-section__title">
                    PREÇO <span>JOGOS</span>
                </div>

                <div class="c-section__text">
                    <table>
                        <tbody>
                        <tr>
                            <td></td>
                            <td>Duration, mins</td>
                            <td>Price</td>
                        </tr>
                        <tr>
                            <td>2-3 pessoas (1 arena)</td>
                            <td>60</td>
                            <td>28€</td>
                        </tr>
                        <tr>
                            <td>4-5 pessoas (1 arena)</td>
                            <td><p>60</p></td>
                            <td>25€</td>
                        </tr>
                        <tr>
                            <td>6 pessoas (1 arena)</td>
                            <td><p>60</p></td>
                            <td>22€</td>
                        </tr>
                        <tr>
                            <td>7-9 pessoas (2 arenas)</td>
                            <td><p>60</p></td>
                            <td>25€</td>
                        </tr>
                        <tr>
                            <td>10-11 pessoas (2 arenas)</td>
                            <td><p>60</p></td>
                            <td>22€</td>
                        </tr>
                        <tr>
                            <td>12 pessoas (2 arenas)</td>
                            <td><p>60</p></td>
                            <td>20€</td>
                        </tr></tbody></table>
                </div>
                <div class="c-section__actions">
                    <a href="#" class="c-button">{!! __('app.reserve_experience_button') !!}</a>
                </div>

            </div>
        </section>

        @include('widgets.faq', ['faqs' => $faqs])

        <section class="c-section" id="section-map">
            <div class="c-layout">
                <div class="c-section__title">{!! __('home.find_block_title') !!}</div>
            </div>
            <div class="c-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6007.004809121346!2d-8.597186000000002!3d41.16720800000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2465519b6db6ff%3A0xa2bd2faeb4a75628!2sAnother%20World%20-%20Porto!5e0!3m2!1sen!2sru!4v1711709315117!5m2!1sen!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>


@endsection
