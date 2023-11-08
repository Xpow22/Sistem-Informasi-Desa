<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak</title>
    <style>
        th, td {
        border-color: #96D4D4;
        }
    </style>
</head>
<body>
<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              
             
             
              <!-- Table with stripped rows -->
              <table class="table datatable" id="dataTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIK</th>
                    <th scope="col">KK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                   
              
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
                            $no = 0;

                            foreach ($Kelahiran as $k) {
                            $no++
                            ?>
                  
                   
                    <td><?php echo $no; ?></td>
                    <td><?php echo $k->nik; ?></td>
                    <td><?php echo $k->kk; ?></td>
                    <td><?php echo $k->nama; ?></td> 
                    <td><?php echo $k->tempat_lahir; ?></td> 
                    <td><?php echo $k->tanggal_lahir; ?></td> 
                    <td><?php echo $k->alamat; ?></td> 
                  
                  </tr>
                
                </tbody>
                <?php

}
?>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
<script type="text/javascript">
window.print();
</script>

</body>
</html>