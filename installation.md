# Installation
### Pre-installation
Make sure you have git installed on the server where you plan to deploy the conference site.

### Getting the site on the server
Log into the server. Type ```git clone https://github.com/kaymckelly/freelance-iacr.git``` You should now have a directory called /freelance-iacr on the server. You can change the name of the directory at this point if you like.

### Changing the conference names/dates/location
Open /json/metadata.json. Editing this will change the places where this text would appear throughout all pages.

### Changing the names of the program committee
Open /json/comm.json. Editing this will change the places where this text would appear throughout all pages.

Please remember that first names should be included as they appear on the papers, rather than first initials. If there are accents in the name or institution, make sure to use the correct unicode character.

### Editing the left navigation menu links and titles
Open /fragments/nav.html. Don't forget to change the routes if you change the names of any HTML files.

### Editing the header image
Save the desired image in the /images directory.

In /styles/main.css, find .headerImg and change the path to background-image to your image. The sizing and centering should be taken care of automatically.

The image must be no smaller than 1200x480. If you want to remove the background image in the header, delete or comment out .headerImg{background-side}, .headerImg{background-image}, and .headerImg{background-position}.

Note that removing the header image will not remove the gradient effect. If you would like to remove the background image and the gradient on the header, delete or comment out everything *except* .headerGradient{margin-bottom}.
