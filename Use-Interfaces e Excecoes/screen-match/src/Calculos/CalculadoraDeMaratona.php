<?php

class CalculadoraDeMaratona
{
    private int $duracaoTotal = 0;

    public function inclui(object $titulo): void
    {
        // Filme has public readonly float $duracaoMinutos
        if (property_exists($titulo, 'duracaoMinutos') && is_numeric($titulo->duracaoMinutos)) {
            $this->duracaoTotal += (int) $titulo->duracaoMinutos;
            return;
        }

        // Serie may provide a duracao() method that returns total minutes
        if (method_exists($titulo, 'duracao')) {
            $this->duracaoTotal += (int) $titulo->duracao();
            return;
        }

        // Other common accessors
        if (method_exists($titulo, 'getDuracaoEmMinutos')) {
            $this->duracaoTotal += (int) $titulo->getDuracaoEmMinutos();
            return;
        }
        if (method_exists($titulo, 'duracaoEmMinutos')) {
            $this->duracaoTotal += (int) $titulo->duracaoEmMinutos();
            return;
        }

        // Fallback for Serie-like properties: temporadas, episodiosPorTemporada, duracaoEpisodio
        if (
            property_exists($titulo, 'temporadas') &&
            property_exists($titulo, 'episodiosPorTemporada') &&
            property_exists($titulo, 'duracaoEpisodio')
        ) {
            $this->duracaoTotal += (int) ($titulo->temporadas * $titulo->episodiosPorTemporada * $titulo->duracaoEpisodio);
            return;
        }

        // If nothing matched, do nothing (avoid crash)
    }

    public function duracao(): int
    {
        return $this->duracaoTotal;
    }
}
