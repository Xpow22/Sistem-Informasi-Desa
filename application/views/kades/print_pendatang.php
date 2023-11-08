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
    <!-- Table with stripped rows -->
    <table>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIK</th>
                    <th scope="col">No. KK</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Alamat Asal</th>
                    <th scope="col">Alamat Sekarang</th>
                    <th scope="col">Pindah Ke</th>
                    <th scope="col">Tanggal Pindah</th>
                    <th scope="col">Keterangan</th>
                    
              
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $no = 0;

                   

                    foreach ($Pendatang as $value) {
                        $no++
                    
                    ?> 

                
                  
                  
                    <th scope="row"><?php echo $no;?></th>
                    <td><?php echo $value->nik; ?></td>
                    <td><?php echo $value->kk; ?></td>
                    <td><?php echo $value->nama; ?></td> 
                    <td><?php echo $value->alamat_asal; ?></td>
                    <td><?php echo $value->alamat_sekarang; ?></td>
                    <td><?php echo $value->pindah; ?></td>
                    <td><?php echo $value->tanggal; ?></td>
                    <td><?php echo $value->keterangan; ?></td>
                    
                  </tr>
                 <?php

                    }
                ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

<script type="text/javascript">
window.print();
</script>

</body>
</html>