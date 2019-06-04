<div class="footer" id = "foot">
{{content}}
</div>

<script>
w3.getHttpObject("../../task/index.php", myFunction);

function myFunction(myObject) {
  w3.displayObject("foot", myObject);
}
</script>
