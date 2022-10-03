<?= $this->extend('template')?>
<?= $this->section('content') ?>

<h1 align="center">Sistem Informasi Asisten Dosen</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Jam</th>
      <th scope="col">Senin</th>
      <th scope="col">Selasa</th>
      <th scope="col">Rabu</th>
      <th scope="col">Kamis</th>
      <th scope="col">Jumat</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">07.30 - 09.10</th>
      <td>Basis Data (CD)</td>
      <td>Pemrograman Mobile (AB)</td>
      <td>Basis Data (B)</td>
      <td>DDP (D)</td>
      <td>DDP (A)</td>
    </tr>
    <tr>
      <th scope="row">09.20 - 11.00</th>
      <td></td>
      <td>Pemrograman Web (A)</td>
      <td>PBO (A)</td>
      <td></td>
      <td>DDP (B)</td>
    </tr>
    <tr>
      <th scope="row">11.10 - 12.50</th>
      <td>Pemrograman Interpreter (CD)</td>
      <td></td>
      <td>Pemrograman Web (B), Komdatjar (C)</td>
      <td>DDP (C)</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">13.30 - 15.10</th>
      <td>Multimedia (AB)</td>
      <td>Komunikasi Data dan Jaringan Komputer (AB)</td>
      <td>Multimedia (CD)</td>
      <td>Basis Data (A)</td>
      <td>Pemrograman Interpreter (AB)</td>
    </tr>
    <tr>
      <th scope="row">15.30 - 17.00</th>
      <td></td>
      <td></td>
      <td>PBO (CD)</td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

<?= $this->endSection() ?>