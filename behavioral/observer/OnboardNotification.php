<?php


namespace behavioral\observer;


use SplObserver;
use SplSubject;

class OnboardNotification implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        echo "OnboardNotification: notification has been emailed - $subject->event<br>";
    }
}