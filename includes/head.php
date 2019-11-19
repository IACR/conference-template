<?php
  // This invokes php to populate some variables that
  // are available as $META. It should be included
  // at the beginning of the <head> tag.
  //
  $META = json_decode(file_get_contents("json/metadata.json"), true);
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $META['name']; ?></title>

    <!-- Generic bootstrap -->
    <link href="https://iacr.org/libs/css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Styling -->
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/theme.css">

