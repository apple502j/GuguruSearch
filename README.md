# GuguruSearch
GuguruSearch is a MediaWiki extension which adds some options for people who like to guguru. I am sure most people gugurud in your life.

## How to Use
The easiest way to use this extension is:
```php
wfLoadExtension("GuguruSearch");
```

\- of course you put in your LocalSettings.php.

But, if you love to configurate, you can.
```php
$wgGoogleSearchOptions = array(
    googlebot => "noarchive",
    sitesearch => true,
    translate => false,
    verify => "verifykey",
    unsafe => false
);
```

- `googlebot` options are just like `robots` options but only for Googlebot.
- If `sitesearch` is set to true (explicitly) a search option may appear after the search result. This does not affect MediaWiki's searching.
- If `translate` is set to true (explicitly) the page may be translated automatically when visiting.
- `verify` is for those who have Verify key.
- `unsafe`: you know what it does.
