<!DOCTYPE html>  
<html lang="en">  
    

<head>  
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>MY LIST</title>  

</head>  
<body>
<h2 style="text-align: center">BOOK List</h2>
<h2 style="text-align: center">Tanggal : ...........</h2>
    <h2 style="text-align: center"></h2><br>
<table style align="center" border=1 width=80% cellpadding=2 cellspacing=0 style="margin-top: 5px; text-align:center" class="table" class="table">
    <thead >
        <tr style="background-color:rgb(60, 179, 113):">
            <th>NO.</th>
            <th>TUGAS</th>   
            <h>PEMBERI TUGAS</th>
            <th>WAKTU PENGERJAAN</th>
            <th>DEADLINE</th>
            <th>KETERANGAN</th>
            
            
        </tr>
        <tr style="background-color:rgb(166, 131, 100);">
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
        
            
            
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($joblist as $joblist2) : ?>
            <tr>
                <td><?= $joblist2['id'] ?></td>
                <td><?= $joblist2['tugas'] ?></td>
                <td><?= $joblist2['atasan'] ?></td>
                <td><?= $joblist2['waktu_pengerjaan'] ?></td>
                <td><?= $joblist2['deadline'] ?></td>
                <td><?= $joblist2['keterangan'] ?></td>
                
                
                
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
      

</html>