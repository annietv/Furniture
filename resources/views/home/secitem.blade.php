<!-- teachers -->
<style>
/* Tablet and up */

@media screen and (min-width: 768px) {

    .carousel-inner .active,
    .carousel-inner .active+.carousel-item {
        display: block;
    }

    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item {
        -webkit-transition: none;
        transition: none;
    }

    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        position: relative;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item {
        position: absolute;
        top: 0;
        right: -50%;
        z-index: -1;
        display: block;
        visibility: visible;
    }

    /* left or forward direction */
    .active.carousel-item-left+.carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left+.carousel-item {
        position: relative;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }

    /* farthest right hidden item must be abso position for animations */
    .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }

    /* right or prev direction */
    .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right+.carousel-item {
        position: relative;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}

/* Desktop and up */

@media screen and (min-width: 992px) {

    .carousel-inner .active,
    .carousel-inner .active+.carousel-item,
    .carousel-inner .active+.carousel-item+.carousel-item {
        display: block;
    }

    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item,
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item {
        -webkit-transition: none;
        transition: none;
    }

    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        position: relative;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item {
        position: absolute;
        top: 0;
        right: -33.3333%;
        z-index: -1;
        display: block;
        visibility: visible;
    }

    /* left or forward direction */
    .active.carousel-item-left+.carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left+.carousel-item,
    .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item,
    .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item {
        position: relative;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }

    /* farthest right hidden item must be abso position for animations */
    .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }

    /* right or prev direction */
    .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right+.carousel-item,
    .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item,
    .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item {
        position: relative;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
</style>
<!-- /banner-feature -->
<section>
    <div class="container-fluid">
        <?php
    $statements=DB::table('statements')->get();
    ?>
        @foreach($statements as $key)
        <div class="row bg-light mt-4 p-3" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-4">
                <div class="card-body">
                    <h3>Mission</h3>
                    <p>{!!$key->mission!!}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-body">
                    <h3>Vision</h3>
                    <p>{{$key->vision}}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-body">
                    <h3>Core Value</h3>
                    <p>{{$key->coreValue}}</p>
                </div>
            </div>
        </div>
        @endforeach
        <?php
    $abouts=DB::table('abouts')->get();
    ?>
        @foreach($abouts as $row)
        <div class="row mt-4 p-3" data-aos="fade-up" data-aos-duration="3000">
            <div class="col-lg-6">
                <div class="card-body">
                    <img src="{{asset('images/about/'.$row->proimage)}}" alt="" width="100%">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card-body">
                    <h2>{{$row->title}}</h2>
                    <p class="text-justify">{!!$row->aboutdesc!!}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>

<!-- <section class="section" style="background-color:#db0007;">
    <div class=" container">
        <div class="row">
            <div class="col-12 text-center">
                <h6 class="text-white font-secondary mb-0">Click to Join the Advance Modeling</h6>
                <h2 class="section-title text-white">Training In Advannce Medeling</h2>
                <a href="contact.html" class="btn btn-primary">join now</a>
            </div>
        </div>
    </div>
</section> -->
<section class="section">
    <div class=" container-fluid bg-white mt-5">
        <div class="row" data-aos="fade-up" data-aos-duration="3000">
            <div class="col-lg-6">
                <div class="card-body">
                    <img class="card-img-top rounded-0" src="{{ asset('images/in1.jpg')}}" alt="teacher">
                    <a href="teacher-single.html">
                        <h4 class="card-title text-dark text-center">In Stock + Ready to Go: Dining</h4>
                        <p class="text-center">Shop tried + true designs your bedroom needs.</p>
                    </a>
                </div>
            </div>
            <div class=" col-lg-6">
                <div class="card-body">
                    <img class="card-img-top rounded-0" src="{{ asset('images/in1.jpg')}}" alt="teacher">
                    <a href="teacher-single.html">
                        <h4 class="card-title text-dark text-center">In Stock + Ready to Go: Dining</h4>
                        <p class="text-center">Shop tried + true designs your bedroom needs.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
(function($) {
    "use strict";
    // Auto-scroll
    $('#myCarousel').carousel({
        interval: 5000
    });

    // Control buttons
    $('.next').click(function() {
        $('.carousel').carousel('next');
        return false;
    });
    $('.prev').click(function() {
        $('.carousel').carousel('prev');
        return false;
    });

    // On carousel scroll
    $("#myCarousel").on("slide.bs.carousel", function(e) {
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 3;
        var totalItems = $(".carousel-item").length;
        if (idx >= totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide -
                (totalItems - idx);
            for (var i = 0; i < it; i++) {
                // append slides to end 
                if (e.direction == "left") {
                    $(
                        ".carousel-item").eq(i).appendTo(".carousel-inner");
                } else {
                    $(".carousel-item").eq(0).appendTo(".carousel-inner");
                }
            }
        }
    });
})
(jQuery);
</script>