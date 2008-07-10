--TEST--
phpunit --verbose BankAccountTest ../../Samples/BankAccount/BankAccountTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--verbose';
$_SERVER['argv'][2] = 'BankAccountTest';
$_SERVER['argv'][3] = '../Samples/BankAccount/BankAccountTest.php';

require_once dirname(dirname(dirname(__FILE__))) . '/TextUI/Command.php';
?>
--EXPECT--
PHPUnit @package_version@ by Sebastian Bergmann.

BankAccountTest
...


Time: 0 seconds

OK (3 tests, 3 assertions)