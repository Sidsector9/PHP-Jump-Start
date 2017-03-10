<?php
/**
 * In 3.0, you learnt how to declare (create) an empty array.
 * Now let us look into how an indexed array looks like.
 */



$an_indexed_array = array( 'First', 'Second', 'Third' );

// $an_indexed_array                    <--- Name of the array
// --------------------------------
// | 'First' | 'Second' | 'Third' |     <--- Values
// --------------------------------
//      0          1         2          <--- Location index

// Index array locations begin with 0.
// In short, index starts with 0 and indexes are
// *positive*.



// Comparing to C++ and Java, an array can hold
// values of the same data type. In layman terms,
// all the values in the array are of same type, that is
// all integers, or all strings, or all boolean, etc;
//
// But in PHP, an array can store mixed values, for eg:

$an_indexed_array = array( 'A string', 496, true, null );

// As you see above, at location:
// 0 - You have a value of type `string`
// 1 - You have a value of type `number`
// 2 - You have a value of type `boolean`
// 3 - You have a value of `null`
// [`null` values don't have a datatype, they're just...null]




// Now,
// Since you know the NAME of the array, you can get the values
// from various locations.
// So if I echo like this:
echo $an_indexed_array[0];
// This will print `A string`
echo $an_indexed_array[1];
// This will print `496`
echo $an_indexed_array[2];
// This will print `1` [True is evaluated to 1]
echo $an_indexed_array[3];
// This won't print anything because `null` is nothing.
echo $an_indexed_array[4];
// ----------------------------------------------------------------
// Undefined offset: 4 in /var/www/example.com/index.php on line 55
// ----------------------------------------------------------------
// What is the cause of this error?
// - We tried to access an array with location `4` which doesn't even exist!
// - The last location index of our array is `3`.