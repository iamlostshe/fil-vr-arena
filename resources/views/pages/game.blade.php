@extends('layouts.app')
@section('page')


        <section class="c-section" id="section-game">
            <div class="c-game">
                <div class="c-game__meta">
                    <div class="c-layout">
                        <div class="c-game__content">
                            <div class="c-game__title">
                                Colony: Code Red
                            </div>
                            <ul class="c-game__info">
                                <li><span>Género:</span> Sci-Fi</li>
                                <li><span>Sessão:</span> 60 min</li>
                                <li><span>Jogadores:</span> 1-4 <small>(Recomendado)</small></li>
                                <li><span>Idade:</span> 12+</li>
                            </ul>
                            <div class="c-game__text">
                                <p>
                                    Ano 2508. A humanidade está a colonizar o espaço, e é um progresso árduo e demorado. As viagens para alcançar as estrelas demoram anos. As equipas de peregrinos interestelares dormem em criocápsulas, enquanto módulos de inteligência artificial pilotam as naves espaciais para chegar a colónias distantes.
                                </p>
                            </div>
                            <div class="c-game__actions">
                                <a href="#" class="c-button">Reserva a tua experiência</a>
                                <a href="https://www.youtube.com/watch?v=no4D4xJdxYQ&t=3s" data-fancybox="" class="c-button c-button--readmore">Ver trailer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-game__media">
                    <iframe src="https://www.youtube.com/embed/no4D4xJdxYQ?mode=opaque&amp;wmode=transparent&amp;autoplay=1&amp;loop=1&amp;controls=0&amp;modestbranding=1&amp;rel=0&amp;autohide=1&amp;showinfo=0&amp;color=white&amp;iv_load_policy=3&amp;theme=light&amp;wmode=transparent&amp;mute=1&amp;playlist=no4D4xJdxYQ" frameborder="0" allow="autoplay"></iframe>
                </div>
            </div>
        </section>

        <section class="c-section" id="section-game-info">
            <div class="c-layout">
                <div class="c-game-chapter">
                    <div class="c-game-chapter__media">
                        <img src="{{asset('/media/game-1.jpg')}}" alt=""/>
                    </div>
                    <div class="c-game-chapter__meta">
                        <div class="c-game-chapter__title">
                            Enredo
                        </div>
                        <div class="c-game-chapter__text">
                            <p>
                                Ano 2508. A humanidade está a colonizar o espaço, e é um progresso árduo e demorado. As viagens para alcançar as estrelas demoram anos. As equipas de peregrinos interestelares dormem em criocápsulas, enquanto módulos de inteligência artificial pilotam as naves espaciais para chegar a colónias distantes.
                            </p>
                            <p>
                                Não há conexão direta e comunicação com as fronteiras distantes das colônias, por isso é difícil descobrir o que exatamente está acontecendo lá. A fronteira não é o lugar mais pacífico. Falhas técnicas, desastres naturais e conflitos armados entre as pessoas. Todos esses problemas resultam em caos, morte e destruição.
                            </p>
                            <p>
                                O Planet Alekta é um dos exoplanetas mais distantes da fronteira. É muito semelhante à Terra, mas tem sua própria biosfera única. Após muitos longos anos de exploração e monitoramento, uma estação de postagem avançada foi construída no planeta. Segundo a prática estabelecida, deveria adaptar o DNA dos organismos terrestres ao ecossistema local por meio de mutações persistentes. Foi comprovado que esse processo funcionou várias vezes. Portanto, um serviço contínuo de correio para a colônia nunca foi estabelecido.
                            </p>
                            <p>
                                Você é a tripulação da nave espacial colonial Vega, que deve percorrer distâncias inacreditáveis da Terra para substituir os colonos que estão estacionados na fronteira há vários anos.
                            </p>
                        </div>
                        <div class="c-game-chapter__actions">
                            <a href="#" class="c-button">Reserva a tua experiência</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="c-section" id="section-game-gallery">
            <div class="swiper js-swiper-gallery">
                <div class="swiper__title">
                    <span class="swiper__title__value">JOGABILIDADE</span>
                </div>
                <div class="swiper-wrapper">
                    <article class="swiper-slide">
                        <img src="{{asset('/media/game-1-gallery-1.jpg')}}"/>
                    </article>
                    <article class="swiper-slide">
                        <img src="{{asset('/media/game-1-gallery-2.jpg')}}"/>
                    </article>
                </div><!---/swiper-wrapper-->
                <button class="swiper-button-prev js-swiper-gallery-prev"></button>
                <button class="swiper-button-next js-swiper-gallery-next"></button>
            </div><!--/swiper-->
        </section>


@endsection
