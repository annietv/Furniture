<style>
.slider-wrap {
    width: 419px;
    position: absolute;
    top: 87px;
    left: 40px;
}

.stripViewer .panelContainer .panel ul {
    text-align: left;
    margin: 0 15px 0 30px;
}

.stripViewer {
    position: relative;
    overflow: hidden;
    width: 419px;
    height: 285px;
}

.stripViewer .panelContainer {
    position: relative;
    left: 0;
    top: 0;
}

.stripViewer .panelContainer .panel {
    float: left;
    height: 100%;
    position: relative;
    width: 419px;
}

.stripNavL,
.stripNavR,
.stripNav {
    display: none;
}

.nav-thumb {
    border: 1px solid black;
    margin-right: 5px;
}

#movers-row {
    margin: -43px 0 0 62px;
}

#movers-row div {
    width: 20%;
    float: left;
}

#movers-row div a.cross-link {
    float: right;
}

.photo-meta-data {
    background: url(images/transpBlack.png);
    padding: 10px;
    height: 30px;
    margin-top: -50px;
    position: relative;
    z-index: 9999;
    color: white;
}

.photo-meta-data span {
    font-size: 13px;
}

.cross-link {
    display: block;
    width: 62px;
    margin-top: -14px;
    position: relative;
    padding-top: 15px;
    z-index: 9999;
}

.active-thumb {
    background: transparent url(images/icon-uparrowsmallwhite.png) top center no-repeat;
}
</style>
<div class="slider-wrap">
    <div id="main-photo-slider" class="csw">
        <div class="panelContainer">

            <div class="panel" title="Panel 1">
                <div class="wrapper">
                    <!-- REGULAR IMAGE PANEL -->
                    <img src="images/tempphoto-1.jpg" alt="temp" />
                    <div class="photo-meta-data">
                        Photo Credit: <a href="http://flickr.com/photos/astrolondon/2396265240/">Kaustav
                            Bhattacharya</a><br />
                        <span>"Free Tibet" Protest at the Olympic Torch Rally</span>
                    </div>
                </div>
            </div>
            <div class="panel" title="Panel 2">
                <div class="wrapper">
                    <!-- PANEL CONTENT -->
                </div>
            </div>
            <div class="panel" title="Panel 3">
                <div class="wrapper">
                    <!-- EXAMPLE OF OTHER PANEL POSSIBILITIES -->
                    <img src="{{ asset('images/6.jpg')}}" alt="scotch egg" class="floatLeft" />

                    <h1>How to Cook a Scotch Egg</h1>

                    <ul>
                        <li>6 hard-boiled eggs, well chilled (i try to cook them to just past soft boiled stage, then
                            stick them in the coldest part of the fridge to firm up)</li>
                        <li>1 pound good quality sausage meat (i used ground turkey meat, seasoned with sage, white
                            pepper, salt and a tiny bit of maple syrup)</li>
                        <li>1/2 cup AP flour</li>
                        <li>1-2 eggs, beaten</li>
                        <li>3/4 cup panko-style bread crumbs</li>
                        <li>Vegetable oil for frying</li>
                    </ul>
                </div>
            </div>
            <div class="panel" title="Panel 4">
                <div class="wrapper">
                    <!-- PANEL CONTENT -->
                </div>
            </div>
            <div class="panel" title="Panel 5">
                <div class="wrapper">
                    <!-- PANEL CONTENT -->
                </div>
            </div>
            <div class="panel" title="Panel 6">
                <div class="wrapper">
                    <!-- PANEL CONTENT -->
                </div>
            </div>

        </div>
    </div>

    <!-- TO MAKE THESE THUMBNAILS ACTUALLY WORK, BOTH THE HASH VALUE (#1, ETC.)
          AND THE CLASS="CROSS-LINK" ARE REQUIRED -->

    <a href="#1" class="cross-link active-thumb"><img src="{{ asset('images/6.jpg')}}" class="nav-thumb"
            alt="temp-thumb" /></a>
    <div id="movers-row">
        <div><a href="#2" class="cross-link"><img src="{{ asset('images/4.jpg')}}" class="nav-thumb"
                    alt="temp-thumb" /></a></div>
        <div><a href="#3" class="cross-link"><img src="{{ asset('images/5.jpg')}}" class="nav-thumb"
                    alt="temp-thumb" /></a></div>
        <div><a href="#4" class="cross-link"><img src="{{ asset('images/6.jpg')}}" class="nav-thumb"
                    alt="temp-thumb" /></a></div>
        <div><a href="#5" class="cross-link"><img src="{{ asset('images/3.jpg')}}" class="nav-thumb"
                    alt="temp-thumb" /></a></div>
        <div><a href="#6" class="cross-link"><img src="{{ asset('images/6.jpg')}}" class="nav-thumb"
                    alt="temp-thumb" /></a></div>
    </div>

</div>
<script type="text/javascript" src="{{ asset('js/jquery-1.2.6.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-easing-1.3.pack.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-easing-compatibility.1.2.pack.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/coda-slider.1.1.1.pack.js')}}"></script>

<script type="text/javascript">
$(function() {

    $("#main-photo-slider").codaSlider();

});
</script>