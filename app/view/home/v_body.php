<div class="task">

  <div class="form">
    <div class="title1 fitem">
      ADD NEW TASK
    </div>
    <form class="" action="../../task/app/controller/c_task.php" method="post">
      <div class="w3-row fitem">

        <div class="w3-third createTaskLabel">
          Task
        </div>

        <div class="w3-twothird">
          <input class="w3-input w3-border" type="text" name="task">
        </div>
      </div>

      <div class="w3-row fitem">

        <div class="w3-third createTaskLabel">
          Employee
        </div>

        <div class="w3-twothird">
          <select id="id01" class="employee" name="employee">
              <option w3-repeat="employees" value="{{employee}}">{{employee}}</option>
          </select>
        </div>
      </div>
      <button class="w3-btn w3-blue-grey submit">Create</button>
    </form>


  </div>
</div>


<script>

w3.getHttpObject("../../task/app/model/json/employees.json", myFunction);

function myFunction(myObject) {
	w3.displayObject("id01", myObject);
}

w3.getHttpObject("../../task/app/view/structure/str_json/footer.json",foot );
function foot(foot)
{
  w3.displayObject("foot",foot)
}
</script>
