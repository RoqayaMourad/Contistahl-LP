$(".form-group input,.form-group textarea").focusin(
  function () {
  $(this).prev("label").addClass("translate");
}), 
$(".form-group input, .form-group textarea").focusout(function () {
  "" == this.value && $(this).prev("label").removeClass("translate");
});


AOS.init();
