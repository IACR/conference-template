<?php
  // This invokes php to populate some variables that
  // are available as $META. It should be included
  // at the beginning of the <head> tag.
  //
  $META = json_decode(file_get_contents("json/metadata.json"), true);

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
    return "/iacr/";
  }
?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Generic bootstrap -->
    <link href="https://iacr.org/libs/css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Styling -->
    <link rel="stylesheet" href="<?php echo rootPath();?>/styles/main.css">
    <link id="style" rel="stylesheet" href="<?php echo rootPath();?>/styles/orange_theme.css">

