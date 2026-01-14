<?php

rename( "/tmp/file1.txt", "/tmp/file2.txt");

echo "testing: " . time() . PHP_EOL;
echo "testing: " . time() . PHP_EOL;

rename( "/tmp/file2.txt", "/tmp/file1.txt");

echo "testing: " . time() . PHP_EOL;
