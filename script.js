jQuery(document).ready(function ($) {
  const navbar_height = $(".navbar").outerHeight();

  $("body").css("margin-top", navbar_height);

  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    breakpoints: {
      576: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var citacoes_swiper = new Swiper(".citacoesSwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".citacoesSwiper .swiper-button-next",
      prevEl: ".citacoesSwiper .swiper-button-prev",
    },
  });

  const toastLiveExample = document.getElementById("liveToast");
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);

  $(".link-btn").click(function () {
    var text = $(this).data("link");
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val(text).select();
    document.execCommand("copy");
    $temp.remove();

    toastBootstrap.show();
  });
});

