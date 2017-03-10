<?php
/**
 * What am I? 
 * - A variable.
 *
 * What's my use?
 * - To store value.
 *
 * What kind of value?
 * - A number, string, arrays, reference or nothing at all!
 *
 * Are there any naming conventions for a variable?
 * - Yes, a variable must start with a `$` and
 * - should contain a-zA-Z0-9 or _
 *
 * Does storing value in variable equate to storing in
 * database?
 * - LOL NO! Variables will store values as far as this
 * - script is running in memory (RAM). The database
 * - stores the value even on computer shutdown.
 *
 * [Tip: Following examples have meaningful variable names,
 * pay attention.]
 */



$some_variable;
// I am just declared, I don't have any value stored
// within me yet. If you run this script, the PHP
// processor will just know that I am a variable
// with nothing inside me :(



$some_other_variable = 42;
// Now I have some value stored within me. It is of
// type number. It could be string too or even null!



$variable_with_null = null;
// We are explicitly telling the PHP processor that the
// the variable above has null value. That means, it has
// literally nothing!



$try_to_echo_me;
echo $try_to_echo_me;
// Whoops!
//---------------------------------------------------------------------------------------
// Notice: Undefined variable: try_to_echo_me in /var/www/example.com/index.php on line 39
//---------------------------------------------------------------------------------------
// Well it's not an **error**, it's just a **notice**. PHP is telling you that you're
// trying to echo a variable which has no value.
//
// [Extra info]: PHP classifies mistakes in 13 ways, out of which these 4 are the most 
// common and well known -
// 1. E_ERROR
// 2. E_WARNING
// 3. E_PARSE
// 4. E_NOTICE