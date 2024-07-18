@extends('layouts.app')
<div id="resova-wrapper"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://vrarena.resova.co.uk/widget";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'resova-pi'));
</script>
