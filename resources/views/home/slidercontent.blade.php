<!-- ======= Hero Section ======= -->
<style>
/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
    width: 100%;
    height: 100vh;
    padding: 0;
    overflow: hidden;
}

#hero .carousel-item {
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: top right;
    background-repeat: no-repeat;
    overflow: hidden;
}

#hero .carousel-item::before {
    content: "";
    background-color: rgba(0, 0, 0, 0.5);
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    overflow: hidden;
}

#hero .carousel-container {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
    overflow: hidden;
    margin-top: 100px;

}

#hero .carousel-content {
    text-align: left;
}

@media (max-width: 992px) {

    #hero,
    #hero .carousel-item {
        height: calc(100vh - 70px);
    }

    #hero .carousel-content.container {
        padding: 0 50px;
    }
}

#hero h2 {
    color: #fff;
    margin-bottom: 30px;
    margin-top: 30px;
    font-size: 50px;
    font-weight: 1200px;
}

#hero p {
    width: 100%;
    -webkit-animation-delay: 0.4s;
    animation-delay: 0.4s;
    color: #fff;
    padding-right: 20px;
}

#hero .carousel-inner .carousel-item {
    transition-property: opacity;
    background-position: center top;
}

#hero .carousel-inner .carousel-item,
#hero .carousel-inner .active.carousel-item-left,
#hero .carousel-inner .active.carousel-item-right {
    opacity: 2;
}

#hero .carousel-inner .active,
#hero .carousel-inner .carousel-item-next.carousel-item-left,
#hero .carousel-inner .carousel-item-prev.carousel-item-right {
    opacity: 3;
    transition: 0.5s;
}

#hero .carousel-inner .carousel-item-next,
#hero .carousel-inner .carousel-item-prev,
#hero .carousel-inner .active.carousel-item-left,
#hero .carousel-inner .active.carousel-item-right {
    left: 0;
    transform: translate3d(0, 0, 0);
}

#hero .carousel-control-prev,
#hero .carousel-control-next {
    width: 10%;
}

#hero .carousel-control-next-icon,
#hero .carousel-control-prev-icon {
    background: none;
    font-size: 48px;
    line-height: 1;
    width: auto;
    height: auto;
}

#hero .carousel-indicators li {
    cursor: pointer;
}

#hero .btn-get-started {
    font-family: "Raleway", sans-serif;
    font-weight: 500;
    font-size: 14px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 12px 32px;
    border-radius: 5px;
    transition: 0.5s;
    line-height: 1;
    margin: 10px;
    color: #fff;
    -webkit-animation-delay: 0.8s;
    animation-delay: 0.8s;
    border: 0;
    background: #5c7;
}

#hero .btn-get-started:hover {
    background: #1c5c93;
}

@media (max-width: 768px) {
    #hero h2 {
        font-size: 28px;
    }
}

@media (min-width: 1024px) {
    #hero p {
        width: 60%;
    }

    #hero .carousel-control-prev,
    #hero .carousel-control-next {
        width: 5%;
    }
}
</style>
<section id="hero">
    <div class="hero-container img-fluid">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <?php
    $site_sliders=DB::table('site_sliders')->inRandomOrder()->get();
    ?>
            @foreach($site_sliders as $key)
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active"
                    style="background-image: url('{{ asset('images/slider/'.$key->proimage)}}');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown col-lg-10"
                                style="color: #FFFFFF;  text-shadow: 3px 5px #000000;">{{$key->title}}
                            </h2>
                            <p class="animate__animated animate__fadeInUp">{!!$key->contents!!}</p>


                        </div>

                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item"
                    style="background-image: url('{{ asset('images/slider/'.$key->proimage)}}');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown"
                                style="text-transform:uppercase; color: #FFFFFF;  text-shadow: 3px 5px #000000;">
                                WE DESIGN COMPLETE SET OF SOFA EXECUTIVE CHAIRS</h2>
                            <p class="animate__animated animate__fadeInUp">Have you bean searching for the best sofa
                                chair for new home? we have got you covered, we design the best. </p>



                        </div>
                    </div>

                </div>


            </div>
            @endforeach
        </div>
    </div>


    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="fa fa-chevron-left" aria-hidden="true"><i class=""></i></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="fa fa-chevron-right" aria-hidden="true"><i class=""></i></span>
        <span class="sr-only">Next</span>
    </a>

    </div>
    </div>
</section><!-- End Hero -->