# Command Components

This package provides components for implementing command-oriented-interfaces.

## Interfaces

[**CommandBus**](https://github.com/heybigname/command-components/blob/master/src/CommandBus.php)
```php
public function execute(CommandRequest $request);
```

[**CommandHandler**](https://github.com/heybigname/command-components/blob/master/src/CommandHandler.php)
```php
public function handle(CommandRequest $request);
```

[**CommandRequest**](https://github.com/heybigname/command-components/blob/master/src/CommandRequest.php)

[**CommandResponse**](https://github.com/heybigname/command-components/blob/master/src/CommandResponse.php)

## Installation

Run the command below to install via Composer

```shell
composer require heybigname/command-components
```
