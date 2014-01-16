### What is Sass
From [sass-lang.com](http://sass-lang.com/):
"Sass is an extension of CSS3, adding nested rules, variables, mixins, selector inheritance, and more. It’s translated to well-formatted, standard CSS using the command line tool or a web-framework plugin."

We use Sass to give structure, order, and power to our stylesheets. This document will explain how to set up a Sass environment for your local development, and supply a basic understand of file structure of this project.

### Installation and Setup
1. Install Ruby on your machine. If you’re using OS X, you’ll already have Ruby installed. Windows users can install Ruby via the [Windows installer](http://rubyinstaller.org/downloads/), and Linux users can install it via their package manager.
2. ```sudo gem install bundler``` to install the gem package manager
3. Navigate to the project via your command line and run ```bundle install```. This will download all of the required gems for the project
4. From that same directory, run ```compass watch``` to start compiling Sass into css.
5. To enable Chrome 'sourcemaps' use this more vurbose command instead ```sudo sass --compass --sourcemap --watch sass/screen.scss:stylesheets/screen.css```
### File Organization
* **img/sprites** - All png's placed into this folder get compiled into a singular sprite sheet, and Compass calculates the necessary background-position to use each one.
* **partials** - HTML components are broken up into php partials with similar naming to the Sass components mentioned below. This provides a clear picture of the site's region structure and allows for easier editing of each piece of component code.
* **sass** - Any file in this folder that does not start with an underscore gets compiled into the stylesheets folder
    * **base** - General, non-layout styles not attached to a specific block/component
        * **html** - Styles within the scope of the html tag, including individual element base styles, typography and font-faces, sprites
        * **page** - Styles within the scope of the body tag, supplying styles for each of the regions. Mostly backgrounds, borders, and other decoration
        * **vendor** - 3rd party CSS like Normalize.css or Slideshows
    * **components** - individual partials for each block/component on the page. examples are blog post, upcoming event, front-advert, reusable UI element. Components should be created with no knowledge of their parent containers, and therefore should be able to be placed into any region of the page.
        * these partials can be organized into folders by region or theme. Sass globbing allows us to import ALL of the files in this components folder without implicetely stateing them in our screen.scss file. This makes organizing and renaming much easier.
    * **global** - The basic rule of this folder is that all of these partials have zero output into the css file.
        * **mixins** - Mixins are reusable pieces of code that get printed to css every time that they are used. You can pass variables into mixins much like a PHP function. All mixins are sass-globbed so feel free separate out mixins into individual partials when suitable. The __misc-mixin.scss file has a double underscore, so it will be loaded first. Place any mixins that are required by OTHER mixins in that file.
        * **extends** - similar to mixins, extends allow you to re-use chunks of css, but instead of printing out the css each time it is used the original class is 'extended' and the extended selector is added to the list of selectors i.e. .extend, .extended-class, .other-extended-class{}. Extends are primarily used to apply title, copy, link and other decorative styles that are used over and over again in the design.
        * **_functions.scss** - Functions are little helpers that let you quickly run calculations and return some kind of output. This might get broken down into a folder and partials if this file gets too large.
        * **_variables.scss** - This important file lets you set a series of variables that determine colors, sizes, grid settings, breakpoints and other often used values. Most of the base typography styles are set here and then applied in the actual typography partial.
    * **layout** - seperating theme from layout is important in making modules highly re-usable. This folder holds all of layout styles for major page regions as well as individual presentation of blocks/components. Rule of thumb is that if you are position elements to the left or right, it should be done on the grid, in a layout partial. Layout partials are named by adding '-layout' to the end of the component file. So _widget.scss has a corresponding _widget-layout.scss file.
    * **style.scss** - The ONLY partial that actually gets compiled! This partial is simply a manifest of all of the partials, in order, as they should be compiled into the outputed css file. No actual styles ever get put into this file.

### Styling Philosophies
* If a style can be reused, it is usually best to create it as an extend ```global/extend``` and then apply it to the selector with @extend.
* Even if the style is only used once right now, creating it as an extend allows it to reused later, and keeps all of the title, copy, and decorative styles in a single place.
* By convention, we use the silent placeholder for any extend we create ```%extend-name```. This reduces the risk of extending more than one class, and helps to denote that this extend can be found in the extends folder.
* Decorative extends like image borders/rounded corners and box styles, like sidebar block backgrounds and borders, can also be found in the extends folder. This way it does not matter if we are applying this style to all of the sidebar blocks at once, or if we are applying it in every sidebar component partial, the styles can always be modified in the same place.

### Project Considerations
* While 'pixels perfection' is an ideal to be strived for, small provisions were made in order to adhere to a 10 column grid. This adherance allows us to convert this project into a responsive site with much less future work. I.E. all images are placed into the grid rather than hard coded with a pixel width value.
* A sprite sheet has been created to handle the various icons in this design. If SVGs were available it would be prefered to create a custom icon-font using [font-custom.com](http://font-custom.com/). This method would allow for great flexibility (change icon color, add text shadow etc) and would provide 'retina' support for hi-DPI devices.
*
