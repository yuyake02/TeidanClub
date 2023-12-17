@extends('layouts/app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/user/home/home.css') }}">

    <div id="pickup">
        <div class="pickup-container">
            <div class="background-title">
                <p><span>鼎談</span></p>
                <p><span>倶楽部</span></p>
            </div>
            <div class="pickup-content">
                <ul>
                    <li><a href="#"><img src="images/vol.000.jpg"><br>vol.000【ノルウェイの森】</a></li>
                    <li><a href="#"><img src="images/vol.001.jpg"><br>vol.001【風の歌を聴け】</a></li>
                    <li><a href="#"><img src="images/vol.002.jpg"><br>vol.002【1973年のピンボール】</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="new-book">
        <div class="new-book-container">
            <div class="new-book-title">
                <p style="margin-bottom:60px;">NEW</p>
                <p>BOOK</p>
            </div>
            <div class="new-book-content">
                <img src="images/vol.003.jpg">
                <img src="images/NewBook-Rectangle.png">
            </div>
        </div>
    </div>
    <div id="back-number">
        <h2>Back Number</h2>
        <div class="back-number-container">
            <div class="back-number-content">
                <ul>
                    <li><a href="#"><img src="images/vol.002.jpg"><br>vol.000<br>【1973年のピンボール】<br>2023.10.10</a></li>
                    <li><a href="#"><img src="images/vol.002.jpg"><br>vol.000<br>【1973年のピンボール】<br>2023.10.10</a></li>
                    <li><a href="#"><img src="images/vol.002.jpg"><br>vol.000<br>【1973年のピンボール】<br>2023.10.10</a></li>
                    <li><a href="#"><img src="images/vol.002.jpg"><br>vol.000<br>【1973年のピンボール】<br>2023.10.10</a></li>
                </ul>
            </div>
        </div>
        <div class="read-more-container">
            <p class="read-more"><a href="{{ route('articles') }}">Read more...</a></p>
            <p class="allow"><a href="{{ route('articles') }}">→</a></p>
        </div>
    </div>
    <div id="artists">
        <h2>Artists</h2>
        <div class="artists-container">
            <div class="artists-content">
                <ul>
                    <li><a href="#"><img src="images/artists.png"><br>Name<br>Illustrator</a></li>
                    <li><a href="#"><img src="images/artists.png"><br>Name<br>Illustrator</a></li>
                    <li><a href="#"><img src="images/artists.png"><br>Name<br>Illustrator</a></li>
                    <li><a href="#"><img src="images/artists.png"><br>Name<br>Illustrator</a></li>
                </ul>
            </div>
        </div>
        <div class="read-more-container">
            <p class="read-more"><a href="{{ route('artists') }}">Read more...</a></p>
            <p class="allow"><a href="{{ route('artists') }}">→</a></p>
        </div>
    </div>
@endsection
