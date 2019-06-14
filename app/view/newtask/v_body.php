<div class="" id="newtasks">
    <table class="w3-table-all">
      <thead>
        <tr class="w3-blue">
          <th>Id</th>
          <th>Created By</th>
          <th>Task</th>
          <th>Tasked To</th>
          <th>Date Created</th>
          <th>Action</th>
        </tr>
      </thead>
      <tr w3-repeat="tasks">
          <td>{{id}}</td>
          <td>{{employeeID}}</td>
          <td>{{task}}</td>
          <td>{{employee}}</td>
          <td>{{created}}</td>
          <td>
              <select class="" name="stat" onchange="update({{id}},this.options[this.selectedIndex].value)">
                <option value="new">new</option>
                <option value="standby">standby</option>
                <option value="close">close</option>
                <option value="forward">forward</option>
              </select>
          </td>
      </tr>
    </table>

</div>

<div class="" id="txtHint">

</div>
<script type="text/javascript">
  function update(id,action)
  {
    var xmlhttp = new XMLHttpRequest();
    console.log("id="+id+"&action="+action);
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("POST", "../../../task/app/controller/c_taskHandler.php" , true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send("id="+id+"&action="+action);
  }
</script>
