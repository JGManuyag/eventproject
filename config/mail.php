<?php

return [

	'driver' => 'smtp',
	'host' => 'smtp.mandrillapp.com',
	'port' => '587',
	'from' => ['address' => 'derjohn@live.com', 'name' => 'Welkio'],
	'encryption' => 'tls',
	'username' => 'derjohn@live.com',
	'password' => 'pJTg8YFohBq4Orl1bK-V2A',
	'sendmail' => '/usr/sbin/sendmail -bs',
	'pretend' => false,

];
