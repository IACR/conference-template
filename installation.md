# Mandatory
### Pre-installation
Make sure you have git installed on the server where you plan to deploy the conference site.

___

### Getting the site on the server
Log into the server and cd to a temporary directory. Type:

`git clone https://github.com/kaymckelly/freelance-iacr.git .` (Note the period at the end.)

This creates a copy of the files for the site in your current directory. All files in the /www subdirectory should be moved to location where your web server will serve the content from. We’ll call that directory WebHome. Once you move the files to the subdirectory WebHome, you should cd there.

Verify that the web server is serving from there by visiting the appropriate URL in your browser. You should see the conference demo website. Once you’ve verified it’s serving correctly, you can begin to edit the relevant files.

___

### Changing the conference names/dates/location
Open /www/json/metadata.json. Editing this will change the places where this text would appear throughout all pages. Load the site again and you should see the changes you’ve made.

If you need to generate a JSON file for your conference, go here: [http://www.iacr.org/cryptodb/pc].

___

### Changing the names of the program committee
Open /www/json/comm.json. Editing this will change the places where this text would appear throughout all pages.

Please remember that first names should be included as they appear on the papers, rather than first initials. There is a tool at [http://www.iacr.org/cryptodb/pc] to help you generate this file. You can also edit the existing example file that comes with this template if you prefer.

Make sure your file is encoded as UTF-8.

___

### Adding your page content to individual pages (`*.html`)
All pages have included boilerplate content, sometimes based on other conferences hosted by IACR. You will need to go through each individual page and edit content that does not pertain to your conference, as well as add your own information.

While we have tried our best to remove all conference-specific references from the HTML and have these imported from JSON, we *strongly* recommend proofreading the HTML to make sure all content relates to your specific conference.

#### To delete a page
You can omit a page by deleting the html file and removing the link to it from /fragments/nav.html.

#### To add a new page
The process here is similar to deleting a page. Create your html page by copying empty.html, add the link to /fragments/nav.html, and then edit the new page to add your content.

___

### Changing the contact information
The program chairs and general chair appear on both callforpapers.html and contact.html. You will want to edit these.

At this point you should have a working site. The steps below this are optional.

___
___

# Optional
### Editing the left navigation menu links and titles
Open /www/fragments/nav.html. If you want to add a new page to the site, you need to create the file for it and add a link to it in this nav.html file. If you want to remove a file, then you need to remove it from this navigation (for example, if you don’t have a rump session). Don't forget to delete the corresponding file.

___

### Editing the header image
The header image is specified in /styles/main.css as .headerImg. There are three default images you can choose from (defaultbg1_crop.jpg, etc). If you want to remove the background image in the header, delete or comment out .headerImg{background-side}, .headerImg{background-image}, and .headerImg{background-position} in /styles/main.css.

If you want to use a custom image, it *must* be 1200x480px or larger (note that larger may affect page load time). Acceptable file formats are .jpg, .png, or .gif. If using an animated gif, proceed with caution as this has the potential to be supremely annoying and/or negatively affect page load times.

Removing the header image will not remove the gradient effect. If you would like to remove the background image and the gradient on the page header, delete or comment out everything *except* .headerGradient{margin-bottom}. This must be done in /styles/orange.css (or whichever color theme you have decided to use).

___

### Changing the default colors
The default theme is found in /styles/theme.css. There are some other stylesheets in /styles for different color schemes. If you would like to switch to a different color scheme, copy the contents of one of the other color schemes (e.g. blue.css, green.css, etc) and paste it into theme.css. This will change the color scheme for the entire site.

Please do **NOT** add styles in any HTML document; all added styles should go in theme.css.

___

### Adding an update to the "Website Updates" panel on index.html
Look for the NOTE in index.html that says "add new website updates below this". Copy/paste the following:
```
<div class="row">
  <div class="col-xs-4">
    <p class="dateTitle">
      DATE OF UPDATE
    </p>
  </div>
  <div class="col-xs-8">
    <p class="dateText">
      TEXT OF UPDATE
    </p>
  </div>
</div>
<hr />
```
and edit as desired.
