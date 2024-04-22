<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel ="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="About.css">
</head>

 <body>
   <!-- Navbar -->
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
                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/home')); ?>" >Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/Aboutme')); ?>">About me</a></li>
                <li class="nav-item"><a class="nav-link"href="<?php echo e(url('/Example')); ?>">Example</a></li>
                <li class="nav-item"><a class="nav-link"  href="<?php echo e(url('/Contactme')); ?>">Contact me</a></li>
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
      <h1 class="display-5 fw-bold">.C-nau</h1>
      <h3 class="fw-normal text-muted mb-2">Build anything you want with This Web</h3>
    </div>
    <div class="product-device d-none d-md-block"></div>
    <div class="product-device product-device-2 d-none d-md-block"></div>
  </div>
  

     <!-- Slide -->
  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

     <!-- Leanguage -->
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-4">
            <h3>C</h3>
            <p>
              C is a procedural programming language. It was initially developed by Dennis Ritchie as a system programming language to write operating systems. C is a general-purpose programming language that is extremely popular, simple, and flexible to use. It is a structured programming language that is machine-independent and extensively used to write various applications, operating systems like Windows, and many other complex programs2.
            </p>
          </div>
          <div class="col-sm-4">
            <h3>Python</h3>
            <p>
              Python is an interpreted, object-oriented, high-level programming language with dynamic semantics. Its high-level built in data structures, combined with dynamic typing and dynamic binding, make it very attractive for Rapid Application Development, as well as for use as a scripting or glue language to connect existing components together. 
            </p>
         
          </div>
          <div class="col-sm-4">
            <h3>C++</h3>  
            <p>
              C++ is a cross-platform programming language that can be used to create high-performance applications. It was developed by Bjarne Stroustrup as an extension to the C language. C++ is regarded as a middle-level language, as it comprises a combination of both high-level and low-level language features. It is often viewed as a superset of C. C++ gives programmers a high level of control over system resources and memory.
            </p>      
            
          </div>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-4">
          <h3>C#</h3>
           <p>
            is a programming language by Microsoft. C# combines the computational power of C++ and the ease of Visual Basic, Microsoft’s event-driven programming language and environment. C# gets its foundation from C++, has features similar to Java and applications across many areas in software development. There’s a high demand for C# developers in the job market.
           </p>
          </div>
          <div class="col-sm-4">
            <h3>html</h3>
            <p>
              is a form of programming code used to instruct a browser to create the structure for individual web pages on a website. This markup language is a fundamental component of how billions of people perceive and consume pages on the internet. HTML is responsible for things like text representation, defining visual format, providing search engines with page context and designating sections of a page.
            </p>
 
          </div>
          <div class="col-sm-4">
            <h3>Java</h3>   
            <p>Java is a widely-used, high-level programming language known for its platform independence, versatility, and robustness. Developed by Sun Microsystems (now owned by Oracle Corporation) in the mid-1990s, Java was designed with the principle of "write once, run anywhere" (WORA), meaning that Java programs can run on any platform that has a Java Virtual Machine (JVM) installed, without needing to be recompiled. This platform independence is achieved through Java's bytecode, which is an intermediate representation of the program that can be executed on any device with a JVM.</p>     
          
          </div>
        </div>
      </div>
      <hr class="featurette-divider">
    <br/>
      <div class="container marketing" >
        <!-- Aboutt us -->
        <!-- Three columns of text below the carousel -->
       <div class="row">
          <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?php echo e(asset('picture/OIP.jpg')); ?>" alt="Your Image" role="img" aria-label="Placeholder"><title>Placeholder</title>
            <br/>
            <br/>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?php echo e(asset('picture/Java.jpg')); ?>" alt="Your Image" role="img" aria-label="Placeholder">
            <br/>
            <br/>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?php echo e(asset('picture/OIP.jpeg')); ?>" alt="Your Image" role="img" aria-label="Placeholder">
           <br/>
           <br/>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    
        <!-- START THE FEATURETTES -->
      
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">W3Schools <span class="text-body-secondary"></span></h2>
            <p class="lead">W3Schools is a popular online learning resource for web development. They offer tutorials, references, and code examples for various web programming languages, including HTML, CSS, JavaScript, SQL, PHP, Python, and more. W3Schools has a variety of materials designed for different levels of experience, ranging from beginners to advanced levels.

            One of the key features of W3Schools is their interactive tutorials, which allow users to directly try out code in their browser and see the results in real-time. This is highly beneficial for understanding concepts and practicing programming skills.
              
            Additionally, W3Schools provides comprehensive references for various HTML elements, CSS properties, and JavaScript functions, making it easy for users to quickly look up needed information.
              
           </p>
          </div>
          <div class="col-md-5">
           <a href="https://www.w3schools.com/"><img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?php echo e(asset('picture/w3schools.png')); ?>" alt="Placeholder: 500x500"></a> 
          </div>
        </div>
        
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Bootstrap. <span class="text-body-secondary"></span></h2>
            <p class="lead">
              Bootstrap is an open-source framework popularly used for responsive web development and user interface (UI) design. Developed by Twitter, Bootstrap provides a set of ready-to-use tools and components such as grid layout, navigation, buttons, forms, and more, enabling developers to quickly build attractive and responsive websites with a modern and consistent look. Bootstrap is based on HTML, CSS, and JavaScript, designed to facilitate web development by providing pre-styled components and consistent styles across the website.
              
              One of Bootstrap's key features is its responsive grid system, allowing developers to easily create layouts that adapt to various devices and screen sizes. Bootstrap also comes with various ready-to-use UI components like buttons, icons, cards, navigation, and more, which can be easily customized and combined to build appealing interfaces.
              
              Furthermore, Bootstrap features comprehensive and developer-friendly documentation, as well as a variety of templates and themes available to expedite the development process. It is regularly updated with ongoing enhancements and functionality improvements.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <a href="https://getbootstrap.com/"><img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" src="<?php echo e(asset('picture/bootstrap-logo.png')); ?>" alt="Placeholder: 500x500"></a>
          </div>
          
        </div>
    
        <hr class="featurette-divider">
    
            
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">laravel <span class="text-body-secondary"></span></h2>
            <p class="lead">
            Laravel is a free and open-source PHP- based web framework for building high-end web applications.[3] It was created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern and based on Symfony. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar.[
           </p>
          </div>
          <div class="col-md-5">
           <a href="https://www.w3schools.com/"><img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?php echo e(asset('picture/laravel.jpeg')); ?>" alt="Placeholder: 500x500"></a> 
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <!-- /END THE FEATURETTES -->
    
      </div>
      <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Form submission handling
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();

            // Simulate form submission (replace this with actual form submission logic)
            alert('Form submitted!');
        });
    </script>
        <footer>
        <p>&copy; 2024 My Portfolio</p>
    </footer>
</body>
</html><?php /**PATH C:\laravel-porto\laravel\resources\views/Dashbor/home.blade.php ENDPATH**/ ?>