<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SH HOTEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,400;0,500;0,700;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<style>
  *{
        font-family: "Poppins", sans-serif;
    }
    .h-front{
        font-family: "Merienda", cursive;

    }
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
body { font-family: Arial, sans-serif; }
        .swiper { width: 100%; height: 400px; }
        .swiper-slide img { width: 100%; height: 100%; object-fit: cover; }
        .swiper-slide { transition: opacity 1s ease-in-out; opacity: 0; }
        .swiper-slide-active { opacity: 1; }
</style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-ligt bg-white  px-lg-3 py-lg-2 shadow-sm  sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-blod fs-3 h-front" href="index.php">SH HOTEL</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">rooms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Facilities</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Contact us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">About</a>
            </li>
            
            </ul>  
            <div class="d-flex" role="search">
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2 " data-bs-toggle="modal" data-bs-target="#loginModal">
    Login
    </button>
    <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#RegisterModal">
    Register
    </button>
                </div>
                </div>
            </div>
            </nav>

        <!-- login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <from >
    <div class="modal-header">
        <h5 class="model-title d-flex align-items-center">
        <i class="bi bi-person-circle fs-3 me-2"></i> User login
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <div class="mb-3">
                <label  class="form-label">Email address</label>
                <input type="email" class="form-control shadow-none">
            </div>
            <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="Password" class="form-control shadow-none">
            </div>
          <div class= "d-flex align-items-center justify-content-between mb-2 "> 
            <button type="submit class="btn btn-dark shadow-none >Login</button>
            <a href="javascript: vod(0)" class="text-secondary text-decoration-none"> Forgot Password ? </a>
          </div>
        </div>
    </from>
    </div>
  </div>
</div>

  <!-- register  Modal -->
<div class="modal fade" id="RegisterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <from >
    <div class="modal-header">
        <h5 class="model-title d-flex align-items-center">
        <i class="bi bi-person-lines-fill  fs-3 me-2"></i> User Registeration
        </h5> 
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="d-flex justify-content-center">
    <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base text-center">
        Note: your details must match with ID (Passport, driving license, etc.) that will be required during check-in.
    </span>
</div>
       <div class="container-fluid">
        <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                <label  class="form-label">Name</label>
                <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0">
                <label  class="form-label">Email address</label>
                <input type="email" class="form-control shadow-none">
                </div>

                <div class="col-md-6 ps-0 mb-3">
                <label  class="form-label">Phone Number</label>
                <input type="Number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0">
                <label  class="form-label">Picture</label>
                <input type="file" class="form-control shadow-none">
                </div>
                <div class="col-md-12 p-0">
                <label  class="form-label">Address</label>
                <textarea class="form-control shaow-none" rows="1"></textarea>
                </div> 

                <div class="col-md-6 ps-0 mb-3">
                <label  class="form-label">pincode</label>
                <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0">
                <label  class="form-label">date of birth</label>
                <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                <label  class="form-label">Password</label>
                <input type="Password" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0">
                <label  class="form-label">Comfirm Password</label>
                <input type="Password" class="form-control shadow-none">
                </div>      
        </div>
       </div>
       <div class="text-center my-1">
                <button type="submit" class="btn btn-dark shadow-none" >REGISTER</button>
           </div>
        </div>
    </from>
    </div>
  </div>
</div>

<!-- //carousel -->

<div class="container-fluid px-lg-4 mt-4">
<div class="swiper swiper-container">
        <div class="swiper-wrapper">
        
        <div class="swiper-slide">
  <img src="https://cdn.pixabay.com/photo/2022/01/08/08/07/home-6923504_1280.jpg">
</div>
<div class="swiper-slide">
  <img src="https://cdn.pixabay.com/photo/2018/01/18/15/32/apartment-3090517_1280.jpg" alt="User Booking a Hotel Online">
</div>
<div class="swiper-slide">
  <img src="https://cdn.pixabay.com/photo/2019/02/22/13/22/living-room-4013531_1280.jpg" alt="Hotel Reservation Form on Laptop">
</div>
<div class="swiper-slide">
  <img src="https://cdn.pixabay.com/photo/2019/03/05/22/58/living-room-4037295_1280.jpg" alt="Mobile Hotel Booking App Interface">
</div>
<div class="swiper-slide">
  <img src="https://cdn.pixabay.com/photo/2014/08/11/21/39/wall-416060_1280.jpg" alt="Hotel Booking Website on Desktop">
</div>

    </div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>   
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false
        },
      
    });
</script>


</body>
</html>