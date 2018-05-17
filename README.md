# Craft 3 Locale Data

This repo contains fallback locale data for Craft 3 sites running on servers that don’t have PHP’s [Intl extension](http://php.net/manual/en/book.intl.php) installed.

To add support for a locale that Craft does not ship with, copy its [locale data file](locales/) into a `config/locales/` folder in your project.

If the `locales/` folder doesn't currently exist in your `config/` folder, you'll need to create it.
