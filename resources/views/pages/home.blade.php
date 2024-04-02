@extends('layouts.app')
@section('page')

        <section class="c-hero" id="section-hero">
            <div class="c-layout">
                <div class="c-hero__meta">
                    <div class="c-hero__logo">
                        <img src="{{asset("/img/logo-text.svg")}}" alt="ANOTHER WORLD"/>
                    </div>

                    <div class="c-hero__content">
                        <div class="c-hero__title">VIRTUAL REALITY <span>PORTO PARQUE</span> COM MOVIMENTO LIVRE</div>
                        <ul class="c-hero__options">
                            <li>festas de aniversário</li>
                            <li>eventos corporativos</li>
                            <li>experiências</li>
                        </ul>
                        <div class="c-hero__actions">
                            <a href="#" class="c-button">Reserva a tua experiência</a>
                        </div>
                    </div>

                    <div class="c-promo">
                        <div class="c-promo__title"><span>ANOTHER WORLD VIRTUAL REALITY</span><br/> - ISTO É</div>
                        <div class="c-promo__list">
                            <article class="c-promo-item">
                                <div class="c-promo-item__media">
                                    <img src="{{asset('/img/promo-girl.png')}}" alt=""/>
                                </div>
                                <div class="c-promo-item__meta">
                                    Plataforma virtual <span>multinível</span> 3 vezes maior do que um campo de jogo real
                                </div>
                            </article>
                            <article class="c-promo-item">
                                <div class="c-promo-item__media">
                                    <img src="{{asset('/img/promo-visor.png')}}" alt=""/>
                                </div>
                                <div class="c-promo-item__meta">
                                    O <span>sistema de rastreamento avançado transferirá</span> os teus movimentos para o jogo de forma realista
                                </div>
                            </article>
                            <article class="c-promo-item">
                                <div class="c-promo-item__media">
                                    <img src="{{asset('/img/promo-boy.png')}}" alt=""/>
                                </div>
                                <div class="c-promo-item__meta">
                                    <span>Apoio e assistência</span> dos nossos assistentes de VR qualificados
                                </div>
                            </article>
                        </div><!--/c-promo__list-->

                    </div><!--/c-promo-->

                </div>
            </div>
        </section>

        <section class="c-section" id="section-games">
            <div class="c-layout">
                <div class="c-section__title">
                    REÚNE A TUA EQUIPA<br/>
                    <span>OUTROS MUNDOS ESTÃO À TUA ESPERA!</span>
                </div>
            </div>
            <div class="c-layout c-layout--wide">
                <div class="c-swiper swiper js-swiper-games">
                    <div class="swiper-wrapper">

                        <article class="c-game-item swiper-slide">
                            <div class="c-game-item__meta">
                                <div class="c-game-item__title">
                                    Kernel: Confrontation
                                </div>
                                <ul class="c-game-item__info">
                                    <li><span>Género:</span> PvP</li>
                                    <li><span>Sessão:</span> 60 min</li>
                                    <li><span>Jogadores:</span> 2+ <small>(Recomendado)</small></li>
                                    <li><span>Idade:</span> 8+</li>
                                </ul>
                                <div class="c-game-item__text">
                                    <p>
                                        Another World apresenta o seu novo shooter hiper-realista - KERNEL.
                                    </p>
                                    <p>
                                        Duas equipas enfrentarão-se no território de um bunker abandonado, onde ocorre uma anomalia incomum - um misterioso sol negro que altera as leis da física.
                                    </p>
                                    <p>
                                        Cada detalhe do cenário é trabalhado com tanto cuidado que tu não terás dúvidas - tudo isto está realmente a acontecer.
                                    </p>
                                    <p>
                                        Imersão total na atmosfera do passado, armas realistas e fenómenos paranormais - este é o novo shooter "KERNEL" da Another World.
                                    </p>
                                </div>
                                <div class="c-game-item__actions">
                                    <a href="#" class="c-button">Reserva a tua experiência</a>
                                    <a href="{{route('game')}}" class="c-button c-button--readmore">Mais informações</a>
                                    <div class="o-mobile-only">
                                        <a href="https://www.youtube.com/watch?v=no4D4xJdxYQ&t=3s" data-fancybox="" class="c-button c-button--readmore">Ver trailer</a>
                                    </div>
                                </div>

                            </div>
                            <div class="c-game-item__media">
                                <img src="{{asset('/media/game-2.jpg')}}" alt=""/>
                                <a href="https://www.youtube.com/watch?v=no4D4xJdxYQ&t=3s" data-fancybox="" class="c-game-item__play"></a>
                            </div>
                        </article>



                        <article class="c-game-item swiper-slide">
                            <div class="c-game-item__meta">
                                <div class="c-game-item__title">
                                    Colony: Code Red
                                </div>
                                <ul class="c-game-item__info">
                                    <li><span>Género:</span> Sci-Fi</li>
                                    <li><span>Sessão:</span> 60 min</li>
                                    <li><span>Jogadores:</span> 1-4 <small>(Recomendado)</small></li>
                                    <li><span>Idade:</span> 12+</li>
                                </ul>
                                <div class="c-game-item__text">
                                    <p>
                                        Ano 2508. A humanidade está a colonizar o espaço, e é um progresso árduo e demorado. As viagens para alcançar as estrelas demoram anos. As equipas de peregrinos interestelares dormem em criocápsulas, enquanto módulos de inteligência artificial pilotam as naves espaciais para chegar a colónias distantes.
                                    </p>
                                </div>
                                <div class="c-game-item__actions">
                                    <a href="#" class="c-button">Reserva a tua experiência</a>
                                    <a href="{{route('game')}}" class="c-button c-button--readmore">Mais informações</a>
                                    <div class="o-mobile-only">
                                        <a href="https://www.youtube.com/watch?v=no4D4xJdxYQ&t=3s" data-fancybox="" class="c-button c-button--readmore">Ver trailer</a>
                                    </div>
                                </div>

                            </div>
                            <div class="c-game-item__media">
                                <img src="{{asset('/media/game-colony-color-red.jpg')}}" alt=""/>
                                <a href="https://www.youtube.com/watch?v=no4D4xJdxYQ&t=3s" data-fancybox="" class="c-game-item__play"></a>
                            </div>
                        </article>


                    </div><!---/swiper-wrapper-->
                    <button class="swiper-button-prev js-swiper-games-prev"></button>
                    <button class="swiper-button-next js-swiper-games-next"></button>
                    <div class="swiper-pagination js-swiper-games-pagination"></div>
                </div><!--/swiper-->
            </div>
        </section>

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
                    <a href="#" class="c-button">Reserva a tua experiência</a>
                </div>

            </div>
        </section>

        <section class="c-section" id="section-faq">
            <div class="c-layout">
                <div class="c-section__title">
                    FAQ
                </div>
                <div class="c-faq__list">
                    <article class="c-faq-item js-spoiler-item" id="spoiler-1">
                        <div class="c-faq-item__question">
                            <button class="js-spoiler-trigger" data-spoiler="spoiler-1">
                                Existe uma idade mínima para jogar?
                            </button>
                        </div>
                        <div class="c-faq-item__answer">
                            <div class="c-faq-item__content">
                                <p>
                                    A Realidade Virtual é uma experiência envolvente e estimulante e, embora as recomendações de idade variem de um headset VR para outro, aconselhamos que os utilizadores tenham pelo menos 8 anos de idade.
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="c-faq-item js-spoiler-item" id="spoiler-2">
                        <div class="c-faq-item__question">
                            <button class="js-spoiler-trigger" data-spoiler="spoiler-2">
                                Se viermos com crianças, haverá alguém para ajudar?
                            </button>
                        </div>
                        <div class="c-faq-item__answer">
                            <div class="c-faq-item__content">
                                <p>
                                    Claro! Sempre que precisar de ajuda, o nosso assistente de VR estará feliz em ajudá-lo!
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="c-faq-item js-spoiler-item" id="spoiler-3">
                        <div class="c-faq-item__question">
                            <button class="js-spoiler-trigger" data-spoiler="spoiler-3">
                                Posso trazer comida e bebidas comigo?
                            </button>
                        </div>
                        <div class="c-faq-item__answer">
                            <div class="c-faq-item__content">
                                <p>
                                    Sim, pode! Mas, por favor, certifique-se de que as suas bebidas não contêm álcool.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="c-section" id="section-map">
            <div class="c-layout">
                <div class="c-section__title">COMO NOS PODES <span>ENCONTRAR?</span></div>
            </div>
            <div class="c-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6007.004809121346!2d-8.597186000000002!3d41.16720800000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2465519b6db6ff%3A0xa2bd2faeb4a75628!2sAnother%20World%20-%20Porto!5e0!3m2!1sen!2sru!4v1711709315117!5m2!1sen!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>


@endsection
