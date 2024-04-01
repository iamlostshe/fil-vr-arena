@extends('layouts.app')
@section('page')
    <main class="c-main">

        <section class="c-section" id="section-games-list">
            <div class="c-layout">
                <div class="c-section__title">Jogos</div>
            </div>
            <div class="c-game__list">


                <article class="c-game-item">
                    <div class="c-game-item__meta">

                        <div class="c-layout">

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
                                <a href="https://www.youtube.com/watch?v=no4D4xJdxYQ&t=3s" data-fancybox="" class="c-button c-button--readmore">Ver trailer</a>
                            </div>

                        </div>

                    </div>
                    <div class="c-game-item__media">
                        <img src="{{asset('/media/game-kernel-confrontation.jpg')}}" alt=""/>
                    </div>
                </article>


                <article class="c-game-item">
                    <div class="c-game-item__meta">

                        <div class="c-layout">

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
                                <a href="https://www.youtube.com/watch?v=no4D4xJdxYQ&t=3s" data-fancybox="" class="c-button c-button--readmore">Ver trailer</a>
                            </div>

                        </div>

                    </div>
                    <div class="c-game-item__media">
                        <img src="{{asset('/media/game-colony-color-red.jpg')}}" alt=""/>
                    </div>
                </article>


                <article class="c-game-item">

                    <div class="c-game-item__meta">

                        <div class="c-layout">

                            <div class="c-game-item__title">
                                Shmooter
                            </div>
                            <ul class="c-game-item__info">
                                <li><span>Género:</span> PvP</li>
                                <li><span>Sessão:</span> 60 min</li>
                                <li><span>Jogadores:</span> 2+ <small>(Recomendado)</small></li>
                                <li><span>Idade:</span> 8+</li>
                            </ul>
                            <div class="c-game-item__text">
                                <p>
                                    Sonhas em tornar-te um herói de desenho animado que corre com uma arma em punho? Então o mundo cartoonesco de Shmooter, onde não há lei, espera por ti!
                                </p>
                                <p>
                                    Dispara contra robôs diante de uma paisagem urbana fantástica, move-te pela base através de portais à procura de armas e inimigos para matar e dança com um escudo como se ninguém estivesse a apontar as armas para ti!
                                </p>
                                <p>
                                    Destrói os teus oponentes no modo ""jogador contra jogador"" ou no modo ""equipa contra equipa"".
                                </p>
                            </div>
                            <div class="c-game-item__actions">
                                <a href="#" class="c-button">Reserva a tua experiência</a>
                                <a href="{{route('game')}}" class="c-button c-button--readmore">Mais informações</a>
                                <a href="https://www.youtube.com/watch?v=no4D4xJdxYQ&t=3s" data-fancybox="" class="c-button c-button--readmore">Ver trailer</a>
                            </div>

                        </div>

                    </div>
                    <div class="c-game-item__media">
                        <img src="{{asset('/media/game-shmooter.jpg')}}" alt=""/>
                    </div>
                </article>

            </div><!--/c-game__list-->
        </section>

    </main>
@endsection
