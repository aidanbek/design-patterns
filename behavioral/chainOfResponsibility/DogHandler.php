<?php


namespace behavioral\chainOfResponsibility;


class DogHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        return $request === 'Meat' ? "Dog: my food $request<br>" : parent::handle($request);
    }
}