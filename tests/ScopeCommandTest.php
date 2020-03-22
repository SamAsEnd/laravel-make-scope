<?php

namespace SamAsEnd\ScopeMake\Tests;

class ScopeCommandTest extends TestCase
{
    /** @test */
    public function it_can_execute_the_make_scope_command()
    {
        $testResult = $this->artisan('make:scope TestingScope')
            ->assertExitCode(0)
            ->execute();

        $this->assertFileExists(app_path('Scopes/TestingScope.php'));

        $this->assertFileEquals(
            __DIR__.'/../stubs/scope_test.stub',
            app_path('Scopes/TestingScope.php')
        );
    }
}
