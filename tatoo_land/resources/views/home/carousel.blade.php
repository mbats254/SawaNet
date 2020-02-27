<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('images/slide.png')">
            <div class="carousel-caption">
                <h1 style="font-size: 42px" class="font-weight-bolder">Welcome to {{ env('APP_NAME') }}</h1>
                <p class="lead">
                    We are an electronic market place for the construction industry
                    that enables clients to access equipment that is not currently in use
                    on lease or hire from the owners
                </p>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/slide.png')">
            <div class="carousel-caption">
                <h1 style="font-size: 42px" class="font-weight-bolder">{{ env('APP_NAME') }}, Who Are We?</h1>
                <p class="lead">
                    <b>Answer:</b> Source high quality building materials at competitive prices.
                </p>
            </div>

        </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
