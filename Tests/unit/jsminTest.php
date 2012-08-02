<?php
include_once __DIR__.'/../../jsmin.php';

/**
 * JsMin Unit Test
 */
class jsminTest extends PHPUnit_Framework_TestCase
{
    public function testMinify_1()
    {
        $result = JSMin::minify(file_get_contents(__DIR__.'/../fixtures/dojo.js'));
        $expected = file_get_contents(__DIR__.'/../fixtures/min/dojo.min.js');
        $this->assertEquals($expected, $result);
    }

    public function testMinify_2()
    {
        $result = JSMin::minify(file_get_contents(__DIR__.'/../fixtures/ext.js'));
        $expected = file_get_contents(__DIR__.'/../fixtures/min/ext.min.js');
        $this->assertEquals($expected, $result);
    }

    public function testMinify_3()
    {
        $result = JSMin::minify(file_get_contents(__DIR__.'/../fixtures/jquery.js'));
        $expected = file_get_contents(__DIR__.'/../fixtures/min/jquery.min.js');
        $this->assertEquals($expected, $result);
    }

    public function testMinify_4()
    {
        $result = JSMin::minify(file_get_contents(__DIR__.'/../fixtures/mootools.js'));
        $expected = file_get_contents(__DIR__.'/../fixtures/min/mootools.min.js');
        $this->assertEquals($expected, $result);
    }

    public function testMinify_5()
    {
        $result = JSMin::minify(file_get_contents(__DIR__.'/../fixtures/utf8-with-bom.js'));
        $expected = file_get_contents(__DIR__.'/../fixtures/min/utf8-with-bom.min.js');
        $this->assertEquals($expected, $result);
    }

    public function testMinify_6()
    {
        $result = JSMin::minify(file_get_contents(__DIR__.'/../fixtures/yui.js'));
        $expected = file_get_contents(__DIR__.'/../fixtures/min/yui.min.js');
        $this->assertEquals($expected, $result);
    }
}
