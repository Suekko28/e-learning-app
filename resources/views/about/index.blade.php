@extends('layout.app')

@section('navbar')

<div class="container mt-5">
    <h4>Tentang Kami</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eveniet rem non qui soluta vel molestias deleniti. Non maxime harum excepturi provident laborum, et eligendi a unde commodi qui officiis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Et delectus atque, libero nisi ratione eaque pariatur beatae officiis sunt neque, nesciunt quibusdam voluptatem at? Exercitationem dolore nulla ipsum veniam magnam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur magnam quia a molestiae perspiciatis deleniti asperiores alias ipsum, aliquam obcaecati amet quos saepe repellat reiciendis itaque sunt voluptatum doloremque odit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi voluptatum est perferendis laudantium vitae esse nisi quasi eum soluta maiores harum minus, qui ut asperiores omnis eligendi rerum suscipit possimus!</p>
</div>

<div class="container text-center">
    <div class="d-flex flex-row mb-3 justify-content-center text-white">
        <div class="d-flex p-2">
          <img src="/bg-jumbo.jpg" alt="" class="img-thumbnail" width="500px" height="500px">
        </div>
        <div class="p-2">
            <img src="/bg-jumbo.jpg" alt="" class="img-thumbnail" width="500px" height="500px">

        </div>
        <div class="p-2">
            <img src="/bg-jumbo.jpg" alt="" class="img-thumbnail" width="500px" height="500px">

        </div>
      </div>
</div>

<section id="footer">
    <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-fluid my-5" style="background-color: #1A205D">

<!-- Footer -->
<footer
        class="text-center text-lg-start text-white"
        style="background-color: #1A205D"
        >
  <!-- Section: Social media -->
  
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5 p-4">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <img src="/SMK.jpeg" alt="" class="img-thumbnail">
              <div class="text-center mt-2">
                <a href="" class="text-white me-4">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="text-white me-4">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="text-white me-4">
                  <i class="fab fa-google"></i>
                </a>
                <a href="" class="text-white me-4">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="text-white me-4">
                  <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="text-white me-4">
                  <i class="fab fa-github"></i>
                </a>
              </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Quick Links</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
            <a href="#!" class="text-white">Beranda</a>
          </p>
          <p>
            <a href="#!" class="text-white">E-Learning</a>
          </p>
          <p>
            <a href="#!" class="text-white">Kegiatan</a>
          </p>
          <p>
            <a href="#!" class="text-white">Berita</a>
          </p>
          <p>
            <a href="#!" class="text-white">Tentang Kami</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Get In Information</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
          <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div
       class="text-center p-3"
       style="background-color: #1A205D"
       >
    © 2023 Copyright
    <a class="text-white" href="https://mdbootstrap.com/"
       >Teknik Komputer & Jaringan SMK2TJ</a
      >
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</div>
</section>

    
@endsection