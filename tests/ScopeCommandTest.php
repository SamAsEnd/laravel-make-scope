<?php

namespace SamAsEnd\ScopeMake\Tests;

use Illuminate\Foundation\Testing\PendingCommand;

class ScopeCommandTest extends TestCase
{
    /** @test */
    public function it_can_execute_the_make_scope_command()
    {
        $testResult = $this->artisan('make:scope TestingScope');

        if ($testResult instanceof PendingCommand) {
            $testResult->assertExitCode(0);
        }
        else {
            $this->assertEquals(0, $testResult);
        }

        $this->assertFileEquals(
            app_path('Scopes/TestingScope.php'),
            __DIR__.'/../stubs/scope_test.stub');
    }
}