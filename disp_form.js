
function afficheForm() {
    var x = document.getElementById("inscrit_enfant");
    var toggler = document.getElementById("inscrit_toggle") ; 
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }