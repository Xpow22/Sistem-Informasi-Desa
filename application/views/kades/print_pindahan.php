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
                    <th scope="col">No. KK</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Pindah Ke</th>
                    <th scope="col">Tanggal Pindah</th>
                    <th scope="col">Alasan Pindah</th>
                    
              
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $no = 0;

                   

                    foreach ($Pindahan as $value) {
                        $no++
                    
                    ?>

                
                   
                  
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $value->nik; ?></td>
                    <td><?php echo $value->kk; ?></td>
                    <td><?php echo $value->nama; ?></td> 
                    <td><?php echo $value->alamat; ?></td>
                    <td><?php echo $value->pindah; ?></td>
                    <td><?php echo $value->tanggal; ?></td>
                    <td><?php echo $value->alasan_pindah; ?></td>
                    
                  </tr>
                 <?php

                    }
                ?>
                </tbody>
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