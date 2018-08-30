# SilverStripe Footer 

This is a really basic module that provides a couple of SiteConfig options which are commonly used on Twohill & Co projects.

It allows CMS admins to update their footer details themselves.

## Installation

```bash
composer require twohill/silverstripe-footer
```

## Usage

In your `footer.ss` (or wherever else you'd like to use it) simply call `$SiteConfig.Contact` and `$SiteConfig.Copyright`.

CMS Editors can edit the content of this at https://yoursite/admin/settings in the new `Footer` tab.
