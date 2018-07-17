<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = new user();
        $user->name = 'Diana Castro';
        $user->email = 'Diana@njit.com';
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm';
        $this->assertTrue($user->save());
    }
    public function testDelete() {
        $user = new user();
        $user->name = 'Diana Castro';
        $user->email = 'Diana@njit.com';
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm';
        $user->save();

        $this->assertTrue($user->delete());
    }
    public function testCollectionCount()
    {
        $users = User::All();
        $recordCount = $users->count();
        $this->assertInternalType(IsType::TYPE_INT, $recordCount);
    }

}
