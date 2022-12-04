<?php

// Quando você usa o abstract qur dizer que o código será desenvolvido do lado de fora e não aqui

interface Controlador
{
    // Métodos Abstratos
    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();
}