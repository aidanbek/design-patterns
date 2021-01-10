<?php


namespace structural\composite;


use SplObjectStorage;

class CompositeComponent extends AbstractComponent
{
    private SplObjectStorage $children;
    private string $title;

    public function __construct(string $title)
    {
        $this->children = new SplObjectStorage();
        $this->title = $title;
    }

    public function add(AbstractComponent $component): void
    {
        $this->children->attach($component);
    }

    public function remove(AbstractComponent $component): void
    {
        $this->children->detach($component);
    }

    public function isComposite(): bool
    {
        return true;
    }

    public function operation(): void
    {
        echo 'Composite component ' . $this->title . ' operation<br>';
        foreach ($this->children as $child) {
            $child->operation();
        }
    }
}