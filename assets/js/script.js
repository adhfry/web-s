const sidebar = document.getElementById("sidebar");
const menuToggle = document.getElementById("menu-toggle");
const closeButton = document.getElementById("close-btn");
const bear = document.getElementById("bear");

closeButton.addEventListener("click", function (event) {
  // Hentikan event bubbling untuk mencegah sidebar langsung menutup saat ikon menu diklik
  event.stopPropagation();
  sidebar.classList.toggle("open");
  bear.style.display = "none";
});

menuToggle.addEventListener("click", function (event) {
  // Hentikan event bubbling untuk mencegah sidebar langsung menutup saat ikon menu diklik
  event.stopPropagation();
  sidebar.classList.toggle("open");
  bear.style.display = "block";
});

// Event listener untuk menutup sidebar ketika mengklik di luar sidebar
window.addEventListener("click", function (event) {
  if (
    sidebar.classList.contains("open") &&
    !sidebar.contains(event.target) &&
    event.target !== menuToggle
  ) {
    sidebar.classList.remove("open");
    bear.style.display = "none";
  }
});
