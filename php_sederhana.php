<form method="get" name="frm" action="">
  Masukan Jumlah Baris :<input name="jumlah" type="text" />
  <input type="submit" name="btnJumlah" value="Ok" />
</form>

<form method="post" name="frmpost" action="">
  <table width="547" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="100">No</td>
      <td width="114" valign="top">NIM</td>
      <td width="240" valign="top">Nama</td>
      <td width="161" valign="top">Telp</td>
    </tr>

    <tr>
      <td>1</td>
      <td><input id="nim1" name="nim[]" type="text" size="10" /></td>
      <td><input id="nama1" name="nama[]" type="text" size="30" /></td>
      <td><input id="telp1" type="text" name="telp[]" /></td>
    </tr>
  </table>
</form>

<script>
  document.getElementsByName("frm")[0].addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
    var jumlah = document.getElementsByName("jumlah")[0].value;
    
    if (jumlah === "1") {
      document.getElementById("nim1").value = "1907113977";
      document.getElementById("nama1").value = "Andika Meleni Saputra";
      document.getElementById("telp1").value = "081261436902";
    }
  });
</script>
