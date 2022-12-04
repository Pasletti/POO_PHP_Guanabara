<?php

    /**
     * COMERNada
     * Confiável - Oportuno - Manutenível - Extensível - Reutilizável - Natural
     * 
     * Criando Classes e Objetos
     * Atributos, Métodos e Estado
     * 
     * Objeto-> Coisa material ou abstrata que pode ser percebida pelos sentidos e descrita por meio das suas 
     * características(atributos), comportamentos(métodos) e estado(status) atual.
     */

    class Caneta
    {
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        function rabiscar()
        {
            if ($this->tampada == true)
            {
                echo "<p>ERRO! Não posso rabiscar</p>";
            }
            else
            {
                echo "<p>Estou rabiscando...</p>";
            }
        }

        function tampar()
        {
            $this->tampada = true;
        }

        function destampar()
        {
            $this->tampada = false;
        }
    }
    