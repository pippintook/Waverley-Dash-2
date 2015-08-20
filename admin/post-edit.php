<pre><?php print_r($_POST); ?></pre>
<html>
  <head>
    <title>Insert Post</title>
  </head>
<body>
  <form method="post">
  <p>
      <input type="text" name="post-title" />
    </p>
    <p>
      <textarea name="post-content"></textarea>
    </p>
    <p>
      <label for="post-category">Cat 1</label> 
      <input type="checkbox" name="post-category[first]" value="cat1" />
      <br />
      <label for="post-category">Cat 2</label> 
      <input type="checkbox" name="post-category[second]" value="cat2" />
    </p>
    <p>
      <input type="submit" value="Submit" />
    </p>
    </form>
</body>
</html>
