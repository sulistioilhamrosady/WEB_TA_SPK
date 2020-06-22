<html>
<title>WEB_SPK</title>
<head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
</head>
<body>
   <div class="d-flex" id="wrapper">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
		<a href="index.php" class="navbar-brand">TA_SPK</a>
                <a href="#" class="nav-item nav-link active">SAW</a>
                <a href="wp.php" class="nav-item nav-link">WP</a>
                <a href="electree.php" class="nav-item nav-link">ELECTREE</a>
                <a href="topsis.php" class="nav-item nav-link">TOPSIS</a>
                <a href="moora.php" class="nav-item nav-link">MOORA</a>
                <a href="gdss.php" class="nav-item nav-link">GDSS</a>
            </div>
        </div>
    </nav>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #8592d6;
}
</style>
</head>
<body>
    <br>
    <h2>SAW</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Kriteria Alternatif</th>
                <th>A1</th>
                <th>A2</th>
                <th>A3</th>
                <th>Jenis Attribut</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>C1</td>
                <td><?php $C1A1 = 2; echo $C1A1;?></td>
                <td><?php $C1A2 = 4; echo $C1A2;?></td>
                <td><?php $C1A3 = 3; echo $C1A3;?></td>
                <td><?php echo 'benefit'?></td>
                <td><?php $bobotC1 = 30; echo $bobotC1;?></td>
            </tr>
            <tr>
                <td>C2</td>
                <td><?php $C2A1 = 7000000; echo $C2A1;?></td>
                <td><?php $C2A2 = 10000000; echo $C2A2;?></td>
                <td><?php $C2A3 = 8500000; echo $C2A3;?></td>
                <td><?php echo 'cost'?></td>
                <td><?php $bobotC2 = 20; echo $bobotC2;?></td>
            </tr>
            <tr>
                <td>C3</td>
                <td><?php $C3A1 = 2012; echo $C3A1;?></td>
                <td><?php $C3A2 = 2015; echo $C3A2;?></td>
                <td><?php $C3A3 = 2010; echo $C3A3;?></td>
                <td><?php echo 'benefit'?></td>
                <td><?php $bobotC3 = 20; echo $bobotC3;?></td>
            </tr>
            <tr>
                <td>C4</td>
                <td><?php $C4A1 = 7; echo $C4A1;?></td>
                <td><?php $C4A2 = 2; echo $C4A2;?></td>
                <td><?php $C4A3 = 4; echo $C4A3;?></td>
                <td><?php echo 'cost'?></td>
                <td><?php $bobotC4 = 20; echo $bobotC4;?></td>
            </tr>
            <tr>
                <td>C5</td>
                <td><?php $C5A1 = 3; echo $C5A1;?></td>
                <td><?php $C5A2 = 3; echo $C5A2;?></td>
                <td><?php $C5A3 = 4; echo $C5A3;?></td>
                <td><?php echo 'benefit'?></td>
                <td><?php $bobotC5 = 10; echo $bobotC5;?></td>
            </tr>
        </tbody>
    </table>

    <br>

    <h5>Tabel Normalisasi</h5>
    <table class="table">
        <thead>
            <tr>
                <th>Kriteria Alternatif</th>
                <th>A1</th>
                <th>A2</th>
                <th>A3</th>
                <th>Jenis Attribut</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>C1</td>
                <td><?php echo $nC1A1 = $C1A1/$C1A2;?></td>
                <td><?php echo $nC1A2 = $C1A2/$C1A2;?></td>
                <td><?php echo $nC1A3 = $C1A3/$C1A2;?></td>
                <td><?php echo 'benefit'?></td>
                <td><?php $bobotC1 = 0.30; echo $bobotC1;?></td>
            </tr>
            <tr>
                <td>C2</td>
                <td><?php echo $nC2A1 = round($C2A1/$C2A1, 2);?></td>
                <td><?php echo $nC2A2 = round($C2A1/$C2A2, 2);?></td>
                <td><?php echo $nC2A3 = round($C2A1/$C2A3, 2);?></td>
                <td><?php echo 'cost'?></td>
                <td><?php $bobotC2 = 0.20; echo $bobotC2;?></td>
            </tr>
            <tr>
                <td>C3</td>
                <td><?php echo $nC3A1 = ceil($C3A1/$C3A2);?></td>
                <td><?php echo $nC3A2 = ceil($C3A2/$C3A2);?></td>
                <td><?php echo $nC3A3 = ceil($C3A3/$C3A2);?></td>
                <td><?php echo 'benefit'?></td>
                <td><?php $bobotC3 = 0.20; echo $bobotC3;?></td>
            </tr>
            <tr>
                <td>C4</td>
                <td><?php echo $nC4A1 = round($C4A2/$C4A1, 2);?></td>
                <td><?php echo $nC4A2 = round($C4A2/$C4A2, 2);?></td>
                <td><?php echo $nC4A3 = round($C4A2/$C4A3, 2);?></td>
                <td><?php echo 'cost'?></td>
                <td><?php $bobotC4 = 0.20; echo $bobotC4;?></td>
            </tr>
            <tr>
                <td>C5</td>
                <td><?php $C5A1 = 3; echo $nC5A1 = $C5A1/$C5A3;?></td>
                <td><?php $C5A2 = 3; echo $nC5A2 = $C5A2/$C5A3;?></td>
                <td><?php $C5A3 = 4; echo $nC5A3 = $C5A3/$C5A3;?></td>
                <td><?php echo 'benefit'?></td>
                <td><?php $bobotC5 = 0.10; echo $bobotC5;?></td>
            </tr>
        </tbody>
    </table>

    <table class="table">
        <thead>
            <tr>
                <th>Kriteria/Alternatif</th>
                <th>A1</th>
                <th>A2</th>
                <th>A3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>C1</td>
                <td><?php echo $vC1A1 = round($nC1A1*$bobotC1, 2);?></td>
                <td><?php echo $vC1A2 = round($nC1A2*$bobotC1, 2);?></td>
                <td><?php echo $vC1A3 = round($nC1A3*$bobotC1, 2);?></td>
            </tr>
            <tr>
                <td>C2</td>
                <td><?php echo $vC2A1 = $nC2A1*$bobotC2;?></td>
                <td><?php echo $vC2A2 = $nC2A2*$bobotC2;?></td>
                <td><?php echo $vC2A3 = $nC2A3*$bobotC2;?></td>
            </tr>
            <tr>
                <td>C3</td>
                <td><?php echo $vC3A1 = $nC3A1*$bobotC3;?></td>
                <td><?php echo $vC3A2 = $nC3A2*$bobotC3;?></td>
                <td><?php echo $vC3A3 = $nC3A3*$bobotC3;?></td>
            </tr>
            <tr>
                <td>C4</td>
                <td><?php echo $vC4A1 = $nC4A1*$bobotC4;?></td>
                <td><?php echo $vC4A2 = $nC4A2*$bobotC4;?></td>
                <td><?php echo $vC4A3 = $nC4A3*$bobotC4;?></td>
            </tr>
            <tr>
                <td>C5</td>
                <td><?php echo $vC5A1 = $nC5A1*$bobotC5;?></td>
                <td><?php echo $vC5A2 = $nC5A2*$bobotC5;?></td>
                <td><?php echo $vC5A3 = $nC5A3*$bobotC5;?></td>
            </tr>
            <tr>
                <?php $v1 = array('v1r1' => $vC1A1, 'v1r2' => $vC2A1, 'v1r3' => $vC3A1, 'v1r4' => $vC4A1, 'v1r5' => $vC5A1 );?>
                <?php $v2 = array('v2r1' => $vC1A2, 'v2r2' => $vC2A2, 'v2r3' => $vC3A2, 'v2r4' => $vC4A2, 'v2r5' => $vC5A2 );?>
                <?php $v3 = array('v3r1' => $vC1A3, 'v3r2' => $vC2A3, 'v3r3' => $vC3A3, 'v3r4' => $vC4A3, 'v3r5' => $vC5A3 );?>
                <td>Nilai V</td>
                <td><?php echo $res1 = array_sum($v1);?></td>
                <td><?php echo $res2 = array_sum($v2);?></td>
                <td><?php echo $res3 = array_sum($v3);?></td>
            </tr>
        </tbody>
    </table>

     <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>