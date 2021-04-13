<?php
	echo "<br/>";
	echo '</br> Hasil benchmark (elapsed_time): ' . $this->benchmark->elapsed_time('first', 'second');
	echo '</br> Hasil benchmark (memory_usage): ' . $this->benchmark->memory_usage('first', 'second');
?>