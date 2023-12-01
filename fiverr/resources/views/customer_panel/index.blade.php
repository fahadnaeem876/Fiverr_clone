<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fiverr</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <!-- Google Icons Link -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
</head>
<body>
  <header>
    <nav class="navbar">
      <a href="#" class="logo">
        <img src="images/logo.svg" alt="Fiverr Logo">
      </a>
      <ul class="menu-links">
        <li><a href="#">Fiverr Business</a></li>
        <li><a href="#">Explore</a></li>
        <li class="language-item">
          <a href="#">
            <span class="material-symbols-outlined">language</span>
            English
          </a>
        </li>
        <li><a href="#">Become a Seller</a></li>
        <li><a href="#">Sign In</a></li>
        <li class="join-btn"><a href="#">Join Us</a></li>
        <span id="close-menu-btn" class="material-symbols-outlined">close</span>
      </ul>
      <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
    </nav>
  </header>

  <section class="hero-section"  id="heroSection">
    <div class="content">
      <h1>Find the right freelance service, right away</h1>
      <form action="#" class="search-form">
        <input type="text" placeholder="Search for any service..." required>
        <button class="material-symbols-outlined" type="sumbit">search</button>
      </form>
      <div class="popular-tags">
        Popular:
        <ul class="tags">
          <li><a href="#">Webite Design</a></li>
          <li><a href="#">Logo Design</a></li>
          <li><a href="#">WordPress</a></li>
          <li><a href="#">AI Design</a></li>
        </ul>
      </div>
    </div>
  </section>
  
  <script>
    const header = document.querySelector("header");
    const hamburgerBtn = document.querySelector("#hamburger-btn");
    const closeMenuBtn = document.querySelector("#close-menu-btn");

    // Toggle mobile menu on hamburger button click
    hamburgerBtn.addEventListener("click", () => header.classList.toggle("show-mobile-menu"));

    // Close mobile menu on close button click
    closeMenuBtn.addEventListener("click", () => hamburgerBtn.click());
  </script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>