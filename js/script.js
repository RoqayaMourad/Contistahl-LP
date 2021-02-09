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

// $('.cta-btn').on("click",function(){
//   $(window).scrollTop(0);
// });


if (window.innerWidth > 767.98) {       
  $("#headerSection").css({"min-height":window.innerHeight - $("#topNav").height() + "px"});
  $("#headerSection>div").css({"min-height":window.innerHeight - $("#topNav").height() + "px"});
  $("#headerSection>div>div").css({"min-height":window.innerHeight - $("#topNav").height() + "px"});
}else{
  $("#headerSection").css({"min-height":"unset"});
  $("#headerSection>div").css({"min-height":"unset"});
  $("#headerSection>div>div").css({"min-height":"unset"});
}

$(window).on('resize once onload change', function(){
  if (window.innerWidth > 767.98) {       
      $("#headerSection").css({"min-height":window.innerHeight - $("#topNav").height() + "px"});
      $("#headerSection>div").css({"min-height":window.innerHeight - $("#topNav").height() + "px"});
      $("#headerSection>div>div").css({"min-height":window.innerHeight - $("#topNav").height() + "px"});
  }else{
      $("#headerSection").css({"min-height":"unset"});
      $("#headerSection>div").css({"min-height":"unset"});
      $("#headerSection>div>div").css({"min-height":"unset"});
  }
  
});