<?php
/**
 * Associative array, like indexed array too holds
 * multiple mixed values. The only difference is that
 * in associative arrays, instead of an index (+ve integer),
 * it uses *keys*.
 *
 * In short, associative arrays have *key-value* pairs.
 */



$an_associative_array = array( 'name' => 'Sam', 'age' => 24, 'is_alive' => true );

// let us rewrite the above code neatly in multiple lines, so that
// it's more readable.

$an_associative_array = array(
	'name'     => 'Sam',
	'age'      => 24,
	'is_alive' => true
);

// In the above example, everything to the left of `=>` are keys and
// everything to the right are values of their corresponding keys.
// They keys and values can be of any datatype. I've used strings
// so that a simpleton like you can easily understand. A more complicated
// example would be like:

$an_associative_array = array(
	'name' => 'John',	// String => String
	true   => 'LOL',	// Boolean => String
	false  => 'LMAO',	// Boolean => String
	0      => 'ZERO',	// Number => String
	1      => 'ONE',	// Number => String
);

// The above example is infact very interesting, because the
// Boolean value `false` is evaluated to 0. So in short we have
// 2 values for the same key, which are -
//
// 0 => 'LMAO'
// 0 => 'ZERO'
//
// If you try to echo like this:
echo $an_associative_array[0];
// OR
echo $an_associative_array[false];
// Both will print `ZERO`. Because that is the value assigned the
// latest to a key 0.

// Try playing with different keys and duplicating keys and see what
// values you get.



// PHP is very smartly built as well, let me show you why!
// Look at the example below:
$an_associative_array = array(
	3 => 'some value',
	     'other value',
	     'sample',
	     'ok we should stop'
);

// As you can see, we only gave the first pair a key as 3.
// Then we just wrote comma separated values.
// PHP will take the key of the first pair, if it is of type
// integer, then it will auto-increment for the remaining values.
// Which means, the array actually has a structure like this:

$an_associative_array = array(
	3 => 'some value',
	4 => 'other value',
	5 => 'sample',
	6 => 'ok we should stop'
);



$an_associative_array = array(
		   'some value',		// key: 0
	       'other value',		// key: 1
	121	=> 'sample',			// key: 121
	       'ok we should stop', // key: 122
	       'last one'			// key: 123
);

// This is another classic example!
// We gave the third pair a key of `121`. The pairs
// following the third will have keys auto-incremented
// from 121. So the following keys are 122, 123, 124, 
// ....and so on. It only moves forwards. And for the 
// pairs without keys before 121, they are assigned 
// keys that start from 0. ( not always 0 )



// Another example:
$an_associative_array = array(
	24  => 'some value',		// key: 24 ( This is why not always 0 )
	       'other value',		// key: 25 - after incrementing from 24
	121	=> 'sample',			// key: 121
	       'ok we should stop', // key: 122 - after incrementing from 121
	       'last one'			// key: 123 - after incrementing from 122
);