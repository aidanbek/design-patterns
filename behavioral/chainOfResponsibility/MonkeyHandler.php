<?php


namespace behavioral\chainOfResponsibility;


class MonkeyHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        return $request === 'Banana' ? "Monkey: my food $request<br>" : parent::handle($request);
    }
}