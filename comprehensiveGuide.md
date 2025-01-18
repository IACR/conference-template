# COMPREHENSIVE USER GUIDE
Detailed in this section are the types of things you can choose to handle yourself or you can pay Kay to do. It's open source so there's no warranty. You break it, that's what [git blame](https://www.atlassian.com/git/tutorials/inspecting-a-repository/git-blame) is for. :octocat:

You do not need to know Bootstrap per se, though if you are interested in doing more with the template, checkout out [Bootstrap's documentation](https://getbootstrap.com/docs/5.3/getting-started/introduction/). At a basic level, Bootstrap is a framework that helps improve the appearance and organization of a website. The template is built to load Bootstrap straight from iacr.org. **If you are using the template for a non-IACR conference you need to [load Bootstrap via CDN](https://getbootstrap.com/docs/5.3/getting-started/introduction/#cdn-links).**

## Dev environment setup
You will need to have [PHP](https://www.php.net/manual/en/install.php) installed, as it provides a basic server that is useful for testing. PHP is already installed on the iacr.org machine, but it's safest to work on your local machine. Ideally you will work with Github for version control and push changes directly to the IACR server when you are ready to launch.

In order to get started with the template, open a shell, change to your working directory, and clone the repository into same using `git clone https://github.com/IACR/conference-template.git .`

To run a rudimentary web server while you are working, use `php -S localhost:8000`. This will allow you to preview changes.

Go to http://localhost:8000 in your browser to see the website. Once you have verified the server is working, you can begin to edit the relevant files using a code editor of your choice (e.g., Emacs, SublimeText, Vi/Vim, Visual Studio Code, etc).

## Individual pages

### Add a new page
First, check to see if a generic page already exists: there are already pages for tourism, visas, financial support and student stipends, accommodations and hotels, affiliated events, etc.

To create a new page, start by copying `empty.php` and add a link to your new page from `includes/nav.php`. If you create the new page in a subdirectory, you will need to change all of the include paths on the page (i.e., `require 
“../includes/head.php”`)

### Delete a page
In addition to deleting the file, you will need to make sure the page is not linked from `includes/nav.php`.