<?php
/**
 * Capa temporária MUDS.
 * O WordPress e a base de dados permanecem instalados no alojamento.
 */
header('Content-Type: text/html; charset=UTF-8');
readfile(__DIR__ . '/index.html');
