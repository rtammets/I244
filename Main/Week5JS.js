window.onload = function (){
        //lehe laadimine lõpetatud, siia läheb elementide mõjutamise kood
        var target = document.getElementById("bullseye");


        bullseye.onclick = function(){
            console.log('clicked');
            vajuasPeale(this);


        }

        function vajuasPeale(midaVajutas){
            var newTop = Math.floor(Math.random()*100);
            var newLeft = Math.floor(Math.random()*100);
                        bullseye.style.top = newTop + "%";
                        bullseye.style.left = newLeft + "%";
        }
}