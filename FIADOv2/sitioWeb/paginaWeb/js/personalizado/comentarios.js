//if (screen.width >= 300 && screen.width <= 1024) {
	var userSelection = document.getElementsByClassName('comentario');
	for(let i = 0; i < userSelection.length; i++) {
	  userSelection[i].addEventListener("click", function() {
	    var comentario = "Comentario : "+ (i+1);
		comentario += "<p>Lorem Ipsum is simply dummy text of";
		comentario += "the printing and typesetting industry</p>";
	    document.getElementById("comment").innerHTML = comentario;
		document.getElementById("comment").classList.add('comentarioTexto');
	    document.getElementById("mostrarComentario").classList.remove('comentarioInvisible');
		document.getElementById("mostrarComentario").classList.add('comentarioVisible');
		setTimeout(function(){esconderComentario()},4500);
	  })
	}

	function esconderComentario(){
		document.getElementById("comment").innerHTML = " ";
		document.getElementById("comment").style.cssText = "background: rgba(0, 0, 0, 0.0);";
		document.getElementById("comment").style.cssText += "transition: 1s;";
		document.getElementById("comment").classList.remove('comentarioTexto');
		document.getElementById("mostrarComentario").classList.remove('comentarioVisible');
		document.getElementById("mostrarComentario").classList.add('comentarioInvisible');
	}
/*}else{
	$('.comentario').on('mouseover', function(e){
		var comentario = "Comentario : "+ this.id;
		comentario += "<p>Lorem Ipsum is simply dummy text of";
		comentario += "the printing and typesetting industry</p>";
	    document.getElementById("comment").innerHTML = comentario;
		document.getElementById("mostrarComentario").style.cssText = "cursor:pointer;";
		document.getElementById("mostrarComentario").style.cssText += "background: rgba(174, 172, 170, 0.9);";
		document.getElementById("mostrarComentario").style.cssText += "height: 300px;";
		document.getElementById("mostrarComentario").style.cssText += "width: 80%;";
		document.getElementById("mostrarComentario").style.cssText += "position: absolute;";
		document.getElementById("mostrarComentario").style.cssText += "z-index:1;";
		document.getElementById("mostrarComentario").style.cssText += "border-radius: 5px;";
	});
	$('.comentario').on('mouseout', function(e){
	    document.getElementById("comment").innerHTML = " ";
		document.getElementById("mostrarComentario").style.cssText = " ";
	});
}*/