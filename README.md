# Composer WordPress Skeleton

This is simply a skeleton repo for a WordPress site.  It is a light weight repo that will allow you to quickly setup your configuration.

It was inspired by [this post](http://roots.io/using-composer-with-wordpress/) by [Scott Walkinshaw](https://github.com/swalkinshaw)
Use it to jump-start your WordPress site repos, or fork it and customize it to your own liking!  If you do not have an idea how to use composer, you can also check out his [screencast](http://roots.io/screencasts/using-composer-with-wordpress/)

## Assumptions

* You have [Composer](https://github.com/composer/composer) installed.
* WordPress as a root install in `/wp/`
* Custom content directory in `/wp-content/` (cleaner)
* Media uploads directory will be in `/media/` outside `wp` folder
* Changes can be made to the `/wp-content/mu-plugins/wp-setup.php` file to customize options.

## Questions & Answers

**Q:** What process do I follow after a clone?  
**A:** You will follow the next steps:

*  `composer install` ran from your command line in the cloned project directory
*  Rename or Copy `wp-config-edit-and-rename.php` to `wp-config.php` and change the necessary information (database, etc).
*  Run your project site `/wp/wp-admin/` and under Settings >> General change the Wordpress Address to have `/wp` like `http://www.example.com/wp` and your Site Address would be `http://www.example.com`
*  Now, go fork this repo and play around with some custom installs of your own.

**Q:** Why are you including the plugins that install?  
**A:** I like these as **MY** base, just fork this repo and create any list you want by changing the `composer.json` configuration.

**Q:** Why are there multiple branches with modified composer json files?  
**A:** The `composer.json` file in the master branch is the base install with some nice plugins.  The other branches include my roots examples.  To use the examples just checkout the branch.  I will add more as I find them useful.

* [Roots Branch](https://github.com/ADARTA/Composer-Wordpress-Skeleton/tree/roots-branch) - Try it.

**Q:** I made changes by adding a plugin in the `composer.json` How do I get it into my project?  
**A:** You must run the `npm install` command from the checkout root folder.

**Q:** I am getting a redirect error, how do I solve?  
**A:** More than likely, you are getting this error with a new setup.  Remember, this is a custom install path using composer. Your install path should look like `http://<server-name>/wp/wp-admin/install.php`.  By default, WordPress will try to go to the default `/wp-admin/` path, but you want `/wp/wp-admin/`.
