<?php
	class Chat {}
	
	class Chien {}

	class Animalerie {
		function __construct(Chat $chat, Chien $chien){
			echo 'Executer';
		}
	}
	new Animalerie(
		new Chat(),
		new Chien()
	);
?>