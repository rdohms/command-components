<?php namespace BigName\CommandComponents;

interface CommandHandler
{
    public function handle(CommandRequest $request);
} 
