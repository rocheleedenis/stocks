<?php

if (!function_exists('first_word')) {
    function first_word(string $string) {
        return current(explode(' ', $string));
    }
}