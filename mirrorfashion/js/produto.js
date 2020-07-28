var inputTamanho = document.getElementById("tamanho")
var outputTamanho = document.getElementById("valortamanho")

function mostrarTamanho(){
	outputTamanho.value = inputTamanho.value
	/*outputTamanho.textContent=event.target.value*/
}
inputTamanho.oninput = mostrarTamanho;
/*inputTamanho.onchage=mostrarTamanho;*/





