document.getElementById("abrirMenu").addEventListener("click", openSlideMenu);
document.getElementById("cerrarMenu").addEventListener("click", closeSlideMenu);

function closeSlideMenu(){
    document.getElementById('contenedorMenu').style.width = '0';
    document.getElementById('contenedorMenu').style.cssText  = 'overflow-x: hidden;';
    document.getElementById('logoNavbar').style.cssText  = 'visibility: visible; -webkit-transition:all .9s ease;'
		+" 	-moz-transition:all .9s ease; " 
		+"	-o-transition:all .9s ease; "
		+"	-ms-transition:all .9s ease; "
		+"	width:100px;";
	document.getElementById('imagenMenu').style.cssText  = '-webkit-transition:all .9s ease;'
		+" 	-moz-transition:all .9s ease; " 
		+"	-o-transition:all .9s ease; "
		+"	-ms-transition:all .9s ease; "
		+"	width:0; margin-left:15px; padding-bottom: 10px;";
}

function openSlideMenu(){
    if (screen.width >= 300 && screen.width <= 350) {
    	document.getElementById('contenedorMenu').style.cssText  = '-webkit-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75);' 
			+"	-moz-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"	box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"  width:60%; overflow-x: visible;";
    	document.getElementById('logoNavbar').style.cssText  = 'visibility: hidden; -webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:0;";
		document.getElementById('imagenMenu').style.cssText  = '-webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:120px; margin-left:15%; padding-bottom: 10px;";
    }else if (screen.width > 350 && screen.width <= 400) {
    	document.getElementById('contenedorMenu').style.cssText  = '-webkit-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75);' 
			+"	-moz-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"	box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"  width:55%; overflow-x: visible;";
    	document.getElementById('imagenMenu').style.cssText  = '-webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:120px; margin-left:15%; padding-bottom: 10px;";
    	document.getElementById('logoNavbar').style.cssText  = 'visibility: hidden; -webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:0;";
    }else if (screen.width > 400 && screen.width <= 450) {
    	document.getElementById('contenedorMenu').style.cssText  = '-webkit-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75);' 
			+"	-moz-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"	box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"  width:50%; overflow-x: visible;";
    	document.getElementById('imagenMenu').style.cssText  = 'width:130px; margin-left:18%; padding-bottom: 10px;'
			+" 	-moz-transition:all 0.9s ease; " 
			+"	-o-transition:all 0.9s ease; "
			+"	-ms-transition:all 0.9s ease; "
			+"	-webkit-transition:all 0.9s ease;"
			+"	transition: 0.9s;";
    	document.getElementById('logoNavbar').style.cssText  = 'visibility: hidden; -webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:0;";
    }else if (screen.width > 450 && screen.width <= 500) {
    	document.getElementById('contenedorMenu').style.cssText  = '-webkit-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75);' 
			+"	-moz-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"	box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"  width:50%; overflow-x: visible;";
    	document.getElementById('imagenMenu').style.cssText  = '-webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:120px; margin-left:27px; padding-bottom: 10px;";
    	document.getElementById('logoNavbar').style.cssText  = 'visibility: hidden; -webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:0;";
    }else if (screen.width > 500 && screen.width <= 550) {
    	document.getElementById('contenedorMenu').style.cssText  = '-webkit-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75);' 
			+"	-moz-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"	box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"  width:50%; overflow-x: visible;";
    	document.getElementById('imagenMenu').style.cssText  = '-webkit-transition:all .8s ease;'
			+" 	-moz-transition:all .8s ease; " 
			+"	-o-transition:all .8s ease; "
			+"	-ms-transition:all .8s ease; "
			+"	width:130px; margin-left:40px; padding-bottom: 10px;";
    	document.getElementById('logoNavbar').style.cssText  = 'visibility: hidden; -webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:0;";
    }else if (screen.width > 550 && screen.width <= 600) {
    	document.getElementById('contenedorMenu').style.cssText  = '-webkit-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75);' 
			+"	-moz-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"	box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"  width:40%; overflow-x: visible;";
    	document.getElementById('imagenMenu').style.cssText  = '-webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:130px; margin-left:50px; padding-bottom: 10px;";
    	document.getElementById('logoNavbar').style.cssText  = 'visibility: hidden; -webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:0;";
    }else if (screen.width > 600 && screen.width <= 650) {
    	document.getElementById('contenedorMenu').style.cssText  = '-webkit-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75);' 
			+"	-moz-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"	box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"  width:40%; overflow-x: visible;";
    	document.getElementById('imagenMenu').style.cssText  = '-webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:150px; margin-left:35px; padding-bottom: 10px;";
    	document.getElementById('logoNavbar').style.cssText  = 'visibility: hidden; -webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:0;";
    }else if (screen.width > 650 && screen.width <= 700) {
    	document.getElementById('contenedorMenu').style.cssText  = '-webkit-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75);' 
			+"	-moz-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"	box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"  width:40%; overflow-x: visible;";
    	document.getElementById('imagenMenu').style.cssText  = '-webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:150px; margin-left:50px; padding-bottom: 10px;";
    	document.getElementById('logoNavbar').style.cssText  = 'visibility: hidden; -webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:0;";
    }else if (screen.width > 700 && screen.width <= 750) {
    	document.getElementById('contenedorMenu').style.cssText  = '-webkit-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75);' 
			+"	-moz-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"	box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"  width:35%; overflow-x: visible;";
    	document.getElementById('imagenMenu').style.cssText  = '-webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:150px; margin-left:40px; padding-bottom: 10px;";
    	document.getElementById('logoNavbar').style.cssText  = 'visibility: hidden; -webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:0;";
    }else if (screen.width > 750 && screen.width <= 800) {
    	document.getElementById('contenedorMenu').style.cssText  = '-webkit-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75);' 
			+"	-moz-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"	box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"  width:30%; overflow-x: visible;";
    	document.getElementById('imagenMenu').style.cssText  = '-webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:150px; margin-left:35px; padding-bottom: 10px;";
    	document.getElementById('logoNavbar').style.cssText  = 'visibility: hidden; -webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:0;";
    }else if (screen.width > 800 && screen.width <= 850) {
    	document.getElementById('contenedorMenu').style.cssText  = '-webkit-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75);' 
			+"	-moz-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"	box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"  width:25%; overflow-x: visible;";
    	document.getElementById('imagenMenu').style.cssText  = '-webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:150px; margin-left:25px; padding-bottom: 10px;";
    	document.getElementById('logoNavbar').style.cssText  = 'visibility: hidden; -webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:0;";
    }else if (screen.width > 850 && screen.width <= 900) {
    	document.getElementById('contenedorMenu').style.cssText  = '-webkit-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75);' 
			+"	-moz-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"	box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"  width:30%; overflow-x: visible;";
    	document.getElementById('imagenMenu').style.cssText  = '-webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:150px; margin-left:10px; padding-bottom: 10px;";
    	document.getElementById('logoNavbar').style.cssText  = 'visibility: hidden; -webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:0;";
    }else if (screen.width > 900 && screen.width <= 950) {
    	document.getElementById('contenedorMenu').style.cssText  = '-webkit-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75);' 
			+"	-moz-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"	box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"  width:30%; overflow-x: visible;";
    	document.getElementById('imagenMenu').style.cssText  = '-webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:150px; margin-left:25px; padding-bottom: 10px;";
    	document.getElementById('logoNavbar').style.cssText  = 'visibility: hidden; -webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:0;";
    }else if (screen.width > 900 && screen.width <= 950) {
    	document.getElementById('contenedorMenu').style.cssText  = '-webkit-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75);' 
			+"	-moz-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"	box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"  width:30%; overflow-x: visible;";
    	document.getElementById('imagenMenu').style.cssText  = '-webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:150px; margin-left:25px; padding-bottom: 10px;";
    	document.getElementById('logoNavbar').style.cssText  = 'visibility: hidden; -webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:0;";
    }else if (screen.width > 950 && screen.width <= 1000) {
    	document.getElementById('contenedorMenu').style.cssText  = '-webkit-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75);' 
			+"	-moz-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"	box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"  width:30%; overflow-x: visible;";
    	document.getElementById('imagenMenu').style.cssText  = '-webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:150px; margin-left:25px; padding-bottom: 10px;";
    	document.getElementById('logoNavbar').style.cssText  = 'visibility: hidden; -webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:0;";
    }else {
    	document.getElementById('contenedorMenu').style.cssText  = '-webkit-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75);' 
			+"	-moz-box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"	box-shadow: 15px 0px 25px 10px rgba(0,0,0,0.75); "
			+"  width:30%; overflow-x: visible;";
    	document.getElementById('imagenMenu').style.cssText  = '-webkit-transition:all .9s ease;'
			+" 	-moz-transition:all .9s ease; " 
			+"	-o-transition:all .9s ease; "
			+"	-ms-transition:all .9s ease; "
			+"	width:150px; margin-left:12%; padding-bottom: 10px;";
    }
}