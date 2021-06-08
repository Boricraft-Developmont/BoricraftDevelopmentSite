 var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("topnavbar").style.top = "0";
  } else {
    document.getElementById("topnavbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}

// <script src='../../dist/core.js'></script>
// new Typewriter('#typewriter', {
//   strings: ['Plug-in\'s', 'Websites', 'Programs'],
//   autoStart: true,
// });