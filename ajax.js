jQuery(document).ready(function ($) {
  var n = 3;
  $(document).on("click", "#btn-more-news", function (event) {
    n += 3;
    $.ajax({
      url: ajaxpagination.ajaxurl,
      type: "post",
      data: {
        action: "load_news",
        num: n,
        s: ajaxpagination.s
      },
      success: function (data) {
        $(".news-container").html(data);
      },
      error: function (request, status, error) {
        console.log(request, status, error);
      },
    });
  });
});
