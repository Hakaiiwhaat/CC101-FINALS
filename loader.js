function revealHomePage() {
  const overlay = document.getElementById("overlay");
  const main = document.getElementById("main");
  const sun = document.getElementById("sun");
  const mercury = document.getElementById("mercury");
  const venus = document.getElementById("venus");
  const earth = document.getElementById("earth");
  const mars = document.getElementById("mars");
  const jupiter = document.getElementById("jupiter");
  const saturn = document.getElementById("saturn");
  const saturnShadow = document.getElementById("saturnShadow");
  const uranus = document.getElementById("uranus");
  const neptune = document.getElementById("neptune");

  // Add the 'fade-in' class to the main content
  main.classList.add("fade-in");

  // After the transition, hide the overlay
  setTimeout(() => {
    overlay.style.display = "none";
  }, 150); // Adjust this timing to match your CSS transition duration

  // Activate animations for specific elements
  sun.classList.add("active");
  mercury.classList.add("active");
  venus.classList.add("active");
  earth.classList.add("active");
  moon.classList.add("active");
  mars.classList.add("active");
  jupiter.classList.add("active");
  saturn.classList.add("active");
  saturnShadow.classList.add("active");
  uranus.classList.add("active");
  neptune.classList.add("active");

  const fadeEffect = setInterval(() => {
    // Check if the loader element has no defined opacity
    if (!loader.style.opacity) {
      // If the opacity is not defined, set it to 1
      loader.style.opacity = 1;
    }

    // Check if the opacity is greater than 0
    if (loader.style.opacity > 0) {
      // Decrease the opacity by 0.1 (making it fade out)
      loader.style.opacity -= 0.1;
    } else {
      // If the opacity is 0 or less, clear the interval to stop the fading effect
      clearInterval(fadeEffect);
    }
  }, 350);

  window.addEventListener("load", fadeEffect);
}
