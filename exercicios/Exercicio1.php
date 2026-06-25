<?php

declare(strict_types=1);

class Game
{
    private array $rolls = [];

    public function roll(int $pins): void
    {
        // Uma jogada não pode ser negativa nem maior que 10
        if ($pins < 0 || $pins > 10) {
            throw new Exception();
        }

        // Se o jogo já terminou, não pode jogar mais
        if ($this->isComplete()) {
            throw new Exception();
        }

        $this->rolls[] = $pins;
    }

    public function score(): int
    {
        // Não pode calcular score se o jogo ainda não terminou
        if (!$this->isComplete()) {
            throw new Exception();
        }

        $score = 0;
        $rollIndex = 0;

        // O jogo tem 10 frames
        for ($frame = 0; $frame < 10; $frame++) {

            // Strike: primeira jogada do frame é 10
            if ($this->rolls[$rollIndex] === 10) {
                $score += 10
                    + $this->rolls[$rollIndex + 1]
                    + $this->rolls[$rollIndex + 2];

                // Strike consome só 1 jogada no frame
                $rollIndex++;
            }

            // Spare: duas jogadas somam 10
            elseif ($this->rolls[$rollIndex] + $this->rolls[$rollIndex + 1] === 10) {
                $score += 10
                    + $this->rolls[$rollIndex + 2];

                // Spare consome 2 jogadas
                $rollIndex += 2;
            }

            // Open frame: soma normal das duas jogadas
            else {
                $score += $this->rolls[$rollIndex]
                    + $this->rolls[$rollIndex + 1];

                $rollIndex += 2;
            }
        }

        return $score;
    }

    private function isComplete(): bool
    {
        $rollIndex = 0;

        // Percorre os 10 frames
        for ($frame = 0; $frame < 10; $frame++) {

            // Ainda não existe jogada suficiente
            if (!isset($this->rolls[$rollIndex])) {
                return false;
            }

            // Strike
            if ($this->rolls[$rollIndex] === 10) {

                // No décimo frame precisa de 2 jogadas extras
                if ($frame === 9) {
                    return isset($this->rolls[$rollIndex + 1], $this->rolls[$rollIndex + 2])
                        && !isset($this->rolls[$rollIndex + 3]);
                }

                $rollIndex++;
                continue;
            }

            // Se não é strike, precisa da segunda jogada do frame
            if (!isset($this->rolls[$rollIndex + 1])) {
                return false;
            }

            // Duas jogadas normais não podem passar de 10
            if ($this->rolls[$rollIndex] + $this->rolls[$rollIndex + 1] > 10) {
                throw new Exception();
            }

            // Décimo frame
            if ($frame === 9) {
                $isSpare = $this->rolls[$rollIndex] + $this->rolls[$rollIndex + 1] === 10;

                // Se for spare, precisa de 1 jogada extra
                if ($isSpare) {
                    return isset($this->rolls[$rollIndex + 2])
                        && !isset($this->rolls[$rollIndex + 3]);
                }

                // Open frame no décimo termina com 2 jogadas
                return !isset($this->rolls[$rollIndex + 2]);
            }

            $rollIndex += 2;
        }

        return true;
    }
}