jQuery(function($) {
  // ドロワーを開閉するトリガー
  $(".menuTrigger").on("click", function(e) {
    e.preventDefault();
    $(this).toggleClass("closeBtn active");
    $(".navigation").toggleClass("isOpen");
  });

  // ドロワー外をクリックしたときにドロワーを閉じる
  $(document).on("click", function(e) {
    if (!$(e.target).closest(".menuTrigger, .navigation").length) {
      $(".menuTrigger").removeClass("closeBtn active");
      $(".navigation").removeClass("isOpen");
    }
  });

  // リンクをクリックしたときにドロワーを閉じる
  $(".navigation a").on("click", function() {
    $(".menuTrigger").removeClass("closeBtn active");
    $(".navigation").removeClass("isOpen");
  });
});
