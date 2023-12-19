<?php

namespace Palindrome;
class Solution {
    public static function palindrome($num)
    {
        $numStr = (string) $num;
        $reversedNumStr = strrev($numStr);

        return $numStr === $reversedNumStr;
    }
}

echo Solution::palindrome(-123) === true ? 1 : 0;
