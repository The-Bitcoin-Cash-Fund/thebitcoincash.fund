Contributing to TheBitcoinCash.Fund Website
=======================

## Introduction

Here's a quickstart guide to making changes to thebitcoincash.fund website.

All development decisions were based on following requirements:

1. Pages must load as fast as possible when measured by Google's [PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/)
1. It should be simple for future developers to build on
1. Small changes to the text must be as painless as possible


## Philosophy

My development philosophy is to always use the simplest and most popular technology for the task.

None of my tech choices for this project (PHP, Bootstrap, jQuery in particular) are new or exciting. However, most developers are familiar with them, and they have been thoroughly tested on both modern and legacy browsers.


## PHP

PHP is used for very basic functions like including headers and footers. It is not and should not be used for much more than that.


All internal links point to folders rather than directories. For example, links look like this

```
http://thebitcoincash.fund/volunteer/success/
```

rather than this

```
http://thebitcoincash.fund/volunteer/success.html
```

Because of this — as well as how little server-side scripting is actually used — changing to another language in the future should be trivial.


## Forms

Forms are currently submitted using [FormCarry.com](https://formcarry.com/).

In the future it shouldn't be difficult to switch to PHP for form submissions. I recommend including and building on the form-securing techniques [listed here](https://css-tricks.com/serious-form-security/). Hopefully something like that will reduce the need for captcha.

> **NOTE:** Form names start with a capital letter so that the results are readable in formcarry.com


## CSS

The CSS is based on a stripped-down version of [Bootstrap 3](https://getbootstrap.com/docs/3.3/). The Bootstrap code has been heavily modified:

- Most code has been removed. Essentially what's left is the grid, forms, basic text and some helper classes
- The normalize code has been updated to a more modern version
- All margin-tops have been removed

Most CSS (besides what is taken from Bootstrap) is written according to the specs in [Maintainable CSS](https://maintainablecss.com/). Try to stick to the conventions listed in that short guide.


## JavaScript

Although a JS framework isn't really necessary for this project, [jQuery 3.3.1](https://github.com/jquery/jquery) is included.


## Build Process

The CSS and JavaScript files are modular and kept separate for easy maintenance and debugging. The site uses the minified files (styles.min.css and scripts.min.js) by default. If you are debugging CSS or JS, change the following line in _config.php:

```
'debug' => false,
```

Setting `debug` to `true` will force the site to include each of the individual CSS and JS files so you can more easily find what you are looking for.

> **NOTE:** Once you have made changes to the individual CSS or JS files, you *must* run the Grunt build process below to minify the files with the new changes.


## Grunt

The BCF site can be updated and maintained without Grunt. However, making changes to CSS or JS will require that you download the source and rebuild the files. Here's a brief description of the available Grunt tasks:

**Grunt:** Running the basic `grunt` command will minify the CSS and JS files to styles.min.css and scripts.min.js respectively.

**Dev:** Running `grunt dev` will minify the CSS and JS files, upload them to the FTP server, and watch the files for changes.

**Force FTP:** Running `grunt force-ftp` will force the `ftp_push` task to upload all files — not just the recently modified files. This command is useful when setting up a new development server.


### Grunt Settings

Running Grunt will require that you create a settings.json file on your local computer. For obvious reasons this file is excluded from Git. This is what a complete settings.json file looks like:

```json
{
  "base_dir": "D:/Path/To/Project/Root/",
  "ftp_host": "ftp.yoursite.com",
  "ftp_dest": "ftp/path",
  "ftp_port": 21
}

```

If you want to use the FTP function, you'll also need to create an .ftpauth file with the following content:

```json
{
  "dev": {
    "username": "your_ftp_username",
    "password": "your_password"
  }
}
```


## Translation

This project does not include a system for translations, but it has been developed with i18n in mind.

URL's should be written as `http://thebitcoincash.fund/en/page/`

> **TODO:** [@m4ktub](https://github.com/m4ktub) has already started the translation process for the original site, so perhaps I can check with him about how to make it easier for someone to translate in the future
