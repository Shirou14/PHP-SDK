<?php 
//gotta include the stuff.
include("./lib/CheckfrontAPI.php");

//we're just going to write the result of the api to the screen, that's it.
$checkfront = new CheckfrontAPI(
	array(
		'host'=>'jayscodingbeta.checkfront.com',
		'api_key'=>'2ccbe0cbc7ddc6f651c2e1db4e2a1c5a38b85b90',
		'api_secret' =>'acef6de3f40fd5f5c688e3aa490d14049508bb9f90617ed29d0dc61ebb5cf85c',
	)
);

$response = $checkfront->get(
	'booking',
	array(
		'start_date'=>date('2019-10-27')
	)
);

?>
<head></head>
<body>
	<p>
	</p>
</body>