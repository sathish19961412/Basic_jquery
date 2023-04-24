<!DOCTYPE html>
<html>
<head>


</head>
<body>

<h2>This is a heading</h2>

<p>This is a paragraph.</p>
<p>This is another paragraph.</p>

<button class="hide">Hide</button>
<button class="show">Show</button>
<script src="./jquery/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".hide").click(function(){
    $("p").hide();
  });
  $(".show").click(function(){
    $("p").show();
  });
});
</script>
</body>
</html>
