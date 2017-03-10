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