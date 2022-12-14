<?php
	$commands = array(
		// 'echo $PWD',
		// 'whoami',
		'git pull',
		'git status',
		// 'git submodule sync',
		// 'git submodule update',
		// 'git submodule status'
	);

	$output = '';
	foreach($commands AS $command) {
		$tmp = shell_exec($command);
		$output .= htmlentities(trim($tmp));
	}

	echo $output;
?>