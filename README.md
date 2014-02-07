# Composer WordPress Skeleton

This is simply a skeleton repo for a WordPress site.  It is a light weight repo that will allow you to quickly setup your configuration.

It was inspired by [this post](http://roots.io/using-composer-with-wordpress/) by [Scott Walkinshaw](https://github.com/swalkinshaw)
Use it to jump-start your WordPress site repos, or fork it and customize it to your own liking!  If you do not have an idea how to use composer, you can also check out his [screencast](http://roots.io/screencasts/using-composer-with-wordpress/)

## Assumptions

* You have [Composer](https://github.com/composer/composer) installed.
* WordPress as a root install in `/wp/`
* Custom content directory in `/wp-content/` (cleaner)
* Media uploads directory will be in `/media/` outside `wp` folder
* Changes can be made to the `/wp-content/wp-plugins/wp-setup.php` file to customize options.

## Questions & Answers

**Q:** What process do I follow after a clone?  
**A:** You will follow the next steps:

*  `composer install` ran from your command line in the cloned project directory
*  Rename or Copy `wp-config-edit-and-rename.php` to `wp-config.php` and change the necessary information changes (database, etc).
*  Run your project site `/wp/wp-admin/` and under Settings >> General change the Wordpress Address to have `/wp` like `http://www.example.com/wp` and your Site Address would be `http://www.example.com`
*  Now, go fork this repo and play around with some custom installs of your own.

**Q:** Why are you including the plugins that install?  
**A:** I like these as **MY** base, just fork this repo and create any list you want by changing the `composer.json` configuration.

**Q:** Why are there multiple composer json files?  
**A:** The `composer.json` file is the base file for an install with some nice plugins.  The others are my roots examples.  To use the examples just copy and paste from one of them or rename into `composer.json`.  I will add more as I find them useful. Fork and put in a pull request to add one, I might just add it!

* [Roots Branch](https://github.com/ADARTA/Composer-Wordpress-Skeleton/tree/roots-branch) - Try it.

**Q:** I copied the `composer-roots.json` to `composer.json` How do I compile and activate the roots theme?  
**A:** This will put [roots](https://github.com/roots/roots) into the `wp-content/theme/roots` folder, but you must run the `npm install` command from the roots folder. You will then run `grunt` or `grunt watch` to compile roots assets. Now you can activate the roots theme in you Wordpress site.

**Q:** I am getting a redirect error, how do I solve?  
**A:** More than likely, you are getting this error with a new setup.  Remember, this is a custom install path using composer. Your install path should look like `http://<server-name>/wp/wp-admin/install.php`.  By default, WordPress will try to go to the default `/wp-admin/` path, but you want `/wp/wp-admin/`.
