# Installation and FAQ
In order to install:

1. Login to the server where you wish to deploy and make sure you have git installed.
2. ```git clone https://github.com/kaymckelly/freelance-iacr.git```


# FAQ
### Where do I edit the conference name, dates, and/or location?
/json/metadata.json

### Where do I edit the names of the program committee?
/json/comm.json. Please remember that first names should be included, rather than first initials. If there are accents in the name or institution, make sure to use the correct unicode character.

### How can I change the colors of the website?
This is a multi-step process. If you are not confident editing CSS3, we recommend against customizing the colors. Please do NOT attempt to edit styles in any html document; all editable styles are found in /styles/main.css.

The default colors are an orange-based light gray background, a dark blue text, and medium green links that change to orange on hover. The recommended alternative color themes are:
- blue-based light gray background with green links
- green-based light gray background with blue links

When changing the colors, you must edit the following:
- body{background-color}
- .headerGradient{background}
  - Note that there are 5 instances of .headerGradient{background} that must be changed. This is to maximize cross-browser compatibility of the gradient effect.
Optional changes may include:
- .navHeader{color}
- .headerTitle{color}
- .headerInfoTop{color}
- .headerInfoBottom{color}
- .indPageTitle{color}
- .pageSubtitle{color}
- .dateTitle{color}
Additional instructions appear in /styles/main.css near the sections in question.
