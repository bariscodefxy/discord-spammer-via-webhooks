<?php 

$profiles = [ // profile urls
	"https://blablabla",
	"https://blablabla",
];

while(true)
{
	foreach($profiles as $pp)
	{
		$url = "https://discord.com/api/webhooks/WEBHOOK_URL"; // webhook url
		$headers = [ 'Content-Type: application/json; charset=utf-8' ];
		$POST = [ 'username' => md5(rand(1, 99999)), 'content' => 'aka message', 'avatar_url' => $pp ];

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
		$response   = curl_exec($ch);
		usleep(650);
	}
	usleep(2000);
}