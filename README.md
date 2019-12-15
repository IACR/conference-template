
# Conference Website Template

This is intended for all IACR conference websites (Crypto, Eurocrypt,
Asiacrypt, CHES, FSE, PKC, RWC, and TCC). If you are doing some other
conference, then [see below](#advanced-other-conferences).

This is a complete rewrite of the IACR conference template.  The
previous version of this template was written in javascript and
Bootstrap 3, but this one is written mostly in php and Bootstrap 4.
You should not try to mix the old version with the new version,
because they are incompatible.  The old template has been deprecated
and you should not try to copy the pages from an old conference.  That
version has been abandoned and there will be no futher updates.

This template should be much easier to work with. By using php, we are
able to store the top menu in a single file and have it show on every
page. You shouldn't need to learn php in order to use this template,
but it's easy to do because php is an extension of html.  Each page
consists of a file that ends in the `.php` extension so that the
server knows to process it as php before sending it out.


# INSTALLATION

You will need to have [php](https://www.php.net/manual/en/install.php)
installed on the machine you work on.  These are already installed on
the iacr.org machine, but it's best to work on your local machine, and
only push files to the live server once you are satisfied with them.

In order to host your website on the iacr.org server, you will need
login credentials from the IACR webmaster, but then you will be
assigned a directory like `/var/www/asiacrypt/html/2021`) for your
conference. If you place all the files from the template in that
directory, you will immediately be able to reference it via
https://crypto.iacr.org/2021. Note that you should substitute
asiacrypt with the name of your site (e.g., asiacrypt, eurocrypt, rwc,
etc). The links in the menu may be wrong, and those are controlled the
value of "year" in `json/metadata.json` [described below](#changing-the-conference-names/dates/location).

In order to get started with the template, simply open a shell, change
to your clean working directory, and type:

```
git clone https://github.com/kmccurley/conference-template.git .
```
**(NOTE THE DOT AT THE END OF THE PREVIOUS LINE)**

If you do not have git installed, then you can download a [zip file
with the
template](https://github.com/IACR/conference-template/archive/master.zip).
This creates a copy of the files for the site in your current
directory.  Next run the command ``` php -S localhost:8000 ``` Then
point your browser at http://localhost:8000 to see the website and
you'll see the conference demo website. Once you’ve verified it’s
serving correctly, you can begin to edit the relevant files.

___

### Differences between the IACR server and your development environment

The URLs on iacr.org start with
&lt;conference_name&gt;.iacr.org/&lt;year&gt;/ and for this reason the
root URL for the site is not at the root of the server. The file
`includes/nav.php` has a function that computes the base URL from 
the server name, and should work on both your local machine and the
iacr.org server.

___

### Changing the conference names/dates/location

The file `json/metadata.json` should be downloaded from
[http://iacr.org/cryptodb/pc](http://iacr.org/cryptodb/pc).  This file
contains year, conference names, latitude, longitude, etc, and
the settings there show up on all pages of the site. The year field
should match the path of the directory that you host your pages
from on iacr.org.

___

### Changing the names of the program committee

The program committee is stored in `json/comm.json`. You should go to
[http://iacr.org/cryptodb/pc](http://iacr.org/cryptodb/pc)
to download your program committee file. The IDs in the file are used
to enter the program committee into [Cryptodb](https://iacr.org/cryptodb).

___

### Adding your page content to individual pages (`*.php`)

All pages have included boilerplate content, based on the contents
from Crypto 2020. You will need to go through each
individual page and edit content that does not pertain to your
conference, as well as add your own information.

We **strongly** recommend proofreading the HTML to make sure all content
relates to your specific conference. Some content may not be ready at
the time that you first put your site up, so you can comment things
out in the pages with standard HTML comments `&lt;!--`

#### To delete a page

You can omit a page by deleting the php file and removing the link to
it in `includes/nav.php` (or anywhere else in the php files).

#### To add a new page

The process here is similar to deleting a page. Create your html page
by copying empty.php, add the link to the file in `includes/nav.php`,
and then edit the new page to add your content.

___

### Changing the contact information

The program chairs and general chair appear on both `callforpapers.php`
and `contact.php`. You will want to edit these.

___

### Updating the code of conduct page

Section 8.10 of the [General Chair
Guidelines](https://www.iacr.org/docs/genchair.pdf) requires an up to
date code of conduct for each conference. You should edit the
`conduct.php` accordingly. Sections that need editing will show up in
red on the page because they contain a span with class editMe.

At this point you should have a working first site, and you should copy
your files over to the iacr.org server in the appropriate directory.

___
### Further steps

When you first put up your site, you will probably only have basic information
about the call for papers, the program committee, the dates, etc. Later
on you will want to add more information in the individual pages:

* travel information
* visa information
* the link to the paper submission server.
* applications for affiliated events
* announcements of affiliated events.
* the list of accepted papers
* abstracts and biographies for invitedtalks.php
* the program
* the link to the registration server on secure.iacr.org.
* information about the rump session (if you have one)
* information about corporate sponsors (if any)

The list of accepted papers is stored in `json/papers.json`, and can
be exported from websubrev. The program is much more complicated, but
there is a tool at
[https://www.iacr.org/tools/program](https://iacr.org/tools/program)
to help you create the program from the list of accepted papers. This
tool provides you with an exported JSON file `json/program.json` that
will display your program on the program.php page. The format is
probably to complicated to construct from scratch, but there is a
[sample](https://crypto.iacr.org/2019/json/program.json) for Crypto
2019. The [tool](https://iacr.org/tools/program) provides a very easy
interface to build your program.

___

## Travel information
The travel page incorporates a map that is centered at the latitude, longitude
contained in [`json/metadata.json`](json/metadata.json). It should additionally show locations
of the airport, hotels, or locations of outings to help people plan their trip.
There is a tool at [https://iacr.org/tools/geocode/](https://iacr.org/tools/geocode/)
that will assist you in locating the latitude,longitude of points on the map.
Travel information resides in `travel.php` but there is an additional page
for visas if you need one.

___

# Optional
### Editing the navigation menu links and titles
The navigation menu is stored in includes/nav.php. If you want to add a new page
to the site, you need to create the file for it and add a link to it in this
nav.php file. If you want to remove a file, then you need to remove
it from this navigation (for example, if you don’t have a rump
session). Don't forget to delete the corresponding php file.

___

### Changing the default colors
The default theme is found in `styles/theme.css`. There are some other
stylesheets in styles for different color schemes. If you would like
to switch to a different color scheme, copy the contents of one of the
other color schemes (e.g. blue.css, green.css, etc) to replace 
theme.css. This will change the color scheme for the entire site.

___

### Editing the header image

The header image is specified in `styles/main.css` as
`.headerImg`. There are three default images you can choose from that
are found in `images/`. If you want to remove the background image
in the header, delete or comment out `.headerImg{background-size}`,
`.headerImg{background-image}`, and `.headerImg{background-position}` in
`styles/main.css`.

If you want to use a custom image, it *must* be 1200x480px or larger
(note that larger may affect page load time). Acceptable file formats
are .jpg, .png, or .gif. If using an animated gif, proceed with
caution as this has the potential to be supremely annoying and/or
negatively affect page load times.

Removing the header image will not remove the gradient effect. If you
would like to remove the gradient effect independent of the header
image, delete or comment out the background on .headerGradient in
`styles/theme.css`.

___

### Adding an update to the "Website Updates" panel on index.php

Look for the NOTE in index.php that says "add new website updates below this".
Copy/paste the following:
```
<div class="row">
  <div class="col-4">
    <p class="dateTitle">
      DATE OF UPDATE
    </p>
  </div>
  <div class="col-8">
    <p class="dateText">
      TEXT OF UPDATE
    </p>
  </div>
</div>
<hr />
```
and edit as desired.

