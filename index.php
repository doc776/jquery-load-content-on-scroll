<!DOCTYPE html>

<html>
<head>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"
  type="text/javascript"></script>
  <script src=
  "http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type=
  "text/javascript"></script>
  <script src="loadmore.js" type="text/javascript"></script>
  <link href="style.css" rel="stylesheet" type="text/css">

  <title>Load More Content On Scroll</title>
</head>

<body>
  <script>

    loadMoreStart('post_1.php');

  </script>

  <div id="wrap">
    <header>
      <h1>Load More Content On Scroll</h1>

      <p>Here we will use jquery to outomaticaly load next block of content
      when we scroll all the way to the bottom of the page each time. The each
      time we scroll down a new block must be loaded in series.</p>

      <p>This example consists of:</p>

      <ul>
        <li>index.php (this page)</li>

        <li>loadmore.js</li>

        <li>style.css (just to make this more presentable)</li>

        <li>post_x.php (where x is 1 through 9; blocks of content to load)</li>
      </ul>

      <p>In this example I am using anchors that point to next post to load.
      Alternatively you may hide an article ID in the post for the script to
      detect instead.</p>
    </header>

    <section id="content"></section>

    <div id="loading">
      loading
    </div>
  </div>
</body>
</html>
