<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DelNotesTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * Test Login functionality.
     * @group delete
     */
    public function testdelnotes(): void
    {
        $this->browse(function (Browser $browser): void {
            $browser->visit('/Delete')
                    ->assertPathIs('/Delete');
        });
    }
}



