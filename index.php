<?php

function isPalindrome(string $str): bool
{
	$str = preg_replace('/[^a-z0-9]/', '', strtolower($str)); // Remove caracteres especiais e numeros da string. Converte a string para lowercase 
	$strLen = (strlen($str) - 1); // Tamanho da string -1 para acessar o último índice do array(string fornecida como parametro).
	$strReversed = ""; // Variável que vai ser usada para concatenar os caracteres do array(string fornecida como parametro) de maneira inversa

	// Invertendo a string
	for ($i = $strLen; $i >= 0; $i--) {
		$strReversed .= $str[$i];
	}

	// Fazendo a comparação entre a string de input e a string revertida
	return $str === $strReversed;
}

echo isPalindrome("osso") ? 'É um palindromo' : 'Não é um palindromo';
