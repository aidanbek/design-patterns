<?php


namespace behavioral\observer;


use SplObserver;
use SplSubject;

class Logger implements SplObserver
{
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function update(SplSubject $subject)
    {
        $entry = date("Y-m-d H:i:s") . " - $subject->event with data" . json_encode($subject->data) . "\n";
        file_put_contents($this->filename, $entry, FILE_APPEND);

        echo "logger: wrote $subject->event entry<br>";
    }
}