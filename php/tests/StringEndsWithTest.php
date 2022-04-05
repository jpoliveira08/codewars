<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use Codewars\Classes\StringEndsWith;

class StringEndsWithTest extends TestCase
{
    public function testFinalLettersMustBeTheSame()
    {
        $stringEndsWith = new StringEndsWith();
        static::assertEquals(true, $stringEndsWith->solution("samurai", "ai"));
        static::assertEquals(false, $stringEndsWith->solution("sumo", "omo"));
        static::assertEquals(true, $stringEndsWith->solution("ninja", "ja"));
        static::assertEquals(true, $stringEndsWith->solution("sensei", "i"));
        static::assertEquals(false, $stringEndsWith->solution("samurai", "ra"));
        static::assertEquals(false, $stringEndsWith->solution("abc", "abcd"));
        static::assertEquals(true, $stringEndsWith->solution("abc", "abc"));
        static::assertEquals(true, $stringEndsWith->solution("abcabc", "bc"));
        static::assertEquals(false, $stringEndsWith->solution('ails', 'fails'));
        static::assertEquals(true, $stringEndsWith->solution('fails', 'ails'));
        static::assertEquals(false, $stringEndsWith->solution('this', 'fails'));
        static::assertEquals(true, $stringEndsWith->solution('yes this will pass', ''));
        static::assertEquals(false, $stringEndsWith->solution('this will not pass', '`^$<>()[]*|'));
        static::assertEquals(false, $stringEndsWith->solution("abc\n", 'abc'), 'Watch out for \n in the end');
    }
}