<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoumik hotel-ROOM</title>
    <?php require('inc/links.php') ?> 

        
</head>
<body class="bg-light" >
<?php require('inc/header.php') ?> 

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center" >our Room</h2>
  <div class="h-line bg-dark"></div>
    
</div>

<div class="container">
  <div class="row">
   <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
   <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow ">
        <div class="container-fluid flex-lg-column align-items-stretch">
          <H4 class="mt-2" >FILTERS</H4>
          <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
          <div class="border bg-light p-3 rounded mb-3">
            <h5 class="mb-3" style="font-size: 18px;" >CHECK AVAILABILITY</h5>
            <label  class="form-label mb-3" >Check-in </label> 	
            <input type="date" class="form-control shadow-none mb-3">
            <label  class="form-label mb-3" >Check-out </label> 	
            <input type="date" class="form-control shadow-none">

          </div>
          <div class="border bg-light p-3 rounded mb-3">
            <h5 class="mb-3" style="font-size: 18px;" >facilities</h5>
            <div class="mb-2">

              <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
              <label  class="form-check-label mb-3" for="f1" >Facilities one </label> 	
            </div>
            <div class="mb-2">

                <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                <label  class="form-check-label mb-3" for="f2" >Facilities two </label> 	
            </div>
            <div class="mb-2">

                <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                <label  class="form-check-label mb-3" for="f3" >Facilities three </label> 	
             </div>
                            
          </div>
          <div class="border bg-light p-3 rounded mb-3">
            <h5 class="mb-3" style="font-size: 18px;" >GUESTS</h5>
            <div class="d-flex">

              <div class="me-3" >
              <label  class="form-label mb-3" >Adults </label> 
              <input type="number" class="form-control shadow-none mb-3">
              </div>
  
              <div>
              <label  class="form-label mb-3" >Children </label> 
              <input type="number" class="form-control shadow-none mb-3">
              </div>
            </div>
            
                            
          </div>

          </div>
        </div>
  </nav>
   </div>

  <div class="col-lg-9 col-md-12 px-4">
  <div class="card mb-4 border-0 shadow" >
      <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 md-lg-0 md-md-0 mb-3">
              <img src="images/rooms/1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
             <h5>Simple Room Namme</h5>
             <div class="features mb-3">
                            <h6 class="mb-3" >Features</h6>
                            <span class="badge bg-light text-dark  text-warp ">
                                2 Rooms
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               1 Bathrooms
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               1 Balcony
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               3 sofa
                              </span>
                        </div>
                        <div class="facilities mb-3">
                            <h6 class="mb-1" >Facilities</h6>
                            <span class="badge bg-light text-dark  text-warp ">
                                  wifi
                                  </span>
                              <span class="badge bg-light text-dark  text-warp ">
                            Televition
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               AC
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               Room Heater
                              </span>

                        </div>
                        <div class="guests">
                        <h6 class="mb-1" >Guests</h6>
                        <span class="badge bg-light text-dark  text-warp ">
                               5 Adults
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                            4 children
                              </span>
                        </div>
            </div>

            <div class="col-md-2 text-center">
              <h6 class="mb-4" >৳2000 per night</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
        </div>
    </div>
</div>
<div class="card mb-4 border-0 shadow" >
      <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 md-lg-0 md-md-0 mb-3">
              <img src="images/rooms/1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
             <h5>Simple Room Namme</h5>
             <div class="features mb-3">
                            <h6 class="mb-3" >Features</h6>
                            <span class="badge bg-light text-dark  text-warp ">
                                2 Rooms
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               1 Bathrooms
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               1 Balcony
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               3 sofa
                              </span>
                        </div>
                        <div class="facilities mb-3">
                            <h6 class="mb-1" >Facilities</h6>
                            <span class="badge bg-light text-dark  text-warp ">
                                  wifi
                                  </span>
                              <span class="badge bg-light text-dark  text-warp ">
                            Televition
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               AC
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               Room Heater
                              </span>

                        </div>
                        <div class="guests">
                        <h6 class="mb-1" >Guests</h6>
                        <span class="badge bg-light text-dark  text-warp ">
                               5 Adults
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                            4 children
                              </span>
                        </div>
            </div>

            <div class="col-md-2 text-center">
              <h6 class="mb-4" >৳2000 per night</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
        </div>
    </div>
</div>
<div class="card mb-4 border-0 shadow" >
      <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 md-lg-0 md-md-0 mb-3">
              <img src="images/rooms/1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
             <h5>Simple Room Namme</h5>
             <div class="features mb-3">
                            <h6 class="mb-3" >Features</h6>
                            <span class="badge bg-light text-dark  text-warp ">
                                2 Rooms
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               1 Bathrooms
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               1 Balcony
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               3 sofa
                              </span>
                        </div>
                        <div class="facilities mb-3">
                            <h6 class="mb-1" >Facilities</h6>
                            <span class="badge bg-light text-dark  text-warp ">
                                  wifi
                                  </span>
                              <span class="badge bg-light text-dark  text-warp ">
                            Televition
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               AC
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               Room Heater
                              </span>

                        </div>
                        <div class="guests">
                        <h6 class="mb-1" >Guests</h6>
                        <span class="badge bg-light text-dark  text-warp ">
                               5 Adults
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                            4 children
                              </span>
                        </div>
            </div>

            <div class="col-md-2 text-center">
              <h6 class="mb-4" >৳2000 per night</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
        </div>
    </div>
</div>

  </div>


  </div>
</div>

<?php require('inc/footer.php');?>

  


<script>

      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop :true,
        autoplay : {
            delay : 3500,
            disableoninteration : false,
        }
      });

      var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
            slidesPerView:1
        },
        640: {
            slidesPerView:1
        },
        768: {
            slidesPerView:2
        },
        1024: {
            slidesPerView:3
        },
      }
    });

     
    </script>
    
</body>
</html>