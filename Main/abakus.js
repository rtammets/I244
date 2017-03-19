//Week 5 kodune
    var allBeads = document.getElementsByClassName("bead");
window.onload = function (){
//wait for load


//when bead clicked call fn
    for (var i = 0; i < allBeads.length; i++){
        allBeads[i].onclick = function () {
            moveBead(this);
        }
    }

    function moveBead(bead){
        if (window.getComputedStyle(bead).getPropertyValue("float") == "right"){
            bead.style.cssFloat = "left";//right -> left
        } else {
            bead.style.cssFloat = "right";//left -> right
        }
    }

};