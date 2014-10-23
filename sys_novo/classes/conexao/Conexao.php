<?php

interface Conexao {
	
	public function getConexao();
	public function consulta($sql);
}

?>