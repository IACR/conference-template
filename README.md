
> [!CAUTION]
> This installation file is out of date and is currently being rewritten. 
> If you have questions about the use of this template, contact 
> [Kay McKelly](https://github.com/kaymckelly).

---

# QUICKSTART GUIDE
These are the minimum initial changes you need to make to deploy the website. You will be working with json/metadata.json, contact.php, and nav.php.
## Adding Conference Name, Dates, & Location
Per the [IACR general chair guidelines](https://iacr.org/docs/genchair.pdf), you must [submit your event](https://www.iacr.org/events/edit.php) to the calendar of events. Once the event has been approved and is visible on the IACR website, you can [construct your metadata.json file](https://www.iacr.org/cryptodb/pc/). You cannot put up the website prior to the event being approved. The conference name, dates, and location will be automatically generated from the calendar of events listing.

## Adding the Program Committee
Using the [program committee creation form](https://www.iacr.org/cryptodb/pc/), you will generate your comm.json, which replaces the json/sample_comm.json. You should check that the program committee is visible on callforpapers.php.

## Changing Contact Info
In json/metadata.json, you can add the names of the general and program chair(s). These will then appear on multiple pages across the site. You will also need to update the contact email addresses on the contact page.

## Changing the nav.php as Additional Pages are Added
As you add additional pages to your website, you will need to update the includes/nav.php to show the pages in the navigation menu. When you first clone the site, the only pages that are visible in the nav are index.php, callforpapers.php, sponsors.php, and contact.php.

## Update Code of Conduct
Section 8.10 of the [IACR general chair guidelines](https://iacr.org/docs/genchair.pdf) requires an up to date code of conduct for each conference. You should edit the conduct.php accordingly. Sections that need editing will show up in red on the page because they are tagged with a class called “editMe”. This class is used throughout the site to indicate which pieces need editing prior to launch.
