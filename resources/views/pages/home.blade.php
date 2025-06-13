@extends('layouts.app')
@section('page')

        <section class="c-hero" id="section-hero">
            <div class="c-hero__media">
                <div class="c-hero__video">
                    <video
                        id="js-hero-video"
                        width="1920" height="1080" autoplay loop muted frameborder="0" allowfullscreen playsinline
                        poster="{{asset("/media/video/img/hero.jpg")}}">
                    <source
                        src="{{asset("/media/video/hero-mobile.mp4")}}"
                        data-video="{{asset("/media/video/hero.mp4")}}" type="video/mp4"
                    />
                    </video>
                </div>
            </div>
            <div class="c-hero__meta">
                <div class="c-layout">
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
                            <a href="{{route(\App\Constants\RouteNames::ONLINE_BOOK)}}" class="c-button" target="_blank">{!! __('home.book_button') !!}</a>
                        </div>
                    </div>

                    <div class="c-promo">
                        <div class="c-promo__title">{!! __('home.block_2_title') !!}</div>
                        <div class="c-promo__list">
                            <article class="c-promo-item">
                                <div class="c-promo-item__media">
                                    <img src="{{asset('/img/promo-1.png')}}" alt=""/>
                                </div>
                                <div class="c-promo-item__meta">
                                    {!! __('home.block_2_list.item_1') !!}
                                </div>
                            </article>
                            <article class="c-promo-item">
                                <div class="c-promo-item__media">
                                    <img src="{{asset('/img/promo-2.png')}}" alt=""/>
                                </div>
                                <div class="c-promo-item__meta">
                                    {!! __('home.block_2_list.item_2') !!}
                                </div>
                            </article>
                            <article class="c-promo-item">
                                <div class="c-promo-item__media">
                                    <img src="{{asset('/img/promo-3.png')}}" alt=""/>
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

        <section class="c-section" id="events">
            <h3>Events</h3>
        </section>

        <section class="c-section" id="gifts_cards">
            <h3>Gifts Cards</h3>
        </section>

        <section class="c-section" id="section-price">
            <div class="c-layout">
                <div class="c-section__title">
                    {!! __('home.prices_block_title') !!}
                    <div class="c-section__title-description">{!! __('home.prices_per_person') !!}</div>
                </div>

                <div class="c-section__text">
                    <table>
                        <tbody>
                            <tr>
                                <td class="o-highlight">{!! __('home.prices_block_multy') !!}</td>
                                <td>25 MIN</td>
                                <td>50 MIN</td>
                                <td>{!! __('home.prices_event_packs') !!}</td>
                            </tr>
                            <tr>
                                <td>2 {!! __('home.prices_block_players') !!}</td>
                                <td>30€</td>
                                <td>35€</td>
                                <td>40€</td>
                            </tr>
                            <tr>
                                <td>3 {!! __('home.prices_block_players') !!}</td>
                                <td>29€</td>
                                <td>34€</td>
                                <td>39€</td>
                            </tr>
                            <tr>
                                <td>4 {!! __('home.prices_block_players') !!}</td>
                                <td>28€</td>
                                <td>33€</td>
                                <td>38€</td>
                            </tr>
                            <tr>
                                <td>5 {!! __('home.prices_block_players') !!}</td>
                                <td>27€</td>
                                <td>32€</td>
                                <td>37€</td>
                            </tr>
                            <tr>
                                <td>6 {!! __('home.prices_block_players') !!}</td>
                                <td>26€</td>
                                <td>31€</td>
                                <td>36€</td>
                            </tr>
                            <tr>
                                <td>7 {!! __('home.prices_block_players') !!}</td>
                                <td>25€</td>
                                <td>30€</td>
                                <td>35€</td>
                            </tr>
                            <tr>
                                <td>8 {!! __('home.prices_block_players') !!}</td>
                                <td>24€</td>
                                <td>29€</td>
                                <td>34€</td>
                            </tr>
                            <tr>
                                <td>9 {!! __('home.prices_block_players') !!}</td>
                                <td>23€</td>
                                <td>28€</td>
                                <td>33€</td>
                            </tr>
                            <tr>
                                <td>10 {!! __('home.prices_block_players') !!}</td>
                                <td>22€</td>
                                <td>27€</td>
                                <td>32€</td>
                            </tr>
                            <tr>
                                <td>11 {!! __('home.prices_block_players') !!}</td>
                                <td>21€</td>
                                <td>26€</td>
                                <td>31€</td>
                            </tr>
                            <tr>
                                <td>12 {!! __('home.prices_block_players') !!} <span class="o-highlight">+</span></td>
                                <td>20€</td>
                                <td>25€</td>
                                <td>30€</td>
                            </tr>
                            <tr class="o-footer">
                                <td class="o-highlight">{!! __('home.prices_block_single') !!}</td>
                                <td><strong>20€</strong></td>
                                <td><strong>25€</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="c-section__actions">
                    @include('partials.reserve_button')
                </div>

            </div>
        </section>

        @include('widgets.faq', ['faqs' => $faqs])

        {{--        @include('widgets.map')--}}


@endsection
