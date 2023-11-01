<?php
include 'include/header.php';
include 'include/navbar.php';
?>

<!-- <div class="container py-2">
    <div class="row">
        <div class="col-12  text-xl-start text-lg-start text-center">
            <div class="mx-auto">
                <a href="#About" class="mx-1 header">About</a>
                <a href="#Gallery" class="mx-1 header">Gallery</a>
                <a href="#Location & Hours" class="mx-1 header">Location & Hours</a>   
                <a href="#Menu" class="mx-1 header">Menu</a>
            </div>
        </div>
    </div>
</div> -->

<div class="bg-white">
    <div class="container py-2">
        <div class="row">
            <div class="col-12  text-xl-start text-lg-start text-center">

                <div class="mx-auto">
                <ul class="nav nav-pills">

                    <li class="nav-item">
                        <a href="#About1" class="nav-link mx-1 header">About</a>
                    </li>

                    <li class="mav-item">
                        <a href="#Gallery" class="nav-link mx-1 header">Gallery</a>
                    </li>

                    <li class="mav-item">
                    <a href="#LocationHours" class="nav-link mx-1 header">Location & Hours</a>
                    </li>
                    
                    <li class="mav-item">
                        <a href="#Menu" class="nav-link mx-1 header">Menu</a>
                    </li>
                </ul>

                </div>
            </div>
        </div>
    </div>
</div>



</div>


<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">


    <!-- About -->
    <div class="container py-5">
        <div class="row d-flex align-items-center" id="About1">

            <div class="col-xl-6 col-lg-6 col-12 d-xl-none d-lg-none d-block">
                <img src="img/Untitled-1.jpg" alt="" class="img-fluid">
            </div>

            <div class="col-xl-6 col-lg-6 col-12 py-md-5 green">
                <h1>Floret</h1><br>
                <h6>Fresh, local, vibrant vegetarian fare to fuel your journey ahead.</h6><br>
                <p>Located in Concourse A, nearby gate A1, Floret offers a tranquil and relaxing dining experience like no other at Sea-Tac Airport. Large conservatory windows fill the space with natural light and allow guests to view tarmac activity while drinking and dining. A quick service counter provides the opportunity for anyone to grab a quick drink and snack on their way, with snacks, gifts, and products from all over the Pacific Northwest.</p>
                <br>
                <p>Floret offers some Cafe Flora classics along with airport-exclusive specials. Embodying Cafe Flora’s philosophy of seasonal, local cuisine, Floret is a big open space and a breath of fresh air in the bustling airport. Take a moment to enjoy delicious vegetarian cuisine during your travels at the sit-down restaurant or grab-and-go counter.</p>
            </div>

            <div class="col-xl-6 col-lg-6 col-12 d-xl-block d-lg-block d-none">
                <img src="img/Untitled-1.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- Gallery -->
    <div style="background-color:#366554">
        <div class="container py-5" id="Gallery">
            <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

            <div class="carousel-item active">
            <img src="img/Untitled-2.jpg" class="img-fluid">
            <div class="carousel-caption d-none d-md-block">
            </div>
            </div>

            <div class="carousel-item">
            <img src="img/Untitled-3.jpg" class="img-fluid">
            <div class="carousel-caption d-none d-md-block">
            </div>
            </div>

            <div class="carousel-item">
            <img src="img/Untitled-4.jpg" class="img-fluid">
            <div class="carousel-caption d-none d-md-block">
            </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
            </div>
        </div>
    </div>

    <!-- Location & Hours -->


        <div class="container py-5" id="LocationHours">
            <div class="row d-flex align-items-center">

                <div class="col-xl-6 col-lg-6 col-12">
                    <img src="img/map-fixed.png" alt="" class="img-fluid">
                </div>

                <div class="col-xl-6 col-lg-6 col-12 text-white px-xxl-5 px-xl-5 px-lg-5 py-md-5 py-sm-5">
                    <h2 class="green">Location & Hours</h2><br>
                    <p class="green">Floret is located in the SeaTac Airport, past security, in the A Concourse</p><br>

                    <h5 class="green">HOURS:</h5> <br>
                    <p class="green">GRAB & GO:</p>
                    <p class="green">DAILY: 4:30AM – 8PM</p> <br>
                    
                    <p class="green">DINING ROOM:</p>
                    <p class="green">DAILY: 6AM – 9PM</p>

                </div>

            </div>
        </div>


    <!-- Menus -->
    <div class="container py-5" id="Menu">
        <div class="row py-5 d-flex justify-content-center">
            <div class="col-6 green">
                <div class="text-center">
                    <h5>Menus</h5>
                    <small >Our menus change seasonally and we do our best to update them as much as.</small>
                    <small>possible. Please note that some menu items may have changed.</small><br><br>
                    <a href="">Dinner In Menu</a>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
include 'include/footer.php';
?>