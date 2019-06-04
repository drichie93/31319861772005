<div class="task">

  <div class="form">
    <div class="title1 fitem">
      ADD NEW EMPLOYEE
    </div>
    <form class="" action="../../task/app/controller/c_newEmployee.php" method="post">
      <div class="w3-row fitem">

        <div class="w3-third createTaskLabel">
          Name
        </div>

        <div class="w3-twothird">
          <input class="w3-input w3-border" type="text" name="employee">
        </div>
      </div>

      <div class="w3-row fitem">
      </div>
      <button class="w3-btn w3-blue-grey submit">Employ</button>
    </form>


  </div>
</div>


<script>
  w3.getHttpObject("../../task/app/view/json/employees.json", myFunction);

  function myFunction(myObject) {
    w3.displayObject("id01", myObject);
  }
</script>
