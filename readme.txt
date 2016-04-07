=== Advanced Custom Fields: File Picker Field ===
Contributors: David Smith (@get_dave)
Tags: file,selector,icons,picker
Requires at least: 3.5
Tested up to: 3.8.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

SHORT_DESCRIPTION

An Advanced Custom Field to pick a file from a chosen directory.

EXTENDED_DESCRIPTION

Provides a custom field type for Advanced Custom Fields which allows the user to pick a file from a directory within the currently active Theme.

The Plugin provides "globbing" functionality enabling the user to optionally filter which files within the chosen directory should be available for selection. Globbing rules follow the rules used by the 
PHP Glob function (http://php.net/manual/en/function.glob.php)

= Compatibility =

This ACF field type is compatible with:
* ACF 5


== Installation ==

1. Copy the `acf-file_picker` folder into your `wp-content/plugins` folder
2. Activate the File Picker plugin via the plugins admin page
3. Create a new field via ACF and select the File Picker type
4. Provide the path the directory (relative to your Theme) containing the files you wish to pick from
5. (Optionally) provide a globbing pattern to filter the files you wish to be available to choose from (defaults to all files)

== Changelog ==

= 1.1.2 =
* Add annotations to Plugin comment block so details show up in WP Plugins in the Admin.

= 1.1.1 =
* ...something

= 1.1.0 =
* Addition of basic automated tests

= 1.0.0 =
* Initial Release.