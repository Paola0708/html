var stage1 = document.getElementById('stage1');
var stage2 = document.getElementById('stage2');
var next = document.getElementById('next');
var prev = document.getElementById('prev');
var nombre1 = document.getElementById('nombre1');
var gana = document.getElementById('gana');

var fxIn = 'zoomInDown';
var fxOut = 'zoomOutUP';



var playop = null;


var hijo1=document.getElementById('hij1');
var hijo2=document.getElementById('hij2');
var pcop=null;


stage2.style.display = 'none';
stage1.classList.add(fxIn);


next.onclick = function(){
var imagenes = new Array('<img src="imgs/piedra.jpg" " />','<img src="imgs/papel.jpg" " />','<img src="imgs/tijera.jpg" " />');

	pcop=Math.floor(Math.random()*imagenes.length);

	if(playop==1 && pcop ==0){
		hijo1.innerHTML = imagenes[0];
		hijo2.innerHTML = imagenes[0];
		gana.innerHTML = "tie";

	}else if(playop==1 && pcop ==1){
		hijo1.innerHTML = imagenes[0];
		hijo2.innerHTML = imagenes[1];
		gana.innerHTML = "you are lost";



	}else if(playop==1 && pcop ==2){

		hijo1.innerHTML = imagenes[0];
		hijo2.innerHTML = imagenes[2];
		gana.innerHTML = "you are win";


	}

	if(playop==2 && pcop ==0){
		hijo1.innerHTML = imagenes[1];
		hijo2.innerHTML = imagenes[0];
		gana.innerHTML = "you are win";

	}else if(playop==2 && pcop ==1){
		hijo1.innerHTML = imagenes[1];
		hijo2.innerHTML = imagenes[1];
		gana.innerHTML = "tie";



	}else if(playop==2 && pcop ==2){

		hijo1.innerHTML = imagenes[1];
		hijo2.innerHTML = imagenes[2];
		gana.innerHTML = "you are lost";


	}

	if(playop==3 && pcop ==0){
		hijo1.innerHTML = imagenes[2];
		hijo2.innerHTML = imagenes[0];
		gana.innerHTML = "you are lost";

	}else if(playop==3 && pcop ==1){
		hijo1.innerHTML = imagenes[2];
		hijo2.innerHTML = imagenes[1];
		gana.innerHTML = "you are win";



	}else if(playop==3 && pcop ==2){

		hijo1.innerHTML = imagenes[2];
		hijo2.innerHTML = imagenes[2];
		gana.innerHTML = "tie";


	}

	var nombre = document.getElementById('Nombre').value;
	nombre1.innerHTML = "Bienvenido : " + nombre;
	stage1.classList.remove(fxIn);
	stage1.classList.add(fxOut);
	setTimeout(function(){
		stage1.style.display = 'none';
	},1000);
    
    
    setTimeout(function(){
    	stage2.classList.remove(fxOut);
        stage2.classList.add(fxIn);
    	stage2.style.display = 'block';
    },1200);	

}






prev.onclick = function(){






	stage2.classList.remove(fxIn);
	stage2.classList.add(fxOut);
	setTimeout(function(){
		stage2.style.display = 'none';
	},1000);
    
    
    setTimeout(function(){
    	stage1.classList.remove(fxOut);
        stage1.classList.add(fxIn);
    	stage1.style.display = 'block';
    },1200);		
}

var op1= document.getElementsByClassName('option');
for (var i = 0;i< op1.length; i++) {
	op1[i].onclick=function(){

		playop=this.getAttribute('data-option');
		desactivarClase();
	    activarClase(this);
		

	}
}

function activarClase(elem){
	elem.classList.add('activar');
}

function desactivarClase(){
	for (var i = 0; i < op1.length; i++) {
		op1[i].classList.remove('activar');

	}
}



