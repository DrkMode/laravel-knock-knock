# Very simple site wide password protection for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/drkmode/laravel-knock-knock.svg?style=flat-square)](https://packagist.org/packages/:vendor_slug/:package_slug)
[![Total Downloads](https://img.shields.io/packagist/dt/drkmode/laravel-knock-knock.svg?style=flat-square)](https://packagist.org/packages/drkmode/filament-redirects)

This will add a simple password form in front of your application to protected it from any access. The password is
specified using the `.env` file to protect your sites, commonly used for DEV or STAGE sites. You can use multiple
passwords for different user groups. Once the password is removed, the access is revoked.

You can use multiple passwords for different user groups. Once the password is
removed, the access is revoked.

This does not protect any assets files like css or images.

__Looks like__

![SiteProtection](https://raw.githubusercontent.com/DrkMode/laravel-knock-knock/main/preview.jpg)

## Installation

```
composer require drkmode/laravel-knock-knock
```

### Laravel >= 5.2

This package requires at least the Laravel Framework of version **5.2**.

Add ServiceProvider to the providers array in `app/config/app.php`.

```
DrkMode\SiteProtection\SiteProtectionServiceProvider::class,
```

### Laravel >= 5.5

You don't need to add this package to your `app/config/app.php` since it supports auto discovery.

### Add Middleware

Add Middleware to `app/Http/Kernel.php` or specific routes you want to protect.

```
protected $middlewareGroups = [
    'web' => [
        ...
        \DrkMode\SiteProtection\Http\Middleware\SiteProtection::class,
    ],
    ...
];
```

### Configuration

Most configuration can be done using ENV variables by adding the following keys
to your `.env` file.

#### Adjusting the passwords

You can use multiple passwords separated by comma.

```
SITE_PROTECTION_PASSWORDS=password1,password2
```

To revoke access to your site simply change the password. This requires every
user using the old password to re-enter a password.

#### Exclude certain paths from protection

You can exclude specific paths from protection. Add a comma seperated list of paths to your
`.env` file. You can use the `*` to exclude a group of paths.

```
SITE_PROTECTION_EXCEPT_PATHS=path1,path2,login*
```

#### Protect only specific paths

You can protect only some paths. Add a comma seperated list of paths to your
`.env` file. You can use the `*` to protect a a group of paths.

```
SITE_PROTECTION_PROTECTED_ONLY_PATHS=path1,path2,admin*
```

#### Set a CSS file uri

You can change the look and feel of the password protection page by adding an uri
to your main css file. The css file is appened to the existing css styles to keep
basic alignments.

```
SITE_PROTECTION_CSS_FILE_URI=/assets/app.css
```

#### Set a Logo file path

You can add your own company or project logo by setting this `.env` variable to the path of the image.

```
SITE_PROTECTION_LOGO_PATH=/assets/logo.png
```

### Customization

In case you really need to. You can modify the view that handles password entry by publishing the views to your
resource folder. This is not recommended and might cause problems on future updates. Try using the uri to a css
file first.

Run the following command:

```
php artisan vendor:publish --provider="DrkMode\SiteProtection\SiteProtectionServiceProvider" --tag=views
```

You can now make the changes in `resources/vendor/views/site-protection/site-protection-form.blade.php`.
