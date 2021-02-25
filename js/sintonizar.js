// JavaScript Document
var objAudio;
var estadoAudio;
var btnPlay;
var mat = new Array();
mat[0] = new Array("Selecciona Programa", "", "mp3");
mat[1] = new Array("RA 135. Mikhail Botvinnik", "http://feedproxy.google.com/~r/ElRinconDelAjedrez/~5/5ch523Zzm4o/botvinnik-jaque-infinito-del-ave-fenix_mf_26296576_feed_1.mp3", "mp3");
mat[2] = new Array("RA 134. Efim Geller", "http://feedproxy.google.com/~r/ElRinconDelAjedrez/~5/xhtosKciL5M/efim-geller-eterno-aspirante_mf_26025342_feed_1.mp3", "mp3");
mat[3] = new Array("RA 133. Ajedrez contra leucemia", "http://feedproxy.google.com/~r/ElRinconDelAjedrez/~5/Glv1I-i_S_c/ajedrez-solidario-contra-leucemia-icot-2018_mf_25893789_feed_1.mp3", "mp3");
mat[4] = new Array("RA 132. Congreso", "http://feedproxy.google.com/~r/ElRinconDelAjedrez/~5/jSr0fQYxXHc/congreso-el-poder-del-ajedrez-jornada-de_mf_25587384_feed_1.mp3", "mp3");
mat[5] = new Array("RA 131. Paco Vallejo", "http://feedproxy.google.com/~r/ElRinconDelAjedrez/~5/WEuEjGXfpKE/paco-vallejo-mi-situacion-es-tan-absurda-como_mf_25138030_feed_1.mp3", "mp3");
function fnInicializar() {
	objAudio = document.getElementById('audio');
	btnPlay = document.getElementById('btnPlay');	
	estadoAudio = document.getElementById('estadoAudio');
	objAudio.addEventListener('durationchange', reproduccionStream, false);
	objAudio.volume = 0.8;	
	var listaRadios = document.getElementById('listaRadios');
	for (var fila = 0; fila < mat.length; fila++) {
		var nuevoItem = document.createElement('option');
		nuevoItem.text = mat[fila][0];
		try {
			listaRadios.add(nuevoItem, null);
		} catch(ex) {
			listaRadios.add(nuevoItem);
		}
	}
}
function cambiaRadio() {
	estadoAudio.innerHTML = 'Carga del buffer...';
	var selectRadios = document.getElementById('listaRadios');
	objAudio.src = mat[selectRadios.selectedIndex][1];
	objAudio.type = 'audio/' + mat[selectRadios.selectedIndex][5];;
	var radioSintonizada = document.getElementById('radioSintonizada');
	radioSintonizada.innerHTML = mat[selectRadios.selectedIndex][0];
	objAudio.play();
}
function reproduccionStream() {
	estadoAudio.innerHTML = 'Pausa';
	btnPlay.innerHTML = 'Sintonizado';
}
function toggleBtn() {
	if (objAudio.ended || objAudio.paused) {
		reproducir();
	} else {
		hacerPausa();
}
}
function reproducir() {
	btnPlay.innerHTML = '<span class="glyphicon glyphicon-stop"></span>';
	estadoAudio.innerHTML = 'Sintonizado';
	objAudio.play();
}
function hacerPausa() {
	btnPlay.innerHTML = '<span class="glyphicon glyphicon-play"></span>';
	estadoAudio.innerHTML = 'Pausa';
	objAudio.pause();
}

window.addEventListener('load',fnInicializar,false);