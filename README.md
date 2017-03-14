

## Overview -- MASTER BRANCH

Redesign of the Arcade Creek Project public website.

Team:

Check out the Wiki for updates and resources. Also, the Wiki will contain notes on the structuring and setup of the redesign.

Use the issue tracker to submit ideas, features, etc for team consideration.

How to Work on this Project: 
Start by forking the repository to your account. This gives you a personal copy of the project that you can work on whenever you want. When you create new features, add code, fix bugs, etc and feel that your work should be added to the main project, create a pull request to submit your code to the webmaster (Thomas, for the moment) for consideration. 

You'll note that this repo has two branches: the master branch tracks the code that is currently up on the website, while the redesign branch tracks the updated code. Eventually, the goal is to merge these branches, with the redesign code becoming the code that's up on the website. For now, this means changes to the current website should be made on the master branch, and redesign code should be on the redesign branch. 

### Installing in the Redesign Branch
Our redesign branch has the updated, modernized code, which includes updated and modernized build systems. Our system depends on Node.js, which you can download [here](https://nodejs.org/). Node.js comes with a package management tool called "npm". We need to install a package called Gulp (our build task runner); open a terminal window and run `npm install --global gulp`. (If this throws an error run `sudo npm install --global gulp`, then type your computer password when prompted). Once you have gulp installed, you can download the other necessary packages for our project. `cd` into the project directory root (not the website root in the app folder), then run `npm install`. Once that finishes, everything should be up and running. Test it out by running `gulp serve`, which should start the build process and open a browser window with a localhost server hosting the site.
