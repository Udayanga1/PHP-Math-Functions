<?php
  // PHP Math Functions

  // PHP math functions are part of the PHP core.

  // abs() - returns absolute value (number without its sign)
  echo abs(-8.2) . '<br>'; // returns 8
  echo abs(6) . '<br>'; // returns 6

  // acos() - returns the arc cosine of a number
  echo acos(0.54) . '<br>'; // returns 1.000359217395
  echo acos(-0.45) . '<br>'; // returns 2.0375616658422

  // acosh() - returns the inverse hyperbolic cosine of a number
  echo acosh(54) . '<br>'; // returns 4.6820454822146
  echo acosh(45) . '<br>'; // returns 4.4996861906715
  
  // asin() - returns the arc sine of a number
  echo asin(0.54) . '<br>'; // returns 0.57043710939992
  echo asin(0.45) . '<br>'; // returns 0.4667653390473

  // asinh() - returns the inverse hyperbolic sine of a number
  echo asinh(54) . '<br>'; // returns 4.6822169499829
  echo asinh(45) . '<br>'; // returns 4.4999331042643

  // atan() - returns the arc tangent of a number in radians
  echo atan(0.54) . '<br>'; // returns 0.4951332634684
  echo atan(0.45) . '<br>'; // returns 0.42285392613294

  // atan2() - returns the arc tangent of two variables x and y
  echo atan2(0.54, 0.54) . '<br>'; // returns 0.78539816339745
  echo atan2(-0.54, -0.54) . '<br>'; // returns -2.3561944901923
  
  // atanh() - returns the inverse hyperbolic tangent of a number
  echo atanh(0.54) .'<br>'; // returns 0.60415560296227
  echo atanh(0.45) .'<br>'; // returns 0.48470027859405

  // base_convert() - converts a number from one number base to another
  $binary = "110110";
  echo base_convert($binary, 2, 16) .'<br>'; // returns 36

  $hexadec = "36"; 
  echo base_convert($hexadec, 16, 2) .'<br>'; // returns 110110

  // bindec() - converts a binary number to a decimal number
  echo bindec("0111") . '<br>'; // returns 7

  //  ceil() - returns a integer rounded up to the nearest
  echo ceil(10.2) . '<br>'; // returns 11
  
  // cos() - returns the cosine of different numbers
  echo cos(54) . '<br>'; // returns -0.82930983286315
  echo cos(45) . '<br>'; // returns 0.52532198881773
  
  // cosh() - returns the hyperbolic cosine of different numbers
  echo cosh(54) . '<br>'; // returns 1.4153766516373E+23
  
  // decbin() - converts a decimal number to a binary number
  echo decbin(54) . '<br>'; // returns 110110
  
  // dechex()	- converts a decimal number to a hexadecimal number
  echo dechex(16) . '<br>'; // returns 10
  echo dechex(24) . '<br>'; // returns 18
  
  // decoct() -	converts a decimal number to an octal number
  echo decoct(10) . '<br>'; // returns 12
  echo decoct(18) . '<br>'; // returns 22
  
  // deg2rad() - converts a degree value to a radian value
  echo deg2rad(180) . '<br>'; // returns 3.1415926535898
  echo deg2rad(45) . '<br>'; // returns 0.78539816339745
  
  // exp() - calculates the exponent of e
  echo exp(5) . '<br>'; // returns 148.41315910258
  echo exp(50) . '<br>'; // returns 5.1847055285871E+21
  
  // expm1() - returns exp(x) - 1
  echo expm1(5) . '<br>'; // returns 147.41315910258
  echo expm1(50) . '<br>'; // returns 5.1847055285871E+21
  
  // floor() - rounds a number down to the nearest integer
  echo floor(9.8) . '<br>'; // returns 9
  
  // fmod() -	returns the remainder of x/y
  echo fmod(98, 5) . '<br>'; // returns 3
  
  // getrandmax() - returns the largest possible value returned by rand()
  echo getrandmax() . '<br>'; // returns 2147483647
  
  // hexdec() - converts a hexadecimal number to a decimal number
  echo hexdec('cliff') . '<br>'; // returns 3327
  echo hexdec('fff') . '<br>'; // returns 4095
  
  // hypot() - calculates the hypotenuse of a right-angle triangle
  echo hypot(4, 6) . '<br>'; // returns 7.211102550928
  
  // intdiv() -	performs integer division and return rounded down number
  echo intdiv(12, 4) . '<br>'; // returns 3
  echo intdiv(14, 5) . '<br>'; // returns 2
  
  // is_finite() - checks whether a value is finite or not
  echo is_finite(5) . '<br>'; // returns 1
  var_dump(is_finite(5)); // returns bool(true)
  echo '<br>';
  var_dump(is_finite(log(0))); // returns bool(false)
  echo '<br>';

  // is_infinite() - checks whether a value is infinite or not
  echo is_infinite(log(0)) . '<br>'; // returns 1
  var_dump(is_infinite(log(0))); echo '<br>'; // returns bool(true)
  var_dump(is_infinite(5)); echo '<br>'; // returns bool(false)
  
  // is_nan() - checks whether a value is 'not-a-number'
  var_dump(is_nan(5)); echo '<br>'; // returns bool(false)
  var_dump(is_nan(asin(54))); echo '<br>'; // returns bool(true)

  // lcg_value() - returns a pseudo random number in a range between 0 and 1
  echo lcg_value() . '<br>'; // returns a number between 0 & 1
  
  // log() - returns the natural logarithm of a number
  echo log(2) . '<br>'; // returns 0.69314718055995
  
  // log10() - returns the base-10 logarithm of a number
  echo log10(2) . '<br>'; // returns 0.30102999566398
  
  // log1p() - returns log(1+number)
  echo log1p(2) . '<br>'; // returns 1.0986122886681

  // max() - returns the highest value in an array, or in several specified values
  echo max([21,6,51,14]) . '<br>'; // returns 51
  echo max(21,6,51,14) . '<br>'; // returns 51
  
  // min() - returns the lowest value in an array, or in several specified values
  echo min([21,6,51,14]) . '<br>'; // returns 6
  echo min(21,6,51,14) . '<br>'; // returns 6

  // mt_getrandmax() - returns the largest possible value returned by mt_rand()
  echo(mt_getrandmax()) . '<br>'; // returns 2147483647

  // mt_rand() - generates a random integer using Mersenne Twister algorithm
  echo mt_rand() . '<br>';
  echo mt_rand(10,100) . '<br>'; // returns a random integer between 10 and 100


  // mt_srand() - seeds the Mersenne Twister random number generator
  $seed = 12345;
  mt_srand($seed) . '<br>';
  echo mt_rand() . '<br>'; // returns 1996335345

  // octdec() - converts an octal number to a decimal number
  echo octdec(24) . '<br>'; // returns 20
  echo octdec(30) . '<br>'; // returns 24
  
  // pi() - returns the value of PI
  echo pi() . '<br>'; // returns 3.1415926535898
  
  // pow() - returns x raised to the power of y
  echo pow(3, 4) . '<br>'; // returns 81
  
  // rad2deg() - converts a radian value to a degree value
  echo rad2deg(3.1415926535898) . '<br>'; // returns 180

  // rand() - generates a random integer
  echo rand() . '<br>'; 
  echo rand(10,1000) . '<br>'; //  returns a random integer between 10 and 1000
  
  // round() - rounds a floating-point number
  echo round(10.4) . '<br>'; //  returns 10
  echo round(10.6) . '<br>'; //  returns 11
  
  // sin() - returns the sine of a number
  echo sin(45) . '<br>'; //  returns 0.85090352453412
  
  // sinh()	returns the hyperbolic sine of a number
  echo sinh(45) . '<br>'; //  returns 1.7467135528743E+19
  
  // sqrt()	- returns the square root of a number
  echo sqrt(64) . '<br>'; //  returns 8

  // srand() - seeds the random number generator
  srand(12346);
  echo rand() . '<br>'; // returns 1995006351
  
  // tan() - returns the tangent of a number
  echo tan(45) . '<br>'; // returns 1.6197751905439
  
  // tanh() - returns the hyperbolic tangent of a number
  echo tanh(45) . '<br>'; // returns 1


?>