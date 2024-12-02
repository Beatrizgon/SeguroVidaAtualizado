$(document).ready(function () {
  $(".toggle-details").click(function () {
    // Alterna entre expandir/recolher a div
    const details = $(this).closest(".card").find(".details");
    const icon = $(this);
    details.slideToggle(300); // Animação de slide
    // Alterna entre os ícones de seta
    icon.html(icon.html() === "&#x25BC;" ? "&#x25B2;" : "&#x25BC;");
  });
});
