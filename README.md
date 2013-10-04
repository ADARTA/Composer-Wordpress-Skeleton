# Composer WordPress Skeleton

This is simply a skeleton repo for a WordPress site.  It is a light weight repo that will allow you to quickly setup your configuration.

It was inspired by [this post](http://roots.io/using-composer-with-wordpress/) by [Scott Walkinshaw](https://github.com/swalkinshaw)
Use it to jump-start your WordPress site repos, or fork it and customize it to your own liking!  If you do not have an idea how to use composer, you can also check out his [screencast](http://roots.io/screencasts/using-composer-with-wordpress/)

## Assumptions

* You have [Composer](https://github.com/composer/composer) installed.
* WordPress as a root install in `/wp/`
* Custom content directory in `/wp-content/` (cleaner)

## Questions & Answers

**Q:** What process do I follow after a clone?  
**A:** You will follow the next steps:

*  `compose install` ran from your command line in the cloned project directory
*  Rename or Copy `wp-config-edit-and-rename.php` to `wp-config.php` and change the necessary information changes (database, etc).
*  Run your project site `/wp/wp-admin/` and under Settings >> General change the Wordpress Address to have `/wp` like `http://www.example.com/wp` and your Site Address would be `http://www.example.com`
*  Now, go fork this repo and play around with some custom installs of your own.

**Q:** Why are you including the plugins that install?  
**A:** I like these as **MY** base, just fork this repo and create any list you want by changing the `composer.json` configuration.

**Q:** Why are there multiple composer json files?  
**A:** The `composer.json` file is the base file for an install with some nice plugins.  The others are my roots examples.  To use the examples just copy and paste from one of them or rename into `composer.json`.  I will add more as I find them useful. Fork and put in a pull request to add one, I might just add it!