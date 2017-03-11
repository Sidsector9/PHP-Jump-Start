<?php
/**
 * This script is going to show how you can store different 
 * values in the variable.
 */



$stores_number = 42;
$stores_number = 3.14;
// [Note: The above variable `$stores_number` has been initialized
// twice. First with value `42` and next with value `3.14`. The
// variable will contain the value with which it was initialized
// latest.i.e; now `stores_number` contains `3.14`]



$stores_string = 'This is a string'; // NOWDOC
$stores_string = "This is also a string"; // HEREDOC
// Pay attention to the use of single and double quotes.
// "Nowdocs are to single-quoted strings what heredocs are 
// to double-quoted strings."



$in_c_plus_plus_and_java = 'I didn\'t do ';
$in_c_plus_plus_and_java = "He said, \"When are you going to come?\"";
// This is how you would escape an apostrophe inside single quotes
// and quotation marks in double quotes in C++ or Java



$in_php = "I didn't do it";
$in_php = 'He said "When are you going to leave?"';
// Shit! Isn't that just cool? You don't have to escape
// characters in PHP! You can just use single-double quotes
// interchangibly!