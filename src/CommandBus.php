<?php namespace BigName\CommandComponents;

interface CommandBus
{
    public function execute(CommandRequest $request);
}
