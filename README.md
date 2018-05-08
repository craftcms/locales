# Craft 3 Locale Data

This repo contains fallback locale data for Craft 3 sites running on servers that don’t have PHP’s [Intl extension](http://php.net/manual/en/book.intl.php) installed.

To add support for a locale that Craft does not ship with, copy its [locale data file](locales/) to a `locales/` folder in your project.

If you updated from Craft 2 and are using the older [Craft 2 directory structure](https://docs.craftcms.com/v3/upgrade.html#if-you-want-to-keep-your-current-directory-structure), it should exist at `craft/locales/`.

If you are using the newer [Craft 3 directory structure](https://docs.craftcms.com/v3/upgrade.html#if-you-want-your-directory-structure-to-resemble-a-new-craft-3-project), it should exist at your project’s root, alongside your `config/`, `storage/`, etc. folders.

In either case, if that folder doesn’t exist already, create it.
