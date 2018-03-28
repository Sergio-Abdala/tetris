<?php  
	if (isset($_POST['salvar'])) {
		$file = fopen("placar.txt","w");
		echo fputs($file, $_POST['salvar']);
		fclose($file);
	}
?>