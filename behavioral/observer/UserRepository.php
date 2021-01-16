<?php


namespace behavioral\observer;


use SplObserver;
use SplSubject;

class UserRepository implements SplSubject
{
    private const ALL_LISTEN = '*';

    private array $users = [];

    private array $observers = [];

    public ?string $event = '';

    /**
     * @var mixed
     */
    public $data = null;

    public function __construct()
    {
        $this->observers[self::ALL_LISTEN] = [];
    }

    public function initEventGroup(string $event = self::ALL_LISTEN): void
    {
        if (!isset($this->observers[$event])) {
            $this->observers[$event] = [];
        }
    }

    public function getEventObservers(string $event = self::ALL_LISTEN): array
    {
        $this->initEventGroup($event);
        $group = $this->observers[$event];
        $all = $this->observers[self::ALL_LISTEN];

        return array_merge($group, $all);
    }

    public function attach(SplObserver $observer, string $event = self::ALL_LISTEN): void
    {
        $this->initEventGroup($event);
        $this->observers[$event][] = $observer;
    }

    public function detach(SplObserver $observer, string $event = self::ALL_LISTEN): void
    {
        foreach ($this->getEventObservers($event) as $key => $s) {
            if ($s === $observer) {
                unset($this->observers[$event][$key]);
            }
        }
    }

    public function notify(string $event = self::ALL_LISTEN, $data = null): void
    {
        echo "user repository : broadcasting event $event<br>";
        foreach ($this->getEventObservers($event) as $observer) {
            $this->event = $event;
            $this->data = $data;
            $observer->update($this);
        }
        $this->event = null;
        $this->data = null;
    }

    public function initialize(string $filename): void
    {
        echo "user repository: loading users<br>";
        $this->notify('users:init', $filename);
    }

    public function createUser(array $data): User
    {
        echo "user repository: creating user<br>";
        $user = new User();
        $user->update($data);
        $id = bin2hex(openssl_random_pseudo_bytes(16));
        $user->update(['id' => $id]);
        $this->users[$id] = $user;

        $this->notify('users:created', $user);

        return $user;
    }

    public function updateUser(User $user, array $data): ?User
    {
        echo "user repository: updating user<br>";

        $id = $user->attributes['id'];

        if (!isset($this->users[$id])) {
            return null;
        }

        $user = $this->users[$id];
        $user->update($data);

        $this->notify('users:updated', $user);

        return $user;
    }

    public function deleteUser(User $user): void
    {
        echo "user repository: deleting user<br>";

        $id = $user->attributes['id'];

        if (!isset($this->users[$id])) {
            return;
        }

        unset($this->users[$id]);

        $this->notify('users:deleted', $user);
    }
}