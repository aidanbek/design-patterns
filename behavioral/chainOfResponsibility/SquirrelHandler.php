<?php


namespace behavioral\chainOfResponsibility;


class SquirrelHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        return $request === 'Nut' ? "Squirrel: my food $request<br>" : parent::handle($request);
    }
}