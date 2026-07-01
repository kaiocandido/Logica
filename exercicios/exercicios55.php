<?php

class ProteinTranslation
{
    public function getProteins(string $strand): array
    {   
        $strandMaiscula = strtoupper($strand);
        $codons = str_split($strandMaiscula, 3);
        $resultFinal = [];

        $codonsValidos = [
            "AUG",
            "UUU",
            "UUC",
            "UUA",
            "UUG",
            "UCU",
            "UCC",
            "UCA",
            "UCG",
            "UAU",
            "UAC",
            "UGU",
            "UGC",
            "UGG",
            "UAA",
            "UAG",
            "UGA",
        ];


        foreach($codons as $codon){

            if (!in_array($codon, $codonsValidos, true)) {
                throw new InvalidArgumentException('Invalid codon');
            }

            if($codon === "AUG"){
                $resultFinal[] = "Methionine";
            }

            if($codon === "UUU" || $codon === "UUC"){
                $resultFinal[] = "Phenylalanine";
            }

            if($codon === "UUA" || $codon === "UUG"){
                $resultFinal[] = "Leucine";
            }

            if($codon === "UCU" || $codon === "UCC" || $codon === "UCA" || $codon === "UCG"){
                $resultFinal[] = "Serine";
            }

            if($codon === "UAU" || $codon === "UAC"){
                $resultFinal[] = "Tyrosine";
            }

            if($codon === "UGU" || $codon === "UGC"){
                $resultFinal[] = "Cysteine";
            }

            if($codon === "UGG"){
                $resultFinal[] = "Tryptophan";
            }
            
            if($codon === "UAA" || $codon === "UAG" || $codon === "UGA"){
                return $resultFinal;
            }
        }

        return $resultFinal;
    }
}