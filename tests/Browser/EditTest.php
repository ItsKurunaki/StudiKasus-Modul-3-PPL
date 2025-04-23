<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/notes')
                    ->press('Edit')
                    ->assertPathIs('/notes/edit')
                    ->assertSee('Edit Note')
                    ->type('title', 'Updated Note Title')
                    ->type('content', 'Updated content for the note.')
                    ->press('Update');
        });
    }
}
