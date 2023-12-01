document.addEventListener("DOMContentLoaded", function () {
    const heroSection = document.getElementById("heroSection");
  
    // Array of image URLs
    const images = ["images/hero-img.jpg", "images/bac_img.jpg", "images/bac_img1.jpeg"];
    let currentIndex = 0;
  
    // Function to change the background image
    function changeImage() {
      currentIndex = (currentIndex + 1) % images.length;
      heroSection.style.backgroundImage = `url("${images[currentIndex]}")`;
    }
  
    // Change image every 5 seconds (you can adjust the interval)
    setInterval(changeImage, 5000);
  });
  