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



## Translation

This project does not include a system for translations, but it would be nice to develop with i18n in mind.

URL's should be written as  `http://thebitcoincash.fund/en/page/`

**TODO:** *[@m4ktub](https://github.com/m4ktub) has already started the translation process for the original site, so perhaps I can check with him about how to make it easier for someone to translate in the future*

## Style Guide

Link to folders rather than directories. For example, use `http://thebitcoincash.fund/volunteer/success/` rather than `http://thebitcoincash.fund/volunteer/success.html`.

Most CSS (besides what is taken from Bootstrap) is  written according to the specs in [Maintainable CSS](https://maintainablecss.com/). Try to stick to the conventions listed in that short guide.