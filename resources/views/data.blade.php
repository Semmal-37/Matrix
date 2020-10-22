
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <title>Bootstrap Example</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </head>
        <body>
        
        <div class="container">
          <h2>MLM Matrix Table</h2>            
          <table class="table table-hover">
            <thead>
              <tr>
                <th>LEVELS</th>
                <th>COUNT</th>
              </tr>
            </thead>
            <tbody>
            <?php if($l1!==0) echo"  <tr>
                <td>Level 1</td>
                <td>$l1</td>   
              </tr>";?>
              <?php if($l2!==0) echo"  <tr>
               <td>Level 2</td>
                <td>$l2</td>
              </tr>";?>
              <?php if($l3!==0) echo"  <tr>
              <td>Level 3</td>
                <td>$l3</td>
              </tr>";?>
              <?php if($l4!==0) echo"  <tr>
              <td>Level 4</td>
                <td>$l4</td>
              </tr>";?>
              <?php if($l5!==0) {echo" <tr>
              <td>Level 5</td>
                <td>{{$l5}}</td>
              </tr> ";}?>
                <?php if($l6!==0){echo "<tr>
              <td>Level 6</td>
                <td>{{$l6}}</td>
              </tr>";}?>
              <?php if($l7!==0){echo " <tr>
              <td>Level 7</td>
                <td>{{$l7}}</td>
              </tr>";}?>
                  <?php if($l8!==0){echo " <tr>
              <td>Level 8</td>
                <td>{{$l8}}</td>
              </tr>";}?>
                <?php if($l9!==0){echo "<tr>
              <td>Level 9</td>
                <td>{{$l9}}</td>
              </tr>";}?>
               <?php if($l9!==0){echo "<td>Level 10</td>
                <td>{{$l10}}</td>
              </tr>";}?>



            </tbody>
          </table>
        </div>
        
        </body>
        </html>