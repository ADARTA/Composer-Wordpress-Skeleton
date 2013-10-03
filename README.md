# Composer WordPress Skeleton

This is simply a skeleton repo for a WordPress site.  It is a light weight repo that will allow you to quickly setup your configuration quickly.

It was inspired by [this post](http://roots.io/using-composer-with-wordpress/) by [Scott Walkinshaw](https://github.com/swalkinshaw)
Use it to jump-start your WordPress site repos, or fork it and customize it to your own liking!

## Assumptions

* You have [Composer](https://github.com/composer/composer) installed.
* WordPress as a root install in `/wp/`
* Custom content directory in `/wp-content/` (cleaner)

## Questions & Answers

**Q:** What process do I follow after a clone?  
**A:** You will follow the next steps:

* 1.  `compose install` ran from your command line in the cloned project directory
* 2.  Rename or Copy `wp-config-edit-and-rename.php` to `wp-config.php` and change the necessary information changes (database, etc).
* 3.  Run your project site `/wp/wp-admin/` and under Settings >> General change the Wordpress Address to have `/wp` like `http://www.example.com/wp` and your Site Address would be `http://www.example.com`
* 4.  Now, go fork this repo and play around with some custom installs of your own.

**Q:** Why are you including the plugins that install?  
**A:** I like these as **MY** base, just fork this repo and create any list you want by changing the `composer.json` configuration.
