<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel ="stylesheet" href="css/bootstrap.css" />
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand d-md-none" href="#">
            <svg class="bi" width="20" height="20"><use xlink:href="#aperture"></use></svg>.C-nau
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasLabel">.C-nau</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav flex-grow-1 justify-content-between">
                <li class="nav-item"><a class="nav-link" href="#"><svg class="bi" width="20" height="20"><use xlink:href="#aperture"></use></svg></a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}" >Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/Aboutme') }}">About me</a></li>
                <li class="nav-item"><a class="nav-link"href="{{ url('/Example') }}">Example</a></li>
                <li class="nav-item"><a class="nav-link"  href="{{ url('/Contactme') }}">Contact me</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><svg class="bi" width="20" height="20"><use xlink:href="#cart"></use></svg></a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
<form class="col-12 col-lg-auto mb-1 mb-lg-0" role="search">
  <i class="bi bi-search"></i>
  <input type="search" class="form-control form-control-sm" placeholder="Search..." aria-label="Search">
</form>
<div class="position-relative overflow-hidden p-2 p-md-3 m-md-2 text-center bg-body-tertiary">
    <div class="col-md-6 p-lg-3 mx-auto my-3">
      <h1 class="display-5 fw-bold">.About me</h1>
      <h3 class="fw-normal text-muted mb-2">Build anything you want with This Web</h3>
    </div>
    <div class="product-device d-none d-md-block"></div>
    <div class="product-device product-device-2 d-none d-md-block"></div>
  </div>
  
  <hr class="featurette-divider"><!--garis pembatas-->

<div class="container marketing" >
    <!-- Aboutt us -->
    <!-- Three columns of text below the carousel -->
  <div class="row">
  <div class="col-lg-4">
    <img class="bd-placeholder-img rounded-circle float-start me-3" width="140" height="140" src="fatanp.jpg" alt="Your Image" role="img" aria-label="Placeholder">
  </div>
   
  <h2 class="fw-normal">This me</h2>
  <p>Hi guys, Allow me to introduce myself, I'm Fathan Fadly Hidayat, born and raised in Lombok Island, West Nusa Tenggara. I'm delighted to join here to share knowledge, experiences, and interests with all of you. One of the things I enjoy the most is playing games, particularly PC games. I find pleasure in exploring the virtual world, challenging myself in epic battles, and honing strategies in games like Valorant. Additionally, I'm also interested in the business world and always on the lookout for new opportunities to learn and grow in this field. Let's get to know each other better and share enjoyable experiences together! I'm excited to interact with all of you.</p>
</div>
  <!-- /.col-lg-4 -->
    <!-- /.col-lg-4 -->
</div><!-- /.row -->

<hr class="featurette-divider">

    <section id="skills" class="bg-light py-5">
      <div class="container">

          <h2 class="text-center mb-4">Skills</h2>
          <div class="row">
              <div class="col-md-4">
                  <h3>Programming Languages</h3>
                  <ul>
                      <li>Java</li>
                      <li>Python</li>
                      <li>JavaScript</li>
                  </ul>
              </div>
              <div class="col-md-4">
                  <h3>Web Development</h3>
                  <ul>
                      <li>HTML</li>
                      <li>CSS</li>
                      <li>Bootstrap</li>
                  </ul>
              </div>
              <div class="col-md-4">
                  <h3>Other Skills</h3>
                  <ul>
                      <li>Database Management</li>
                      <li>Problem Solving</li>
                      <li>Teamwork</li>
                  </ul>
              </div>
          </div>
      </div>
  </section>

  <!-- Portfolio section -->
  <section id="portfolio" class="py-5">
      <div class="container">
          <h2 class="text-center mb-4">Portfolio</h2>
          <div class="row">
              <div class="col-md-4">
                  <div class="card">
                      <img src="mboh.jpeg" class="card-img-top" alt="Project 1">
                      <div class="card-body">
                          <h5 class="card-title">Project 1</h5>
                          <p class="card-text">Description of Project 1</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card">
                      <img src="porto.png" class="card-img-top" alt="Project 2" width="220" height="220">
                      <div class="card-body">
                          <h5 class="card-title">Program kasir</h5>
                          <p class="card-text">program ini saya buat pada waktu semester 1, yang mana program ini saya buat agar dapat mempermudah kasir dalam mendata setiap proses pembelian maupun pemesanan yang sedang berjalan </p>
                      </div>
                  </div>
              </div>
              <!-- Add more projects as needed -->
          </div>
      </div>
  </section>

  <!-- Contact Me section -->
  <section id="contact" class="bg-light py-5">
      <div class="container">
          <h2 class="text-center mb-4">Contact Me</h2>
          <div class="row">
              <div class="col-md-6 mx-auto">
                  <form>
                      <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" class="form-control" id="name" required>
                      </div>
                      <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" id="email" required>
                      </div>
                      <div class="mb-3">
                          <label for="message" class="form-label">Message</label>
                          <textarea class="form-control" id="message" rows="5" required></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
              </div>
          </div>
      </div>
  </section>
  <script>
    // Add JavaScript code here
    
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Form submission
    document.querySelector('form').addEventListener('submit', function (e) {
        e.preventDefault();

        // Perform form submission logic here
        alert('Form submitted!');
    });
</script>


</body>
</html>