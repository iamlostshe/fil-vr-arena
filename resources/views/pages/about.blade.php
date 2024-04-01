@extends('layouts.app')
@section('page')
    <main class="c-main">

        <section class="c-section" id="section-page">

            <div class="c-page has-media">
                <div class="c-page__media">
                    <img src="{{asset('/img/bg-team.jpg')}}" alt=""/>
                </div>
                <div class="c-layout">
                    <div class="c-page__meta">
                        <div class="c-page__title">
                            <span>Porto</span><br/>
                            Realidade virtual sem limites
                        </div>
                        <div class="c-page__text">
                            <p>
                                Hey! Nós somos o Another World e estamos a criar a VR da próxima geração!
                            </p>
                            <p>
                                O nosso principal objetivo é tornar a VR acessível para todos. Desde 2018, temos desenvolvido jogos de equipa com movimento livre adequados tanto para crianças como para adultos. Focamo-nos em mecânicas de jogo fáceis e diretas. Acabaram-se os cabos e fios limitadores, agora tens liberdade total de movimento pela área.
                            </p>
                            <p>
                                Os jogos do Another World são para o hardware mais avançado, o Oculus Quest 2, um sistema de rastreamento que transfere cada movimento do teu corpo para o mundo virtual. A capacidade de jogar com uma equipa de 1 a 12 jogadores. Vários géneros de jogo que te proporcionam emoções que nunca antes sentiste.
                            </p>
                        </div>
                        <div class="c-page__actions">
                            <a href="{{route('game')}}" class="c-button c-button--readmore">sobre a aventura</a>
                            <a href="https://www.youtube.com/watch?v=no4D4xJdxYQ&t=3s" data-fancybox="" class="c-button c-button--readmore">Ver trailer</a>
                            <a href="#" class="c-button">Reserva uma experiência</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
@endsection
