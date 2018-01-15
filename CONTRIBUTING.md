Contributing to TheBitcoinCash.Fund Website
=======================

## Introduction

Here's a quickstart guide to making changes to thebitcoincash.fund website.

All development decisions were based on following requirements:

1. Pages must load as fast as possible when measured by Google's [PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/)
1. It should be simple for future developers to build on
1. Small changes to the text must be as painless as possible


## Server

**TODO:** *Describe docker setup*


## CSS

The CSS is based on a stripped-down version of [Bootstrap 3](https://getbootstrap.com/docs/3.3/). This older framework was chosen because most developers are familiar with it and it has been thoroughly tested on both modern and old browsers.

The Bootstrap code has been heavily modified:

- Most code has been removed. Essentially whats left is the grid, forms, basic text and some helper classes
- The normalize code has been updated to a more modern version
- All margin-top's have been removed
- There is a new breakpoint (xl) added to for displays with widths of 1450+ pixels


## Javascript

Although a JS framework isn't really necessary for this project, a stripped-down version of jQuery is included in the build. Again, this older framework was chosen because it is well-known and heavily tested.

**TODO:** *Add info on custom jQuery build process*


## Build Process

I was intending to process builds with Grunt.

> **NOTE:** There is something I'm really not liking about building with Grunt. This stops less technical users from getting in and making a simple change to the text.

The CSS and Javascript files are modular and kept separate for easy maintenance and debugging. All CSS files are compacted and merged into one large file when built for production.

**TODO:** *Give general info on what grunt commands exist for this project (clean, build-dev, etc)*


## Grunt Specs

I'm nearly certain I'm going to rely on PHP rather than a complicated build system. The driving force behind this decision is that I want people to be able to get in and make simple changes to the site, without having to install NPM, grunt, etc.

While I transition to PHP, I want to keep a note of my original grunt specs for the build process: Here's what I wanted from grunt:

- a smooth, fast development environment
- concat and compress separate css files (separated for dev work, compressed for live)
- concat, minify and compress separate js files (separated for dev work, compressed for live)
- minify images
- upload files to dev env on change
- validate html (https://www.npmjs.com/package/grunt-html-validation)
- remove all whitespace on live page code


## Translation

This project does not include a system for translations, but it would be nice to develop with i18n in mind.

URL's should be written as  `http://thebitcoincash.fund/en/page/`

**TODO:** *[@m4ktub](https://github.com/m4ktub) has already started the translation process for the original site, so perhaps I can check with him about how to make it easier for someone to translate in the future*

## Style Guide

Link to folders rather than directories. For example, use `http://thebitcoincash.fund/volunteer/success/` rather than `http://thebitcoincash.fund/volunteer/success.html`.

Most CSS (besides what is taken from Bootstrap) is  written according to the specs in [Maintainable CSS](https://maintainablecss.com/). Try to stick to the conventions listed in that short guide.