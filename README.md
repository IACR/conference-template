
> [!CAUTION]
> This installation file is out of date and is currently being rewritten. 
> **The below quickstart guide does not convey the full extent of the 
> amount of work required to 
> maintain a conference website.**
> If you have questions about the use of this template, contact 
> [Kay McKelly](https://github.com/kaymckelly).

:japanese_ogre: **Do not copy over old conference websites from year to year!** :japanese_ogre: The purpose of this template is to have regular updates for bug fixes, performance, formatting, etc. The old templates are not compatible with the current version. Feature requests are welcome via [Github Issues](https://github.com/IACR/conference-template/issues/new) or you can contact [Kay](https://github.com/kaymckelly).

---

# QUICKSTART GUIDE
These are the minimum initial changes you need to make to deploy the website. You will be working with `includes/nav.php`, `json/metadata.json`, `callforpapers.php`, and `contact.php`.

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

<details>
<summary>The comprehensive guide for intermediate to advanced users & confident DIYers</summary>

# COMPREHENSIVE USER GUIDE
Detailed in this section are the types of things you can choose to handle yourself or you can pay Kay to do. It's open source so there's no warranty. You break it, that's what [git blame](https://www.atlassian.com/git/tutorials/inspecting-a-repository/git-blame) is for. :octocat:

</details>
