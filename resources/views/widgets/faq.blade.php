<section class="c-section" id="section-faq">
    <div class="c-layout">
        <div class="c-section__title">
            FAQ
        </div>
        <div class="c-faq__list">
            @foreach($faqs as $faq)
                <article class="c-faq-item js-spoiler-item" id="spoiler-{{$faq->id}}">
                    <div class="c-faq-item__question">
                        <button class="js-spoiler-trigger" data-spoiler="spoiler-{{$faq->id}}">
                            {{$faq->getTitle()}}
                        </button>
                    </div>
                    <div class="c-faq-item__answer">
                        <div class="c-faq-item__content c-format">
                            <p>
                                {!! $faq->getDescription()!!}
                            </p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
