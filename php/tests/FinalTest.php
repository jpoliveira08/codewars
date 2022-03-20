<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FinalTest extends TestCase
{
    protected $backupGlobalsBlacklist = ['object_oriented_php'];

    public function testAnonymity() {
        global $object_oriented_php;
        $this->assertTrue((new ReflectionClass($object_oriented_php))->isAnonymous(), "Object \$object_oriented_php must be an instance of an Anonymous Class!");
    }
}
