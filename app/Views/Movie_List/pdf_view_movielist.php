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
            <th>Judul</th>   
            <h>Penulis/Pengarang</th>
            <th>Penerbit</th>
            <th>Rating</th>
            <th>Ulasan</th>
            
            
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
        <?php foreach ($booklist as $booklist2) : ?>
            <tr>
                <td><?= $booklist2['id'] ?></td>
                <td><?= $booklist2['judul'] ?></td>
                <td><?= $booklist2['penulis'] ?></td>
                <td><?= $booklist2['penerbit'] ?></td>
                <td><?= $booklist2['rating'] ?></td>
                <td><?= $booklist2['ulasan'] ?></td>
                
                
                
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
      

</html>