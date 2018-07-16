<?php

namespace App\Models\Services;

class TranslitService
{
    protected static $rutoen_map_upper = [
        'а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d',
        'е'=>'e', 'ж'=>'g', 'з'=>'z', 'и'=>'i', 'й'=>'y',
        'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o',
        'п'=>'p', 'р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u',
        'ф'=>'f',
        'ы'=>'i', 'э'=>'e', 'А'=>'A', 'Б'=>'B',
        'В'=>'V', 'Г'=>'G', 'Д'=>'D', 'Е'=>'E', 'Ж'=>'G',
        'З'=>'Z', 'И'=>'I', 'Й'=>'Y', 'К'=>'K', 'Л'=>'L',
        'М'=>'M', 'Н'=>'N', 'О'=>'O', 'П'=>'P', 'Р'=>'R',
        'С'=>'S', 'Т'=>'T', 'У'=>'U', 'Ф'=>'F', 'Ы'=>'I',
        'Э'=>'E',
        'ё'=>'yo', 'х'=>'h', 'ц'=>'ts', 'ч'=>'ch', 'ш'=>'sh',
        'щ'=>'sch', 'ъ'=>'', 'ь'=>'', 'ю'=>'yu', 'я'=>'ya',
        'Ё'=>'YO', 'Х'=>'H', 'Ц'=>'TS', 'Ч'=>'CH', 'Ш'=>'SH',
        'Щ'=>'SCH', 'Ъ'=>'', 'Ь'=>'', 'Ю'=>'YU', 'Я'=>'YA'
    ];

    protected static $rutoen_map = [
        'а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d',
        'е'=>'e', 'ж'=>'g', 'з'=>'z', 'и'=>'i', 'й'=>'y',
        'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o',
        'п'=>'p', 'р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u',
        'ф'=>'f',
        'ы'=>'i', 'э'=>'e', 'А'=>'A', 'Б'=>'B',
        'В'=>'V', 'Г'=>'G', 'Д'=>'D', 'Е'=>'E', 'Ж'=>'G',
        'З'=>'Z', 'И'=>'I', 'Й'=>'Y', 'К'=>'K', 'Л'=>'L',
        'М'=>'M', 'Н'=>'N', 'О'=>'O', 'П'=>'P', 'Р'=>'R',
        'С'=>'S', 'Т'=>'T', 'У'=>'U', 'Ф'=>'F', 'Ы'=>'I',
        'Э'=>'E',
        'ё'=>'yo', 'х'=>'h', 'ц'=>'ts', 'ч'=>'ch', 'ш'=>'sh',
        'щ'=>'sch', 'ъ'=>'', 'ь'=>'', 'ю'=>'yu', 'я'=>'ya',
        'Ё'=>'Yo', 'Х'=>'H', 'Ц'=>'Ts', 'Ч'=>'Ch', 'Ш'=>'Sh',
        'Щ'=>'Sch', 'Ъ'=>'', 'Ь'=>'', 'Ю'=>'Yu', 'Я'=>'Ya'
    ];


    /**
     * Transliterate ru to en.
     */
    public static function rutoen($str, $uppercase = false)
    {
        $map = $uppercase ? self::$rutoen_map_upper : self::$rutoen_map;
        $result = strtr($str, $map);
        return $result;
    }
}
