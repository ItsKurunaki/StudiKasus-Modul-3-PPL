<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/Notes')
                    ->assertSee('Laravel')
                    ->press('Create Note')
                    ->assertPathIs('/Notes')
                    ->type('title', 'Test Note')
                    ->type('content', 'This is a test note.')
                    ->press('Create');
        });
    }
}
