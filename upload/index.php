<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Web Component</title>
    <link rel="stylesheet" href="style.css">
    <style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    flex-direction:column;
    gap:50px;   
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }
  .upload-form {
    max-width: 400px;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }
  .upload-form h2 {
    text-align: center;
    margin-bottom: 20px;
  }
  .upload-form input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  .upload-form input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }
  .upload-form input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>
   
<div class="upload-form"  >
  <h2>Upload Image</h2>
  <form action="" method="post" enctype="multipart/form-data" >
    <input type="file" name="image" id="image" required>
    <input type="submit" name="upload" value="upload">
  </form>
  <?php include "upload.php";  ?>
</div>

        <div class="table-container">
            <table class="table">
                <thead class="table-header">
                    <tr class="table-header-row">
                        <th class="key-heading">No.</th>
                        <th class="details-heading">image</th>
                        <th class="date-heading">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require "conn.php" ;
                    $query=mysqli_query($conn,"SELECT * FROM `image`ORDER BY `date_uploaded` ASC ") or die(mysqli_error());
                    while ($fetch= mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td></td>
                        <td></td>
                   
                        <td></td>

                    </tr>
                    <?php
                    }
                    ?>
                    <!-- <tr class="tr-even">
                        <td><a href="#">1000</a></td>
                        <td>Kring New Fit Office Chair, Mesh + PU, Black</td>
                      
                        <td>10/10/2021</td>
                      
                    </tr>
                    <tr>
                        <td><a href="#">1002</a></td>
                        <td>Executive Leather Office Chair, Brown</td>
                      
                        <td>12/10/2021</td>
                        
                    </tr>                 -->
                </tbody>
            </table>
        </div> 
        <!-- <div class="grid-container">
            <div class="grid-item">
                <div class="grid-top">
                    <div>
                        <a href="#" class="grid-a">#1000</a>
                    </div>
                    <div class="grid-date">10/10/2021</div>
                    <div>
                    
                    </div>
                </div>
                <div class="grid-desc">Kring New Fit Office Chair, Mesh + PU, Black
                </div>
                
            </div>
            <div class="grid-item">
                <div class="grid-top">
                    <div>
                        <a href="#" class="grid-a">#1001</a>
                    </div>
                    <div class="grid-date">11/10/2021</div>
                  
                </div>
                <div class="grid-desc">ErgoFlex Pro Ergonomic Office Chair, Black
                </div>
                
            </div>
            <div class="grid-item">
                <div class="grid-top">
                    <div>
                        <a href="#" class="grid-a">#1002</a>
                    </div>
                    <div class="grid-date">12/10/2021</div>
                    <div>
                        <span class="delivered-status">Delivered</span>
                    </div>
                </div>
                <div class="grid-desc">Executive Leather Office Chair, Brown
                </div>
                <div class="grid-price">$180.00
                </div>
            </div>    
        </div>
    </div> -->
    <script>
       function img() {
        header("Location:rolls-royce.jpg")
       }
    </script>
    <script src="script.js"></script>
</body>
</html>