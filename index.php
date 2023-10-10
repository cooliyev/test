<?php
if (!function_exists('dd')) {
    function dd(mixed ...$vars): never
    {
        echo '<pre>';
        foreach ($vars as $v) {
            print_r($v);
        }
        echo '</pre>';

        exit(1);
    }
}