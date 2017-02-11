# FAQ

### How can I change the colors of the website?
This is a multi-step process. If you are not confident editing CSS3, we recommend against customizing the colors. Please do NOT attempt to edit styles in any HTML document; all editable styles are found in /styles/main.css.

The default colors are an orange-based light gray background, a dark blue text, and medium green links that change to orange on mouseover. The recommended alternative color themes are:
- blue-based light gray background with green links
- green-based light gray background with blue links

When changing the colors, you *must* edit the following:
- body{background-color}
- .headerGradient{background}
  - There are 5 instances of .headerGradient{background} that must be changed. This is to maximize cross-browser compatibility of the gradient effect.
- .headerTitle{color}
- .headerInfoTop{color}
- .headerInfoBottom{color}

Optional changes with a new color scheme include:
- .navHeader{color}
- .indPageTitle{color}
- .pageSubtitle{color}
- .dateTitle{color}

Additional instructions and hex/rgba for the alternative color choices appear in /styles/main.css near the sections in question.

### How do I change the dates and times for the countdowns to important dates that appear on the index and call for papers pages?
In /js/cryptoCountdowns.js. Make sure that times are in UTC. You can use this converter: [http://www.thetimezoneconverter.com/].

When changing the dates for countdown timers, don't forget to also change the dates in index.html. They are in ```<p class="dateTitle">``` tags.
