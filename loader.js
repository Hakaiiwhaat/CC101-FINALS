const fadeEffect = setInterval(() => {
  // we check it, and if so, set opacity to 1
  if (!loader.style.opacity) {
    loader.style.opacity = 1;
  }
  if (loader.style.opacity > 0) {
    loader.style.opacity -= 0.1;
  } else {
    clearInterval(fadeEffect);
  }
}, 350);

window.addEventListener("load", fadeEffect);
