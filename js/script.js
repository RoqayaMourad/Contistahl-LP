AOS.init();

$(".form-group input,.form-group textarea").focusin(
  function () {
  $(this).prev("label").addClass("translate");
}), 
$(".form-group input, .form-group textarea").focusout(function () {
  "" == this.value && $(this).prev("label").removeClass("translate");
});

var divisor = document.getElementById("divisor"),
    handle = document.getElementById("handle"),
    slider = document.getElementById("slider");

function moveDivisor() {
  handle.style.left = slider.value+"%";
	divisor.style.width = slider.value+"%";
}

window.onload = function() {
	moveDivisor();
};


$(window).on('resize once onload change', function(){
  $("#headerSection").css({"min-height":window.innerHeight - $("#topNav").height() + "px"})
  $("#headerSection>div").css({"min-height":window.innerHeight - $("#topNav").height() + "px"})
  $("#headerSection>div>div").css({"min-height":window.innerHeight - $("#topNav").height() + "px"})
});