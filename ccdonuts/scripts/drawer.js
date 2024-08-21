jQuery(function($) {
    $(".drawerButton").on("click", function(e) {
      /*e.preventDefault();*/
      $(this).toggleClass("closeBtn");
      $(".drawerMenu").toggleClass("isOpen");
    });
  
    // Close drawer when clicking outside of it
    $(document).on("click", function(e) {
      if (!$(e.target).closest(".drawerButton, .globalNav").length) {
        $(".drawerButton").removeClass(".closeBtn");
        $(".drawerMenu").removeClass(".isOpen");
      }
    });
  });