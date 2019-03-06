
<div>
  <img class="mySlides w3-animate-top" src="../../content/images/products/slide1.png" class="img-responsive .img-fluid" style="max-width: 100%;height: auto;">
  <img class="mySlides w3-animate-top" src="../../content/images/products/slide2.png" class="img-responsive .img-fluid" style="max-width: 100%;height: auto;">

</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500);    
}
</script>
