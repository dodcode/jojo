<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Email: caoliang@simpleware.com.cn
 * Date: 01/12/2017
 * Time: 8:25 PM
 */

if (!function_exists('does_time_overlaps')) {
    /**
     * 检查给出的两个时间区间是否有交集。
     * 该函数认为时间区间以start_time作为开始时间的键，以end_time作为结束时间的键。
     *
     * @param $range_a array 区间1
     * @param $range_b array 区间2
     * @return bool true-有交集，false-无交集
     */
    function does_time_overlaps($range_a, $range_b) {
        $range_a['start_time'] = ctype_digit($range_a['start_time']) ? $range_a['start_time'] : strtotime($range_a['start_time']);
        $range_a['end_time'] = ctype_digit($range_a['end_time']) ? $range_a['end_time'] : strtotime($range_a['end_time']);
        $range_b['start_time'] = ctype_digit($range_b['start_time']) ? $range_b['start_time'] : strtotime($range_b['start_time']);
        $range_b['end_time'] = ctype_digit($range_b['end_time']) ? $range_b['end_time'] : strtotime($range_b['end_time']);

        if ($range_a['end_time'] < $range_b['start_time'] || $range_b['end_time'] < $range_a['start_time']) {
            return false;
        }
        return true;
    }
}