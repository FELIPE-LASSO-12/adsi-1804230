// Variables de Tipo Elemento
var eBrand      = document.getElementById('brand');
var eReference  = document.getElementById('reference');
var eModel      = document.getElementById('model');
var eColor      = document.getElementById('color');
var eCc         = document.getElementById('cc');
var eType       = document.getElementById('type');
var vsound      = document.getElementById('sound');
var vhc 		= document.getElementById('vhc');
var path 		= document.getElementById('path');
var sstart 		= document.getElementById('start');
var sengine 	= document.getElementById('engine');
//Variables botones
var btnOn     = document.getElementById('btnOn');
var btnOff      = document.getElementById('btnOff');
var btnStop     = document.getElementById('btnStop');
var btnFordward  = document.getElementById('btnFordward');
var btnBackward = document.getElementById('btnBackward');
//Variables Logicas
var stateEngine = false;
var statePath   = false;
//Objeto
var start =  {
	// Atributos
	brand: 'Lamborghini',
	reference: 'Gallardo',
	model: 2018,
	color: 'Blanco',
	cc: 2.5,
	type: 'Electrico',
	//Metodos
	showInfo: function() {
		eBrand.innerHTML     = this.brand;
		eReference.innerHTML = this.reference;
		eModel.innerHTML     = this.model;
		eColor.innerHTML     = this.color;
		eCc.innerHTML        = this.cc;
		eType.innerHTML      = this.type;
	},
	on: function() {
		// alert('Play');
		if(stateEngine == false) {
			sstart.play();
			vhc.classList.add('on');
			stateEngine = true;
		}
		
	},
	off: function() {
		//alert('Off');
		if(statePath == false) {
			sstart.pause();
		sstart.currentTime = 0;
		sengine.pause();
		sengine.currentTime = 0;
		vhc.classList.remove('on');

		stateEngine = false;

		}
		
	},
	stop: function() {
		//alert('Stop');
		if(statePath == true) {
			path.classList.add('stop');
			statePath   = false;
		}

		path.classList.add('stop');
	},
	fordward: function() {
		//alert('Forward');
		if(stateEngine == true) {
			sengine.play();
			path.classList.remove('stop');
			path.classList.remove('backward');
			path.classList.add('fordward');
			statePath = true;
	}
		
	},
	backward: function() {
		//alert('Backward');
		if(stateEngine == true) {
			path.classList.add('backward');
		}
		
	}
};
start.showInfo();

btnOn.onclick= function(){
	start.on ();
}
btnOff.onclick= function(){
	start.off ();
}
btnStop.onclick= function(){
	start.stop ();
}
btnFordward.onclick= function(){
	start.fordward ();
}
btnBackward.onclick= function(){
	start.backward ();
}