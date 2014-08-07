<?php namespace BigName\CommandComponents;

/**
 * Interface CommandBus
 * @package BigName\CommandComponents
 */
interface CommandBus
{
    /**
     * @param CommandRequest $request
     * @return mixed
     */
    public function execute(CommandRequest $request);
}
