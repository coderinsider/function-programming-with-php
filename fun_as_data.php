<?php 
function first_function() {
	echo "I am here, something to do";
};
$first_function_two =  function($myName) {
	echo "Hi ${myName}, I am here, something to do";
};
$first_function_two("Myat Ko Ko");

$environment = 'deve';
$fetch_data_real = function() {
    echo "Fetching data...\n";
};

$fetch_data_fake = function() {
    return [
        'name' => 'Jane Doe',
        'age' => 35,
        'job' => 'programmer',
    ];
};
$fetch_data = (
	$environment === 'deve'
	? $fetch_data_fake
	: $fetch_data_real
);

$fetch_data();
?>