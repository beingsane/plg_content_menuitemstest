plg_content_menuitemstest
=========================

Joomla test plugin to show you how to use plugin events when saving Menu Items

#### Steps to test
This plugin was written with only 1 purpose: To test the new pull
request for adding Menu Item events to the Joomla core:
https://github.com/joomla/joomla-cms/pull/4449#issuecomment-57913073

To test with this plugin: 

1) Copy the files in the `source` folder to your Joomla folder. This should also create a folder `plugins/content/menuitemstest`
with two files (PHP + XML) in it.

2) Use the Extension Manager to discover and install this new plugin. It will popup as "Content - Menu Items Events Test".

3) Enable the plugin in the Plugin Manager.

4) Open up a Menu Item and save it. It should have created a log file `menuitem_test.log` in the Joomla folder `logs`.

#### Test result
Without the patch, nothing will be logged. With the patch, it should create a log file `logs/menuitem_test.log`.

### Give feedback on the test
If the log file is created, the test is succesful. Mention this test in
the PR thread:

    @test: succesful creation of log file with test plugin

### Troubleshooting
If the log file is not created, double-check that the log folder is
properly created in Joomla (check your `configuration.php` file) and is writable.

