document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible"); // Ajoute la classe si l'élément entre dans la vue
      } else {
        entry.target.classList.remove("visible"); // Retire la classe si l'élément sort de la vue
      }
    });
  }, { threshold: 0.1 }); // Déclenchement lorsque 20% de l'élément est visible

  document.querySelectorAll(".hidden").forEach((el) => observer.observe(el));
});
