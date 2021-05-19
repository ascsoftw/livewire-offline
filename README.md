# livewire-offline
Livewire Package to display Warning to User when they go Offline.

## Requirements

Make sure that [Livewire](https://laravel-livewire.com/) is installed properly on your project.

## Installation

You can install the Package using Composer

```bash
composer require ascsoftw/livewire-offline
```

## Usage

Put Livewire-component `@livewire('offline')` into your app layout.

Make sure to insert it into correct context because it will be positioned absolutely.

## Configurations

If you want to override the configurations, you must publish the assets using below command

```bash
php artisan vendor:publish --tag=config
```

This will publish the configuration file at `config/livewire-offline.php`. You can specify the following configurations
```php
return [
    'offline_text' => 'You are currenly Offline!',
    'use_tailwind' => true,
    //Specify Inline Styles if use_tailwind is set to false
    'background_color' => '#9ACD32', //if you specify hex code, prefix with #
    'text_color' => '#FF0000',
    //Specify TailwindCss Classes if use_tailwind is set to true
    'text_class' => 'text-red-600',
    'background_class' => 'bg-yellow-300',
];
```

You can also publish the View using below command
```bash
php artisan vendor:publish --tag=views
```

This will publish the Views in `resources/views/vendor/livewire-offline` directory which you can then customize.

## Troubleshooting
Your messages don't get styles while using TailwindCss? Please publish your view. Therefore Laravel Mix compiler will find package related views and will purge CSS accordingly.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## Credits

- [AscSoftwares](http://www.ascsoftwares.com)

## License
[MIT](https://choosealicense.com/licenses/mit/)

