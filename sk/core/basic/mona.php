<?php
/**
 * skBase - "Mona (Sanitary Alcohol)"
 * Variable Sanitization
 * @author      Aterny <aterny[at]duga[dot]to>
 * @copyright   2024 novatek
 * @version     skv0.1-mona
 */

class mona extends sk {
    public function sanitize($str) {
        if (is_array($str)) {
            return array_map(function($value) {
                return filter_var($value, FILTER_SANITIZE_STRING);
            }, $str);
        }
        return filter_var($str, FILTER_SANITIZE_STRING);
    }
}

