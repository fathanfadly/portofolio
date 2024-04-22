<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
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
    <!-- Content section -->
    <br/>
    <br/>
    <br/>
    <div class="container mt-4">
    <br/>
   
        <h1 class="text-center">Example Page</h1>
        <p class="text-center">This is an example page. You can add your content here.</p>
        <br/>
        <br/>
        <h2>Contoh Kode:</h2>
        <br/>
        <div class="row">
            <div class="col-md-3">
                <h3><a href="https://www.w3schools.com/html/default.asp">HTML</a></h3>
                <pre>&lt;h1&gt;Ini adalah contoh judul&lt;/h1&gt;
&lt;p&gt;Ini adalah contoh paragraf.&lt;/p&gt;</pre>
            </div>
            <div class="col-md-3">
                <h3><a href="https://www.w3schools.com/css/default.asp">CSS</a></h3>
                <pre>body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}</pre>
            </div>
            <div class="col-md-3">
                <h3><a href="https://www.w3schools.com/js/default.asp">JavaScript</a></h3>
                <pre>document.addEventListener('DOMContentLoaded', function() {
    console.log('Document is ready!');
});</pre>
            </div>
            <div class="col-md-3">
                <h3><a href="https://www.w3schools.com/php/default.asp">PHP</a></h3>
                <pre>&lt;?php
echo "Hello, PHP!";
?&gt;</pre>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-3">
                <h3><a href="https://www.w3schools.com/java/default.asp">Java</a></h3>
                <pre>public class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Hello, Java!");
    }
}</pre>
            </div>
            <div class="col-md-3">
                <h3><a href="https://www.w3schools.com/python/default.asp">Python</a></h3>
                <pre>print("Hello, Python!")</pre>
            </div>
            <!-- Add more code examples here -->
        </div>
     
    <!-- Case Study -->
<div class="col-md-6">
    <h2>Case Study:</h2>
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Creating a Simple Task Management System</h5>
            <p class="card-text">In this case study, you will learn how to create a simple application for managing daily tasks. It involves data modeling, user interaction, and data storage.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>
    </div>
 
    <div class="mt-4">
        <h3>Your Answer:</h3>
        <textarea class="form-control" rows="6"></textarea>
    </div>
    <!-- Submit Button -->
    <button class="btn btn-success mt-2">Submit</button>
</div>


    <!-- Your custom JavaScript code here -->
    <script>
        // Your custom JavaScript code here
        // For example:
        console.log('Custom JavaScript is loaded.');
    </script>

    <!-- Bootstrap Bundle with Popper.js and Bootstrap Icons JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <footer>
        <p>&copy; 2024 My Portfolio</p>
    </footer>
</body>

</html>
