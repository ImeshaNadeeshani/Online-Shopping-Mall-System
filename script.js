//countdown

var date = new Date("jully 01, 2023 00:00:00").getTime();
    
var countdown = setInterval(function() {

  var current = new Date().getTime();
  
  var dist = date - current;
  
  var day = Math.floor(dist / (1000 * 60 * 60 * 24));
  var hour = Math.floor((dist % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minute = Math.floor((dist % (1000 * 60 * 60)) / (1000 * 60));
  var second = Math.floor((dist % (1000 * 60)) / 1000);
  
  document.getElementById("countdown").innerHTML = day + "d " + hour + "h " + minute + "m " + second + "s ";
  
  if (dist < 0) {
    clearInterval(countdown);
    document.getElementById("countdown").innerHTML = "Offer ended!";
  }
}, 1000);

//gallery

function gallery(imgs) {

  var expandImg = document.getElementById("expandedImg");

  expandImg.src = imgs.src;

  expandImg.parentElement.style.display = "block";

}

// searchbar

let sbtn = document.getElementById("searchbtn");

sbtn.onclick = function() {
  let sbar = document.getElementById("searchbar");
  let input = sbar.value.toLowerCase();

  if (input === "tshirt" || input === "shirt") {

    window.location = "product.html";
  } 

  else if (input === "earbud" || input === "earphone") {

    window.location = "product.html";
  } 

  else if (input === "shoes" || input === "nike") {

    window.location = "product.html";
  } 

  else if (input === "watch" || input === "cassio") {

    window.location = "product.html";
  } 

  else {

    alert("Oops! No result");
    // window.location.href = "home.php";
  }
};
