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
                            <a href="{{__('contacts.reserve_link')}}" class="c-button">{!! __('home.book_button') !!}</a>
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
                    {!! __('home.prices_block_title') !!}
                </div>

                <div class="c-section__text">
                    <table>
                        <tbody>
                        <tr>
                            <td></td>
                            <td>{!! __('home.prices_block_duration_header') !!}</td>
                            <td>{!! __('home.prices_block_price_header') !!}</td>
                        </tr>
                        <tr>
                            <td>2 - 12 {!! __('home.prices_block_people') !!}</td>
                            <td>30</td>
                            <td>19€</td>
                        </tr>
                        <tr>
                            <td>2 - 12 {!! __('home.prices_block_people') !!}</td>
                            <td>60</td>
                            <td>24€</td>
                        </tr>
                        </tbody></table>
                </div>
                <div class="c-section__actions">
                    @include('partials.reserve_button')
                </div>

            </div>
        </section>

        @include('widgets.faq', ['faqs' => $faqs])

        {{--        @include('widgets.map')--}}


@endsection
