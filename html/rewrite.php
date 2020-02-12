<?php
$map = [
    'http://tc.canada.ca/hello.htm' => 'http://www.google.com/'
];

if (!defined('STDOUT'))
    define('STDOUT', fopen('php://stdout', 'w'));

if (!defined('STDIN'))
    define('STDIN', fopen('php://stdin', 'r'));

set_file_buffer(STDOUT, 0);

while (!feof(STDIN)) {
    $input = rtrim(fgets(STDIN), "\n");
    fputs(STDOUT, (array_key_exists($input, $map) ? $map[$input] : 'NULL') . "\n");
}