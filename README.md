
# Conference Website Template

This is intended for all IACR conference websites (Crypto, Eurocrypt,
Asiacrypt, CHES, FSE, PKC, RWC, and TCC). If you are doing some other
conference, then [see below](#advanced-other-conferences).

This is a complete rewrite of the IACR conference template.  The
previous version of this template was written in javascript and
Bootstrap 3, but this one is written mostly in php and Bootstrap 4.
You should not mix the old version with the new version,
because they are incompatible.  The old template has been deprecated
and you should not copy the pages from an old conference.  That
version has been abandoned and there will be no futher updates.

You do not need to know bootstrap, because most pages already contain
the bootstrap DOM structure that is needed, and you can cut and paste
from other pages if you see something you like (e.g., a card).  The
most basic things are handled for you, and you simply need to edit the
content in the &lt;main&gt; element of a page. If you find that you
can't understand something, the [documentation for
bootstrap](https://getbootstrap.com/docs/4.4/getting-started/introduction/)
is quite good. The most basic thing is to understand the bootstrap
[grid system](https://getbootstrap.com/docs/4.4/layout/grid/) for
columns that work on both mobile and desktop. You shouldn't need to
download anything provided you are online, because the template is
built to load bootstrap straight from iacr.org.

___

# INSTALLATION

You will need to have [php](https://www.php.net/manual/en/install.php)
installed on the machine you work on (you do _not_ need a web server
like apache, because php provides a basic one).  `php` is already
installed on the iacr.org machine, but it's best to work on your local
machine, and only push files to the live server once you are satisfied
with them.

In order to get started with the template, simply open a shell, change
to your working directory, and type:

```
git clone https://github.com/IACR/conference-template.git .
```
**(NOTE THE DOT AT THE END OF THE PREVIOUS LINE)**

If you do not have git installed, then you can download a [zip file
with the
template](https://github.com/IACR/conference-template/archive/master.zip).
This creates a copy of the files for the site on your machine, but
it will make it harder to pull in subsequent changes made to the
template.  Next make sure you are in the directory containing
`acceptedpapers.php` and run the command

```
php -S localhost:8000
```

Then point your browser at http://localhost:8000 to see the website.
Once you’ve verified it’s serving correctly, you can begin to edit the
relevant files.

## REQUIRED: THE BASICS

There are a number of places in the pages that require you to edit
them, but you are free to edit anything you like. Some things are
supplied by downloading a json file for basic metadata,
the program committee, and the program. Other things require you
to edit the text in a specific page, and we have marked them with
`class="editMe"` to make them stand out in red. When you edit these
things, you should remove the `"editMe"` class.

### Changing the conference names/dates/location

Assuming that your conference is listed in the [IACR calendar of
events](https://iacr.org/events), you should be able to download the
`json/metadata.json` file from
[http://iacr.org/cryptodb/pc](http://iacr.org/cryptodb/pc).  This file
contains year, conference names, latitude, longitude, etc, and the
settings there show up on all pages of the site. The `year` field should
match the path of the directory that you host your pages from on
iacr.org.

Different conferences will have different kinds of dates:

* some conferences have a deadline to propose affiliated events
* some conferences have a rebuttal phase
* some conferences have papers submitted to a journal first (ToSC or TCHES)
* some conferences have only nominations for speakers (RWC)

You should change `includes/important_dates.php` to reflect the dates that
are relevant to your conference. These will show up in several different
pages, but there is a single file where your important dates need to be
updated.

### Changing the names of the program committee

The program committee is stored in `json/comm.json`. You should go to
[http://iacr.org/cryptodb/pc](http://iacr.org/cryptodb/pc)
to download your program committee file. The IDs in the file are used
to enter the program committee into [Cryptodb](https://iacr.org/cryptodb)
so be careful if you edit this file by hand. The program committee will
show up in the `callforpapers.php` page.


### Changing the contact information

The program chairs and general chair appear on both `callforpapers.php`
and `contact.php`. You will want to edit these.

### Updating the code of conduct page

Section 8.10 of the [General Chair
Guidelines](https://www.iacr.org/docs/genchair.pdf) requires an up to
date code of conduct for each conference. You should edit the
`conduct.php` accordingly. Sections that need editing will show up in
red on the page because they contain a span with class `editMe`.

### Adding your page content to individual pages (`*.php`)

All pages have included boilerplate content, some of which is
commented out.  **You will need to go through each individual page and
edit content that does not pertain to your conference, as well as add
your own information.** As mentioned before, some content has a
`class="editMe"` to indicate that you should edit it.

We **strongly** recommend proofreading the HTML to make sure all content
relates to your specific conference. Some content may not be ready at
the time that you first put your site up, so you can comment things
out in the pages with standard HTML comments: &lt;!--  this is a comment --&gt;

#### To delete a page

You may not need every page (e.g., you may not have a rump session).
You can omit a page by deleting the php file and removing the link to
it in `includes/nav.php` (or anywhere else in the php files).

#### To add a new page

Let's say you want a separate page for an affiliated event called
`event1.php`. You would create the page by copying `empty.php` to
`event1.php`, and then edit `event1.php` to add your content. Then
you can create a link to it from the `affiliated.php` file, or create
a menu item in `includes/nav.php` to link to it.

If you create your new page in a subdirectory, then you will need to
change all of the `include` paths in empty.php when you copy it, e.g., use
```
require "../includes/head.php";
```

___

# Deployment to the IACR server

In order to host your website on the iacr.org server, you will need
login credentials from the IACR webmaster. You will then be
assigned a directory like `/var/www/asiacrypt/html/2021`) for your
conference. If you place all the files from the template in that
directory, you will immediately be able to reference it via
https://asiacrypt.iacr.org/2021. Obviously you should substitute
asiacrypt with the name of your conference (e.g., crypto, eurocrypt,
rwc, tcc, etc).

The URLs on iacr.org start with
&lt;conference_name&gt;.iacr.org/&lt;year&gt;/ and for this reason the
root URL for the site is not at the root of the server. The file
`includes/nav.php` has a function that computes the base URL from 
the server name, and should work on both your local machine and the
iacr.org server.

___

# Additional steps

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

### Accepted papers

The list of accepted papers is stored in `json/papers.json`, and can
be exported from websubrev. Once that file exists, it should show up
in the `acceptedpapers.php page`. The format of the file is shown
in `json/sample_papers.json`.

### Program

The program is more complicated, but there is a tool at
[https://www.iacr.org/tools/program](https://iacr.org/tools/program)
to help you create the program from the list of accepted papers. This
tool provides you with an exported JSON file `json/program.json` that
will display your program on the program.php page. The program will
probably need updating several times when you add session chairs,
links to papers, links to slides, etc. The
[tool](https://iacr.org/tools/program) is designed to make this
process very easy.

### Travel information

Travel information resides in `travel.php` but there is an additional
page for visas if you need one.  The `travel.php` page incorporates a
map that is centered at the latitude, longitude contained in
[`json/metadata.json`](json/metadata.json).  It was assumed that your
latitude, longitude is the location of the venue, so please check
that. There is a piece of javascript in `travel.php` that places pins
on the map at the appropriate places, and you should update that to
provide information about airport, train station, hotels, or locations
of outings in order to help people plan their trip. There is a tool at
[https://iacr.org/tools/geocode/](https://iacr.org/tools/geocode/)
that will assist you in locating the latitude, longitude of points on a
map.

### Invited talks

Invited talks are in `invitedtalks.php`. There is boilerplate content
commented out there that will serve as a good starting point.

### Rump session

If you choose to have a rump session, it's good to put the schedule
online on the rumpsession.php page. There is no official way to organize
submissions for a rump session, or what the program should look like.
You may wish to use the [program editor](https://iacr.org/tools/program/)
to organize the program, and then build something like program.php
for your rump session page.

___

# Optional Customization

### Changing the default colors

You can choose from several different "themes" that provide different color
combinations and layout of the menus. These are controlled in the file
`includes/head.php`, which by default includes `styles/orange_theme.css`. You
can change that to any file of the `styles/*_theme.css` files (or make your
own). If you choose a different file, it will change the color scheme for the
entire site. We recommend that you try a few to see what you prefer. There is a
page to view the different themes located at [this
page](https://iacr.org/tools/confdemo/). Some of the themes have a photograph or
banner image at the top, and the next section has instructions to change that.

If you are trying out different themes, you may need to [disable the browser
cache](https://en.wikipedia.org/wiki/Wikipedia:Bypass_your_cache) to see the
change, because browsers ordinarily cache css and javascript files.  You might
also try
[(chrome)](https://nicholasbering.ca/tools/2016/10/09/devtools-disable-caching/)
or [(firefox)](https://support.mozilla.org/en-US/questions/1103414)
instructions.

___

### Changing the header image

Once you choose a theme, you can also choose a header image for themes
that have a banner across the top.  The header image is specified in the themes
file mentioned in the previous section, as `.headerImg`. There are several
default images located in the `images/banners/` directory. Each theme currently
uses a different banner, but you can freely mix them by changing the
`background-image` in `.headerImg` of the theme file.

If you want to remove the background image in the header, delete or
comment out `.headerImg{background-size}`,
`.headerImg{background-image}`, and `.headerImg{background-position}`
in your css file from `styles/`.

If you want to use a custom image, it *must* be 1200x480px or larger
(note that larger may affect page load time). Acceptable file formats
are .jpg, .png, .svg, or .gif. You should not use an animated gif, as
this has the potential to be supremely annoying and/or negatively
affect page load times.

Some of the themes have a gradient effect overlaying the header image.  If you
would like to remove the gradient effect independent of the header image, delete
or comment out the background on .headerGradient in the relevant theme file.
Be careful to make sure the conference name is still readable on top of
the photo.

___

### Adding an update to the "Website Updates" panel on index.php

As you make changes to the website, you should update the "Website Updates" card
in `index.php`.  Look for the NOTE in `index.php` that says "Update this to add
a row" and copy the `div` that has the form
```
<div class="customCardRow row">
```
Then edit the new row as desired.
