@extends('main_page')

@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://www.thoughtco.com/thmb/UpIHdqkLbotQ4Meb0lHXcENjOUI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/stormy-night-over-byron-bay-673747736-5c48ab2a46e0fb0001ef2e87.jpg" class="bd-placeholder-img" style="height: 500px; width:100%;">
            <div class="container">
            <div class="carousel-caption text-left">
                <h1>SLIDE 1</h1>
                <p>Some representative placeholder content for the first slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
            </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://cdn.arcgis.com/sharing/rest/content/items/daf1ead7b4dd43c599b4b3da1b9812f9/resources/L8SnMhhorFymfkSw83QhV.jpeg?w=1200" class="bd-placeholder-img" style="height: 500px; width:100%;">
            <div class="container">
            <div class="carousel-caption">
                <h1>SLIDE 2</h1>
                <p>Some representative placeholder content for the second slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://earthathome.org/wp-content/uploads/2022/09/Loco-Mountain-Crazy-Mountains-Montana-MikeCline-2000px.jpg" class="bd-placeholder-img" style="height: 500px; width:100%;">
            <div class="container">
            <div class="carousel-caption text-right">
                <h1>slide 3</h1>
                <p>Some representative placeholder content for the third slide of this carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </button>
    </div>
    <!-- Home section -->
    <section id="home" class="section" style="display: flex; justify-content: center; align-items: center; height: 80vh; background-color: aqua;">
        <div class="container" style="text-align: center;">
            <h1>TITLE</h1>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Quisquam dolorum, optio debitis expedita quam, excepturi corporis corrupti
                dicta in laboriosam amet eum explicabo distinctio obcaecati, minima unde
                id harum assumenda.Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Quisquam dolorum, optio debitis expedita quam, excepturi corporis corrupti
                dicta in laboriosam amet eum explicabo distinctio obcaecati, minima unde
                id harum assumenda.
            </p>
        </div>
    </section>
@endsection
