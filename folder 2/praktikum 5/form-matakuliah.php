<html>

<head>
  <title>Form Input MataKuliah</title>
</head>

<body>
  <center>
    <form action="<?= base_url("matakuliah/cetak"); ?>" method="post" <table>
      <tr>
        <th colspan="3">
          Form Input Mata Kuliah
        </th>
      </tr>

      <tr>
        <th colspan="3">
        </th>
      </tr>

      <tr>
        <th> Kode Matkul</th>
        <th> : </th>
        <td>
          <input type="text" name="kode" id="kode">
        </td>
      </tr>

      <tr>
        <th> Nama Matkul</th>
        <td> : </td>
        <td>
          <input type="text" name="kode" id="kode">
        </td>
      </tr>

      <tr>
        <th> SKS </th>
        <td> : </td>
        <td>
          <select name="SKS" id="sks">
            <option value="">Pilih SKS</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">4</option>
          </select>
        </td>
      </tr>

      <tr>
        <th colspan="3" align="center">
          <button type="sumbit" value="sumbit">Submit
        </th>
      </tr>

      </table>
      <form>
  </center>
</body>

</html>