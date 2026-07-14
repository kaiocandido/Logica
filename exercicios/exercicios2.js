export const isPangram = (frase) => {

    var fraseMinuscula = frase.toLowerCase();

    fraseMinuscula = fraseMinuscula.replace(/[^a-z]/g, "");

    const letrasUnicas = new Set(fraseMinuscula);

    var arrayOrdenado = Array.from(letrasUnicas).sort();
    
    const alfabeto = [
        "a", "b", "c", "d", "e", "f", "g",
        "h", "i", "j", "k", "l", "m", "n",
        "o", "p", "q", "r", "s", "t", "u",
        "v", "w", "x", "y", "z"
    ];

    if(arrayOrdenado.join("") === alfabeto.join("")){
        return true;
    }

    return false;

};
