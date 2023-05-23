<?php
    $links = [
    [
        "text" => "characters",
        "url"=> "/characters",
        "current" => false],
    [
        "text" => "comics",
        "url"=> "/",
        "current" => true],
    [
        "text" => "movies",
        "url"=> "/movies",
        "current" => false],
    [
        "text" => "tv",
        "url"=> "/tv",
        "current" => false],
    [
        "text" => "games",
        "url"=> "/games",
        "current" => false],
    [
        "text" => "collectibles",
        "url"=> "/collectibles",
        "current" => false],
    [
        "text" => "videos",
        "url"=> "/videos",
        "current" => false],
    [
        "text" => "fans",
        "url"=> "/fans",
        "current" => false],
    [
        "text" => "news",
        "url"=> "/news",
        "current" => false],
    [
        "text" => "shop",
        "url"=> "/shop",
        "current" => false]
];
?>
<header>
    <nav class="bg-body-tertiary">
        <div class="container-fluid text-center">
            <div id="navbarNav" class=" d-flex">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                <ul class="list-unstyled d-flex">
                    @foreach($links as $link)
                    <li class="nav-item mx-3">
                        <a href="{{$link['url']}}" class="nav-item">{{$link['text']}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>