<?php

/*
 * Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 * You can return the answer in any order.
 *
 * Example 1:
 * Input: nums = [2,7,11,15], target = 9
 * Output: [0,1]
 * Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
 *
 * Example 2:
 * Input: nums = [3,2,4], target = 6
 * Output: [1,2]
 *
 * Example 3:
 * Input: nums = [3,3], target = 6
 * Output: [0,1]
 */

namespace TwoSum;

class Solution
{
    public static function twoSum2($nums, $target)
    {
        for ($i = 0; $i < count($nums) - 1; $i++) {
            $val1 = $nums[$i];

            for ($j = 1 + $i; $j < count($nums); $j++) {
                $val2 = $nums[$j];

                if ($val1 + $val2 == $target) {
                    return [$i, $j];
                }
            }
        }

        return 0;
    }

    public static function twoSum($nums, $target)
    {
        $map = [];

        for ($i = 0; $i < count($nums); $i++) {
            $current = $nums[$i];
            // current + x = target
            // x = target - current
            $x = $target - $current;

            if(isset($map[$x])) {
                return [$map[$x], $i];
            } else {
                $map[$current] = $i;
            }
        }
        return "Array does not support algorithm!";
    }
}

$input = [3, 5, 1, 4, -8];
$target = 5;

foreach (Solution::twoSum($input, $target) as $value) {
    echo $value . ' ';
}

//foreach (Solution::twoSum2($input, $target) as $value) {
//    echo $value . ' ';
//}