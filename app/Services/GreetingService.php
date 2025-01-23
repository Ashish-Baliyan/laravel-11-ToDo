<?php
// File: app/Services/GreetingService.php
namespace App\Services;

class GreetingService
{
    protected $greetings = [
        'Hello!',
        'Hi there!',
        'Greetings!',
        'Welcome!',
        'Hey!'
    ];

    public function getRandomGreeting()
    {
        return $this->greetings[array_rand($this->greetings)];
    }
}
