<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script type="text/javascript" src="{{ url('js/homepage.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
    
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });
  </script>

  <style>
  body, html, .main {
      height: 100%; 
  }
  section {
      min-height: 100%;
  }
  </style>
  <title>ReShoes</title>
</head>

<body>

  <div class="topnav">
    <link href="{{ url('css/homepage.css') }}" rel="stylesheet" type="text/css" />
      <a href="#home">Home</a>
      <a href="#services">Services</a>
      <a href="#price">Price</a>
      <a href="#testimoni">Testimonials</a>
      <a href="#about">About Us</a>
      <a href="/home" style="float:right;">Dashboard</a> 
  </div>
  

<div class="hero-image" id="home">
      <div class="hero-text">
        <h1>ReShoes</h1>
        <p>Clean Your Shoes</p>
      </div>
</div>
    
      <!-- Service -->
      <h1 style="text-align: center" class="text" id="services"></h1><br><br>
      <div class="main">
          <h1 style="text-align: center; background-color: #333;margin-bottom: 0px;color:white;" class="text">SERVICES</h1>
         <div class="row">
          <div class="column" style="border: 2px solid;">
            <img src="../css/img/cupu0.jpg" alt="Penyemiran" style="width:100%;">
            <br>
           <h3 style="text-align: center;">Penyemiran</h3>
              <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                Salah satu proses yang anda dapat adalah penyemiran. Yaitu, sepatu anda akan disemir jika setelah dilakukan proses pencucian dan pengeriman terhadap sepatu. Proses ini termasuk tahap final sebelum sepatu siap diantar. <br>
                <br><br><br>
                *Optional
              </p>
          </div>
          <div class="column" style="border: 2px solid">
            <img src="../css/img/cupu2.jpg" alt="Penyikatan" style="width:100%">
            <h3 style="text-align: center">Penyikatan</h3>
            <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                Proses yang pasti anda dapatkan adalah penyikatan secara bersih merata dan tentunya sepatu disikat dengan metode khusus agar kondisi sepatu tetap terjaga dan tidak rusak pada saat disikat. <br>
                <br>
              </p>
          </div>
          <div class="column" style="border: 2px solid">
            <img src="../css/img/cupu3.jpg" alt="Bersih" style="width:100%">
            <h3 style="text-align: center">Siap Antar</h3>
            <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                Setelah semua proses selesai, selanjutnya adalah proses packing sepatu untuk diantarkan kembali kepada customer. pastinya sepatu yang diantarkan sudah dalam keadaan yang bersih dan wangi. <br>
          </div>
      </div>
     </div>

     <!-- Price List -->
     <div class="harga" id="price">
     <br><br>
     <h1 style="text-align: center; background-color: #333;margin-bottom: 0px;color:white" class="text" >PRICE</h1>
     <img src="../css/img/cc.jpg" alt="Bersih" style="width:100%">
     </div> <br><br><br><br><br><br>

    <!-- Testimoni -->
    <!-- Slideshow container -->
    <div id="testimoni"><br></div>
    <div  style="margin-bottom: 0px;">
    <div class="slideshow-container"><br>
    <h1 style="text-align: center; background-color: #333;margin-bottom: 0px;color:white;" class="text">TESTIMONIALS</h1>
    <br><br><br><br>
    <!-- Full-width slides/quotes -->
    <div class="mySlides">
      <q style="font-size:30px;color:white">Bagus banget pelayanannya ramah, cepat!</q>
      <p class="author" style="font-size:30px;">- Budi</p>
    </div>

    <div class="mySlides">
      <q style="font-size:30px;color:white">Gak nyesel nyuci disini sepatu jadi bersih lagi!</q>
      <p class="author" style="font-size:30px;">- Rahma</p>
    </div>

    <div class="mySlides">
      <q style="font-size:30px;color:white">Udah ke 2 kalinya tetep konsisten ResShoes ini, ga ada kurangnya sama sekali. Recomended banget </q>
      <p class="author" style="font-size:30px;">- Ragil</p>
    </div>
    <br><br><br>
    <!-- Next/prev buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- Dots/bullets/indicators -->
    <div class="dot-container">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
    </div><br><br><br>
    <script>
          var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1} 
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none"; 
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
        slides[slideIndex-1].style.display = "block"; 
        dots[slideIndex-1].className += " active";
      }
    </script>

    <div style="margin-top: 0px;" id="about">
      <img src="../css/img/rs.jpg" style="float:left; widht:600px;height:600px;"><br><br><br>
      <h1 style="float:center">ABOUT US</h1>
      <p style="font-size:25px;">
        ReShoes <br>
        Jl.Keputih Tegal Sukolio Regency <br>
        Phone: +628111111111 <br>
        Email: ReShoes@mail.com <br><br>
        kami akan selalu berusaha untuk memberikan pelayanan serta perawatan yang maksimal untuk sepatumu. jadi, jangan ragu untuk mempercayakan sepatu kesayanganmu kepada kami. kami berpengalaman, kami bisa memberikan solusi terbaik untuk sepatumu.</p>
    </div>
</body>
</html>