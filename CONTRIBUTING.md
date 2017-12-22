Contributing to TheBitcoinCash.Fund
=======================

## Introduction


## CSS

The CSS is based on a stripped-down version of Bootstrap 3. This older framework was chosen because most developers are familiar with it and it has been thoroughly tested on both modern and old browsers.

The Bootstrap code has been heavily modified:
- Most code has been removed. Essentially only the grid, forms and some helper classes remain.
- The old normalize code in Bootstrap has been updated to a more modern version. Also, all margin-top's have been removed to match more modern design standards.
- There is a new breakpoint (xl) added to for 1450+ pixel disaplys.

The CSS files are modular and kept separate for easy maintenance and debugging. All CSS files are compacted and merged into one large file when built for production.

Most CSS (besides what is taken from Bootstrap) is  written according to the specs in [Maintainable CSS](https://maintainablecss.com/chapters/introduction/). Try to stick to the conventions listed in that short guide.


## JS

Although a JS framework isn't really necessary for this project, a stripped-down version of jQuery is included in the build. Again, this older framework was chosen because it is well-known and heavily tested.

[ TODO: Add info on custom jQuery build process ]


## Build Process

Builds are processed using Grunt.


