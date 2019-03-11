<?php

namespace Tests;

use App\Multiply;
use App\MultiplyBy6Command;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * @group integration
 */
class MultiplyBy6CommandTest extends TestCase
{
  public function testExecute()
  {
     $command = new MultiplyBy6Command(new Multiply());
     $commandTester = new CommandTester($command);

     $commandTester->execute([
         'number' => '6',
     ]);
     $output = $commandTester->getDisplay();
     $this->assertSame("6 * 6 = 36\n", $output);
   }
}
