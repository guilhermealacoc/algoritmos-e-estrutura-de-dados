<?php

$array = [
  (object) ['propriedade1' => 'valor1', 'tipo' => 'tipoA'],
  (object) ['propriedade1' => 'valor2', 'tipo' => 'tipoB'],
  (object) ['propriedade1' => 'valor4', 'tipo' => 'tipoA'],
  (object) ['propriedade1' => 'valor5', 'tipo' => 'tipoA'],
  (object) ['propriedade1' => 'valor6', 'tipo' => 'tipoA'],
  (object) ['propriedade1' => 'valor7', 'tipo' => 'tipoA'],
  (object) ['propriedade1' => 'valor8', 'tipo' => 'tipoB'],
  (object) ['propriedade1' => 'valor9', 'tipo' => 'tipoA'],
  (object) ['propriedade1' => 'valor10', 'tipo' => 'tipoA'],
  (object) ['propriedade1' => 'valor11', 'tipo' => 'tipoB'],
  (object) ['propriedade1' => 'valor12', 'tipo' => 'tipoB'],
  (object) ['propriedade1' => 'valor13', 'tipo' => 'tipoB'],
  (object) ['propriedade1' => 'valor14', 'tipo' => 'tipoA'],
  (object) ['propriedade1' => 'valor15', 'tipo' => 'tipoC'],
  (object) ['propriedade1' => 'valor16', 'tipo' => 'tipoA'],
  (object) ['propriedade1' => 'valor17', 'tipo' => 'tipoA'],
  (object) ['propriedade1' => 'valor18', 'tipo' => 'tipoB'],
  (object) ['propriedade1' => 'valor19', 'tipo' => 'tipoC'],
  (object) ['propriedade1' => 'valor20', 'tipo' => 'tipoC'],
  (object) ['propriedade1' => 'valor21', 'tipo' => 'tipoC'],
  (object) ['propriedade1' => 'valor22', 'tipo' => 'tipoC'],
];
function agruparPorTipo($acumulador, $objeto)
{
  $tipo = $objeto->tipo;
  if (!isset($acumulador[$tipo])) {
    $acumulador[$tipo] = [];
  }
  $acumulador[$tipo][] = $objeto;
  return $acumulador;
}

$grupos = array_reduce($array, 'agruparPorTipo', []);

print_r($grupos);