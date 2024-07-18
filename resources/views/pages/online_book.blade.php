@extends('layouts.app')
<section class="c-section" id="section-online-booking">
    <div class="c-layout">
        <div id="resova-wrapper"></div>
    </div>
</section>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://vrarena.resova.co.uk/widget";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'resova-pi'));
</script>
