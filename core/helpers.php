<?php

namespace Core;

abstract class Helpers
{
    public static  function truncate(?string $string, int $lg_max = 150): string
    {
        if ($string === null) {
            return '';
        }
        if (mb_strlen($string) > $lg_max) {
            $string = mb_substr($string, 0, $lg_max);
            $last_space = mb_strrpos($string, " ");
            if ($last_space !== false) {
                $string = mb_substr($string, 0, $last_space);
            }
            return $string . "...";
        }
        return $string;
    }

    public static function slugify(string $text): string
    {
        // Strip html tags
        $text = strip_tags($text);
        // Replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        // Transliterate
        setlocale(LC_ALL, 'en_US.utf8');
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // Remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        // Trim
        $text = trim($text, '-');
        // Remove duplicate -
        $text = preg_replace('~-+~', '-', $text);
        // Lowercase
        $text = strtolower($text);
        // Check if it is empty
        if (empty($text)) {
            return 'n-a';
        }
        // Return result
        return $text;
    }




    public static function formatDate(string $date, string $format = 'd/m/Y H:i'): string
    {
        $dt = new \DateTime($date);
        return $dt->format($format);
    }
}
