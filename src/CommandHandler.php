<?php namespace BigName\CommandComponents;

/**
 * Interface CommandHandler
 * @package BigName\CommandComponents
 */
interface CommandHandler
{
    /**
     * @param CommandRequest $request
     * @return mixed
     */
    public function handle(CommandRequest $request);
} 
