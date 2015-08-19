
$(".glitchype").each( function(){
    // Traz todas as opções de troca
    var opcoes = $(this).find("datalist option").get(),
        inputData = $(this).find("input"),
        velocidade = $(this).data("velocidade")?$(this).data("velocidade"):500,
        intervalo = $(this).data("intervalo")?$(this).data("intervalo"):1500,
        textos = new Array();
    opcoes.forEach(function(Opcao) {
        //Alimenta o vetor de textos
        textos.push(Opcao.value);
    });
    inputData = $(this).find("input").val(textos[0]);
    for(var it=0; it < textos.length-1; it++) {
        // Embaralha um texto legível pro texto glitched
        window.setTimeout(function(it) {
            glitchHypeEmbaralha(inputData,textos[it], velocidade);

                console.log(textos[it]);
                console.log('para');
            window.setTimeout(function(textoNovo) {
                console.log(textos[it+1]);
                glitchHypeDesembaralha(inputData,textos[it+1], velocidade);
            }, 800);
        }, it*intervalo+intervalo, it );

    }

});

// Recebe palavra pra ser embaralhada e tempo de execução da animação
function glitchHypeDesembaralha(elem, textoNovo, tempoAnimacao) {
    var textoAntigo = elem.val();
    // Completa com espaços em branco o texto que for menor
    if(textoAntigo.length < textoNovo.length) {
        var whitespaces = Array(textoNovo.length).join(" ");
        textoAntigo.paddingRight(whitespaces);
    } else {
        var whitespaces = Array(textoAntigo.length+1).join(" ");
        textoNovo = textoNovo.paddingRight(whitespaces);
    }

    console.log('antigo: ' + textoAntigo);
    console.log('novo: ' + textoNovo);
    var tempoPorLetra = tempoAnimacao / textoNovo.length;
    // Seta um array com as posições disponíveis para troca de char (inicialmente são todas)
    var posicoesDisponiveis = [];
    for (i = 0; i < textoNovo.length; i++) {
        posicoesDisponiveis.push(i);
    }
    posicoesDisponiveis = shuffleArray(posicoesDisponiveis);

    // Passa por todo o texto sorteando uma posição de char e modificando esse char
    for (var i = 0; i < textoNovo.length; i++) {

        var posicaoArray = Math.floor(Math.random() * posicoesDisponiveis.length),
            posicao = posicoesDisponiveis[posicaoArray];
        posicoesDisponiveis.splice(posicaoArray, 1);
        // Carrega o texto com uma letra trocada
        var textoAntigo = unglitchHypeChar(textoAntigo, textoNovo, posicao);
        console.log(textoAntigo);

        window.setTimeout(function(textoAntigo) {
            elem.val(textoAntigo);
        }, i * tempoPorLetra, textoAntigo);
    }
};

// Recebe palavra pra ser embaralhada e tempo de execução da animação
function glitchHypeEmbaralha(elem, texto, tempoAnimacao) {

    var tempoPorLetra = tempoAnimacao / texto.length;
    // Seta um array com as posições disponíveis para troca de char (inicialmente são todas)
    var posicoesDisponiveis = [];
    for (i = 0; i < texto.length; i++) {
        posicoesDisponiveis.push(i);
    }
    posicoesDisponiveis = shuffleArray(posicoesDisponiveis)
    var glitchChars = ['#', '%', '*', '»', '?', '€', '®', '↓', 'n', 'µ', 'ŋ', ' ', 'đ', 'ð', '®', '£', 'e'];
    // Passa por todo o texto sorteando uma posição de char e modificando esse char
    for (var i = 0; i < texto.length; i++) {
        var posicaoArray = Math.floor(Math.random() * posicoesDisponiveis.length),
            posicao = posicoesDisponiveis[posicaoArray];
        posicoesDisponiveis.splice(posicaoArray, 1)
        // Carrega o texto com uma letra trocada
        var texto = glitchHypeChar(texto, glitchChars, posicao);
        window.setTimeout(function(texto) {
            elem.val(texto);
        }, i * tempoPorLetra, texto);
    }
};

// Sorteia um glitch Char e Troca a letra do texto na posicao recebida
function glitchHypeChar(texto, glitchChars, posicao) {
    var glitCHar = glitchChars[Math.floor(Math.random() * glitchChars.length)];
    return texto.substring(0, posicao) + glitCHar + texto.substring(posicao + 1, texto.length);
}
// Troca a letra do texto glitched na posicao recebida para o char do prox texto
function unglitchHypeChar(textoAntigo, textoNovo, posicao) {
    return textoAntigo.substring(0, posicao) + textoNovo.substring(posicao, posicao+1) + textoAntigo.substring(posicao + 1, textoAntigo.length);
}

// Randomiza o array (tem algo pronto em jquery?)
function shuffleArray(array) {
    for (var i = array.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }
    return array;
}

// Completo a string com whitespaces
String.prototype.paddingRight = function (paddingValue) {
   return String(this + paddingValue).slice(0, paddingValue.length);
};
