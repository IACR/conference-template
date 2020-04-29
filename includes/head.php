<?php
// require "style_picker.php";
  // This invokes php to populate some variables that
  // are available as $META. It should be included
  // at the beginning of the <head> tag.
  //
  $META = json_decode(file_get_contents("json/metadata.json"), true);
  $META['url'] = 'https://' . $META['eventtype'] . '.iacr.org/' . $META['year'];

  // Set the root path in the nav menu.
  function rootPath() {
    // must declare $META as global variable, as it's created in head.php
    // and doesn't work here unless defined within the function
    global $META;

    // NOTE: if you are developing on a local machine, then you probably
    // should use "/" as your root path. On the iacr.org server the URL is
    // prefixed by the year (e.g., crypto.iacr.org/2020). We distinguish these
    // cases using the $_SERVER['HTTP_HOST'] variable.

    if (empty($_SERVER['HTTP_HOST'])) {
      return "/";
    }
    $length = strlen($_SERVER['HTTP_HOST']);
    if ($length >= 8 &&
        substr($_SERVER['HTTP_HOST'], -8) === 'iacr.org') {
      return "/" . strval($META['year']) . "/";
    }
    return "/";
  }
?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $META['name'];?>"/>

    <!-- Generic bootstrap -->
    <link href="https://iacr.org/libs/css/bootstrap/confv2/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Styling -->
    <link rel="stylesheet" href="<?php echo rootPath();?>styles/main.css">
    <link id="style" rel="stylesheet" href="<?php echo rootPath();?>styles/blue2_theme.css">
    <!-- metadata for googlebot -->
    <script type="application/ld+json">
     {
       "@id": "<?php echo $META['url'];?>",
       "@context": "http://schema.org/",
       "@type": "Event",
       "startDate": "<?php echo $META['startdate'];?>",
       "endDate":  "<?php echo $META['enddate'];?>",
       "location": {
         "@context": "http://schema.org",
         "@type": "Place",
         "address": {
           "@context": "http://schema.org",
           "@type": "PostalAddress",
           "addressLocality": "<?php echo $META['city'];?>",
           "addressCountry": "<?php echo $META['country'];?>"
         },
         "geo": {
           "@type": "GeoCoordinates",
           "latitude": "<?php echo $META['latitude'];?>",
           "longitude": "<?php echo $META['longitude'];?>"
         },
         "name": "Conference Venue"
       },
       "organizer": {
         "@context": "http://schema.org",
         "@type": "NGO",
         "legalName": "International Association for Cryptologic Research",
         "alternateName": "IACR",
         "sameAs": "https://iacr.org/",
         "naics": "813920",
         "logo": "https://iacr.org/img/logo/iacrlogo_small.png"
       },
       "name": "<?php echo $META['shortName'];?>",
       "description": "<?php echo $META['name'];?>",
       "image": "https://iacr.org/img/logo/iacrlogo_small.png"
     }
    </script>
    <!-- open graph for facebook. There is no type for event. -->
    <meta property="og:type" content="event"/>
    <meta property="og:url" content="<?php echo $META['url'];?>"/>
    <meta property="event:start_time" content="<?php echo $META['startdate'];?>"/>
    <meta property="event:end_time" content="<?php echo $META['enddate'];?>"/>
    <meta property="og:description" content="<?php echo $META['name'];?>"/>
    <meta property="og:image" content="https://iacr.org/img/logo/iacrlogo_small_og.png"/>
    <meta property="og:latitude" content="<?php echo $META['latitude'];?>"/>
    <meta property="og:longitude" content="<?php echo $META['longitude'];?>"/>
    <!-- metadata for twitter. -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@iacr_news"/>
    <meta name="twitter:description" content="<?php echo $META['name'];?>"/>
    <meta property="twitter:image" content="https://iacr.org/img/logo/iacr_wordmark_twitter.png"/>
    <!-- apple format for iMessage and search -->
    <link rel="apple-touch-icon" href="https://iacr.org/img/logo/iacrlogo_small.png">
