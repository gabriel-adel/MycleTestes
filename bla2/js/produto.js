var inputTamanho = document.querySelector('[name=tamanho]');
var outputTamanho = document.querySelector('[name=valorTamanho]');

function mostrarTamanho(){
    outputTamanho.value = inputTamanho.value;
}
inputTamanho.oninput = mostrarTamanho;