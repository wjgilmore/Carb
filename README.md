# README

[Fat-Free](http://fatfree.sourceforge.net/) is without a doubt my favorite lightweight PHP framework, 
offering developers a rare combination of power and flexibility. No particular constraints are 
imposed upon an application's structure, freeing you to organize project resources in any conceivable manner.

Of course, after building a few Fat-Free-powered web applications, you'll come to a few conclusions regarding
exactly how you'd like to structure things moving forward. As these days I'm spending a fair bit of time both 
at work and outside of the office developing Fat-Free web and mobile applications, I built `carb` to assist
in the automated generation of my preferred project structure. If you're looking for an easy and efficient way 
to generate your own Fat-Free projects, give `carb` a try and [send me your feedback](https://github.com/wjgilmore/Carb/issues)!

## Installing carb

Save yourself a few extra steps and install `carb` by cloning its Git repository:

	$ git git@github.com:wjgilmore/carb.git
	
If you haven't yet availed yourself to the awesomeness that is Git and GitHub, then you
can download a zip file.
	
Then add `carb` to your PHP `include_path`. Open your `php.ini` file, and locate the `include_path` directive. Add
the path to the newly downloaded `carb` directory, as demonstrated here:

	include_path=".:/Users/wjgilmore/pear/share/pear:...:/Users/wjgilmore/php/extensions/carb"

Don't forget to restart Apache after saving `php.ini`.

Finally, add `carb` to your system path. The process varies according to your operating system.

## Running the `carb` CLI

To learn more about what `carb` can do, execute it from a terminal:

	$ php carb

## Creating a New Fat-Free Project

	$ php carb project local.wjgilmore.com
	TODO

## Creating a Project Controller

	$ php carb controller Account
	TODO

Use the `--suppress` option to creation of the `index` action and associated view:

	$ php carb controller Account --suppress
	TODO

### Creating a Controller Action

	$ php carb action Account login
	TODO

## License

No clue. Need to look into implications associated with Fat-Free's use of GPLv3.

## About

`carb` was created by [Jason Gilmore](http://www.wjgilmore.com/)  (wj@wjgilmore.com). Looking
 for a great introduction to PHP and MySQL? Check out Jason's bestselling [Beginning PHP and
 MySQL: From Novice to Professional](http://www.wjgilmore.com), now in its 4th edition! Want to learn more about
 another great framework? Check out Jason's bestselling [Easy PHP Websites with the Zend
 Framework](http://www.wjgilmore.com), which comes with the complete source code to [GameNomad](http://gamenomad.wjgilmore.com/).

## Contributions
Want to report a bug? Post an issue to `carb`'s [GitHub issue tracker](https://github.com/wjgilmore/Carb/issues). Want to 
contribute a cool new feature or fix a bug? Send me a pull request.

## TODO
