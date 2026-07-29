export const toRna = (dna) => {
  const listaDeRna = {
    G: 'C', 
    C: 'G',
    T: 'A', 
    A: 'U'
  };

  let result = '';

  for (let i = 0; i < dna.length; i++) {
    result += listaDeRna[dna[i]];
  }

  return result;
};
