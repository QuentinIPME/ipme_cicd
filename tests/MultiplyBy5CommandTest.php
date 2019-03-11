<?php

namespace Tests;

use App\Multiply;
use App\MultiplyBy5Command;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * @group integration
 */
class MultiplyBy5CommandTest extends TestCase
{
  public function testExecute()
  {
     $command = new MultiplyBy5Command(new Multiply());
     $commandTester = new CommandTester($command);

     $commandTester->execute([
         'number' => '5',
     ]);
     $output = $commandTester->getDisplay();
     $this->assertSame("5 * 5 = 25\n", $output);
   }
}
