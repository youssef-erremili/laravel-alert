# errehub/laravel-alert

This package is based on the Laravel Framework (php) and provides a simple, customizable way to manage alert messages in your Laravel application. With this package, you can easily display success, error, info, and warning messages to users via session flash messages and styled alerts.

# Installation

Use Composer to install the package. Make sure Composer is already installed in your project.

```shell
  composer require errehub/laravel-alert
```

# Setup

### 1. Publish CSS and JavaScript Assets
First, you need to publish the CSS and JavaScript files, run the following Artisan command. This will copy the files to the public/vendor/youssef-erremili directory:

```shell
  php artisan vendor:publish --tag=public
```

### 2. Include Alert Views in Your App Layout

Use @include('alert::alerts.alert') in your main layout file. This will include the alert component in your layout and make it available to all pages that extend this layout.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alert Example</title>
</head>
<body>
    @include('alert::alerts.alert')

    <!-- Example of calling an alert -->
    alert_success('Hello Youssef Erremili!')
</body>
</html>
```


### 3. Publish Alert View Components

To publish the package's Blade view components to resources/vendor/youssef-erremili, use the following command:

```shell
  php artisan vendor:publish --tag=views
```

# Usage

In this section, I will explain how to use the package in your Laravel project, both through the Facade in your Controller and using the helper function in your Blade files.

### 1. In Controllers
You can use the package's Facade or class instance in your controllers to display alerts.

```php
    use Errehub\LaravelAlert\AlertFacade as Notifier; // Import the Facade
    use Errehub\LaravelAlert\Alert; // Import the Alert class

    class AuthController
    {
        public function login()
        {
            // Using the AlertFacade via the Notifier alias:
            Notifier::success('You have logged in successfully');
            Notifier::error('Sorry, something went wrong. Please try again.');
            Notifier::info('You have a new notification');
            Notifier::warning('Please confirm if you want to proceed');

            // Using the Alert class directly:
            $alert = new Alert();
            $alert->success('Welcome, Youssef Erremili!');
            $alert->error('An error occurred.');
            $alert->info('This is an informational message.');
            $alert->warning('This is a warning message.');

            // Or alternatively:
            $alertMessage = (new Alert())->success('Welcome back!');
        }
    }
```

### 2. In Blade Templates
You can use helper functions in your Blade templates to display alerts.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alert Example</title>
</head>
<body>
    <!-- Example of calling an alert -->
    alert_success('Hello Youssef Erremili!')
</body>
</html>
```

# Customization
You can customize the alert views by modifying the Blade files published to resources/vendor/youssef-erremili.

# License
This package is open-source software licensed under the MIT license.

# Credits
Created by Youssef Erremili.