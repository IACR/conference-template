
> [!CAUTION]
> This installation file is out of date and is currently being rewritten. 
> **The below quickstart guide does not convey the full extent of the 
> amount of work required to 
> maintain a conference website.**
> If you have questions about the use of this template, contact 
> [Kay McKelly](https://github.com/kaymckelly).

This is intended for all IACR conference websites (Crypto, Asiacrypt, Eurocrypt, CHES, FSE, PKC, RWC, and TCC). If you would like to use this template for another conference, see the [other conferences section](#non-iacr-conferences).

:japanese_ogre: **Do not copy over old conference websites from year to year!** :japanese_ogre: The purpose of this template is to have regular updates for bug fixes, performance, formatting, etc. The old templates are not compatible with the current version. Feature requests are welcome via [Github Issues](https://github.com/IACR/conference-template/issues/new) or you can contact [Kay](https://github.com/kaymckelly).

---

# QUICKSTART GUIDE
These are the minimum initial changes you need to make to deploy the website. You will be working with `includes/nav.php`, `json/metadata.json`, `callforpapers.php`, and `contact.php`.

> [!TIP]
> Do not underestimate the amount of work a conference website requires. The [after the quickstart](#after-the-quickstart) section will give you a rough idea.

## Adding conference name, dates, & location
Per the [IACR general chair guidelines](https://iacr.org/docs/genchair.pdf), you must [submit your event](https://www.iacr.org/events/edit.php) to the calendar of events. Once the event has been approved and is visible on the IACR website, you can [construct your metadata.json file](https://www.iacr.org/cryptodb/pc/). **You cannot put up the website prior to the event being approved!** Event approval is required in order to construct your metadata.json file, which in turn is required for the conference website.

## Changing contact info
In `json/metadata.json`, you can add the names of the general and program chair(s). These will then appear on multiple pages across the site. You will also need to update the contact email addresses on `contact.php`.

## Updating callforpapers.php
This is one of the pages that is initially included in the `includes/nav.php` and will need to be updated. It has generic information about stipends, awards, and the review schedule. All paper submission information should be added to `papersubmission.php`.

## Adding the program committee
Using the [program committee creation form](https://www.iacr.org/cryptodb/pc/), you will generate your comm.json, which replaces the `json/sample_comm.json`. You should check that the program committee is visible on callforpapers.php.

## Changing the nav.php as additional pages are added
As you add additional pages to your website, you will need to update the `includes/nav.php` to show the pages in the navigation menu. When you first clone the site, the only pages that are visible in the nav are `index.php`, `callforpapers.php`, `sponsors.php`, and `contact.php`.

## Updating the code of conduct
Section 8.10 of the [IACR general chair guidelines](https://iacr.org/docs/genchair.pdf) requires an up to date code of conduct for each conference. You should edit the `conduct.php` accordingly. Sections that need editing will show up in red on the page because they are tagged with a class called “editMe”. This class is used throughout the site to indicate which pieces need editing prior to launch.

---

## After the quickstart
This is a rough idea of what you will need to do after you have set up the website and added the call for papers:
1. Add paper submission information
2. Open submission server and add the link to it
3. Add accepted papers
4. Add call for artifacts or affiliated events, if applicable
5. Add venue & travel information
6. Add tourism information, if applicable
7. Add hotel and visa information
8. Add financial support information page
9. Add affiliated or co-located events pages, if applicable
10. Add awards and invited talks pages, if applicable
11. Add an updated code of conduct page
12. Add registration information
13. Open registration server and add link
14. Add the program
15. Add rump session page, if applicable
16. Update the program if there are schedule, talk title, or speaker changes
17. Add session chairs, slides, paper links, and speakers to the program

During the conference, you will also need to:
1. Add announcements to main page, if applicable
2. Update the program if there are last-minute schedule changes
3. Open rump session submissions and add link
4. Add rump session program once finalized

In addition to these steps, you will need to be:
* Updating the sponsors page as additional sponsorships come in
* Adding to the website updates

All this to say: do not underestimate the amount of work maintaining the website is.

---

## Non-IACR conferences
While this is not designed specifically for use by non-IACR conferences, it can certainly be used that way. If you would like to use this template for conferences outside of IACR, you will need to [load Bootstrap via CDN](https://getbootstrap.com/docs/5.3/getting-started/introduction/#cdn-links) rather than directly from IACR as it is currently written. You can also hire Kay on a freelance basis to handle your conference website, subject to her availability.

Like the warning in the comprehensive user guide, because this is open source, there is no warranty.

---

<!-- <details>
<summary>The comprehensive guide for intermediate to advanced users & confident DIYers</summary> -->

# COMPREHENSIVE USER GUIDE
Detailed in this section are the types of things you can choose to handle yourself or you can pay Kay to do. It's open source so there's no warranty. You break it, that's what [git blame](https://www.atlassian.com/git/tutorials/inspecting-a-repository/git-blame) is for. :octocat:

You do not need to know Bootstrap per se, though if you are interested in doing more with the template, [Bootstrap's documentation](https://getbootstrap.com/docs/5.3/getting-started/introduction/) is quite good. At a basic level, Bootstrap is a framework that helps to improve the appearance and organization of a website, known for [its grid system](https://getbootstrap.com/docs/5.3/layout/grid/). The template is built to load Bootstrap straight from iacr.org.

## Dev environment setup
You will need to have [PHP](https://www.php.net/manual/en/install.php) installed on the machine you work on; PHP provides a basic server that is useful for testing. PHP is already installed on the iacr.org machine, but it's safest to work on your local machine. Ideally you will work with Github for version control and push changes directly to the IACR server when you are ready to launch.

In order to get started with the template, open a shell, change to your working directory, and clone the repository into same using `git clone https://github.com/IACR/conference-template.git .`

To run a rudimentary web server while you are working, use `php -S localhost:8000`. This will allow you to view changes in real time.

Go to http://localhost:8000 in your browser to see the website. Once you have verified the server is working, you can begin to edit the relevant files using a code editor of your choice (e.g., Emacs, SublimeText, Vim, Visual Studio Code, etc).


<!-- </details> -->
