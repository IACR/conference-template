# Installation
### Pre-installation
Make sure you have git installed on the server where you plan to deploy the conference site.

___

### Getting the site on the server
Log into the server. Type ```git clone https://github.com/kaymckelly/freelance-iacr.git``` You should now have a directory called /freelance-iacr on the server. You can change the name of the directory at this point if you like.

___

### Changing the conference names/dates/location
Open /json/metadata.json. Editing this will change the places where this text would appear throughout all pages.

___

### Changing the names of the program committee
Open /json/comm.json. Editing this will change the places where this text would appear throughout all pages.

Please remember that first names should be included as they appear on the papers, rather than first initials. If there are accents in the name or institution, make sure to use the correct unicode character.

___

### Editing the left navigation menu links and titles
Open /fragments/nav.html. Don't forget to change the routes if you change the names of any HTML files.

___

### Editing the header image
Save the desired image in the /images directory.

In /styles/main.css, find .headerImg and change the path to background-image to your image. The sizing and centering should be taken care of automatically.

The image must be no smaller than 1200x480. If you want to remove the background image in the header, delete or comment out .headerImg{background-side}, .headerImg{background-image}, and .headerImg{background-position}.

Note that removing the header image will not remove the gradient effect. If you would like to remove the background image and the gradient on the header, delete or comment out everything *except* .headerGradient{margin-bottom}.

___

### Changing the color scheme
<!-- TODO: this will likely need to be rewritten after completion of spreadsheet checking webAIM of various color schemes -->
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
Open /js/cryptoCountdowns.js. Titles for which timer the code refers to are above each code block. The code where you edit the time and date looks like this: ```$('#submission').countdown('2017/02/08 02:00')```

Make sure that times are in UTC. You can use this converter: [http://www.thetimezoneconverter.com/].

When changing the dates for countdown timers, don't forget to also change the dates in index.html and/or callforpapers.html. They are in ```<p class="dateTitle">``` tags.
