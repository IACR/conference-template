# Mandatory
### Pre-installation
Make sure you have git installed on the server where you plan to deploy the conference site.

___

### Getting the site on the server
Log into the server and cd to a temporary directory. Type:

``git clone https://github.com/kaymckelly/freelance-iacr.git .`` (Note the period at the end.)

This creates a copy of the files for the site in your current directory. All files in the /www subdirectory should be moved to location where your web server will serve the content from. We’ll call that directory WebHome. Once you move the files to the subdirectory WebHome, you should cd there.

Verify that the web server is serving from there by visiting the appropriate URL in your browser. You should see the CRYPTO 2017 website. Once you’ve verified it’s serving correctly, you can begin to edit the relevant files.

___

### Changing the conference names/dates/location
Open /json/metadata.json. Editing this will change the places where this text would appear throughout all pages.

Load the site again and you should see the changes you’ve made.

___

### Changing the names of the program committee
Open /json/comm.json. Editing this will change the places where this text would appear throughout all pages.

Please remember that first names should be included as they appear on the papers, rather than first initials. There is a tool at [http://www.iacr.org/cryptodb/pc] to help you generate this file.

Make sure to use unicode encoding for special characters. If you would like, you can also use general escape codes (e.g. ``\u00E5``). You can use [http://www.mobilefish.com/services/unicode_escape_sequence_converter/unicode_escape_sequence_converter.php] if you'd like to convert unicode characters to unicode escape codes.

___

### Adding your page content to individual pages (``*.html``)
All pages have included boilerplate content from the CRYPTO 2017 conference. You will need to go through each individual page and remove content that does not pertain to your conference, as well as add your own information.

___

### Changing the contact information
The program chairs and general chair appear on both the callforpapers.html file and the contact.html file. You will want to edit these.

At this point you will have a working site. The steps below this are optional.







### Editing the left navigation menu links and titles
Open /fragments/nav.html. Don't forget to change the routes if you change the names of any HTML files.

___

# Optional
### Editing the header image
Save the desired image in the /images directory.

In /styles/main.css, find .headerImg and change the path to background-image to your image. The sizing and centering should be taken care of automatically.

The image must be 1200x480px or larger, though larger may affect page load time. Acceptable file formats are .jpg, .png, or .gif. If using an animated gif, proceed with caution as this has the potential to be supremely annoying and/or negatively affect page load times.

If you want to remove the background image in the header, delete or comment out .headerImg{background-side}, .headerImg{background-image}, and .headerImg{background-position}.

Removing the header image will not remove the gradient effect. If you would like to remove the background image and the gradient on the header, delete or comment out everything *except* .headerGradient{margin-bottom}.

___

### Changing the color scheme
This is a multi-step process. If you are not confident editing CSS3, we strongly recommend against customizing the colors. Please do **NOT** add styles in any HTML document; all editable styles are found in /styles/main.css or /styles/navmenu.css

The default colors are an orange-based light gray background, a dark blue text, and medium green links that change to orange on mouseover. The alternative color themes are:
- blue-based light gray background with green links
- green-based light gray background with blue links

When changing the colors, you *must* edit the following in main.css:
- body{background-color}
- .headerGradient{background}
  - There are 5 instances of .headerGradient{background} that must be changed. The redundancy is to maximize cross-browser compatibility of the gradient effect.
- .listItems{background-color}

And in navmenu.css, you *must* edit the following in conjunction with the above:
- .navmenu{background-color}
  - This should match whatever color is in body{background-color} and .listItems{background-color} in main.css, so the page looks coherent.

Specifically, if you're switching to a blue-based theme, you may find that blue header text may not provide enough contrast, in which case you'll also need to edit the following in main.css:
- .headerTitle{color}
- .headerInfoTop{color}
- .headerInfoBottom{color}

Optional changes with a new color scheme include:
- .navHeader{color}
- .indPageTitle{color}
- .pageSubtitle{color}
- .dateTitle{color}

Additional instructions and hex/rgba for the alternative color choices appear in /styles/main.css near the sections in question.

___

### Editing countdown timers for important dates
Open /js/cryptoCountdowns.js. Titles for which timer the code refers to are above each code block. The code where you edit the time and date looks like this: ``$('#submission').countdown('2017/02/08 02:00')``

Make sure that times are in UTC. You can use this converter: [http://www.thetimezoneconverter.com/].

When changing the dates for countdown timers, don't forget to also change the dates in index.html and/or callforpapers.html. They are in ``<p class="dateTitle">`` tags.

___

### Editing HTML files and other page content
While we have tried our best to remove all conference-specific references from the HTML and have these imported from JSON, we *strongly* recommend proofreading the HTML to make sure all content relates to your specific conference. This is particularly true of the program page, though that is by no means the only one you may need to edit.
