<!DOCTYPE html>
<html>
<style type="text/css">td {
  vertical-align: top;
}

#table1,
#table2,
#table3,
#table4 {
  display: none;
}
</style>
<head>
  <title></title>
</head>
<body>
  Other things goes here ... <br /><br />

  <table>
    <tr>
      <td>
        <a href="#" onclick='show(1);'>Table 1  1</a>
        <br />
        <a href="#" onclick='show(2);'>Table 2</a>
        <br />
        <a href="#" onclick='show(3);'>Table 3</a>
        <br />
        <a href="#" onclick='show(4);'>Table 4</a>
      </td>
      <td>
        &nbsp;
      </td>
      </tr>
        </table>
        <table>
          <tr>
      <td>
        <div id="table1"> Content of 1 </div>
        <div id="table2"> Content of 2 </div>
        <div id="table3"> Content of 3 </div>
        <div id="table4"> Content of 4 </div>
      </td>
    </tr>
  </table>
    


</body>
<script type="text/javascript">
  function show(nr) {
    document.getElementById("table1").style.display = "none";
    document.getElementById("table2").style.display = "none";
    document.getElementById("table3").style.display = "none";
    document.getElementById("table4").style.display = "none";
    document.getElementById("table" + nr).style.display = "block";
  }
</script>
</html>