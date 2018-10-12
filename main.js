$(document).ready(function() {
    console.log("ready");
    $("#fadeBox").on(
      "animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",
      function() {
        // $(this).addClass("opaque");
        var elem = document.querySelector('#fadeBox');
        elem.style.display = 'none';
        var elem = document.querySelector('#quoteBox');
        elem.parentNode.removeChild(elem);
      }
  );
});