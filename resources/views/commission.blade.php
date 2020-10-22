
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <style>
        .form-group{
            width: 40%;
        }
        </style>
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
          <h2>Manage Level's Commission</h2>    

     <form action="{{ url('commission') }}" method="POST">
     {{ csrf_field() }}
       <div class="form-group">
           <label for="level1">Level 1</label>
           <input type="number" name="level1" class="form-control" id="level1"  placeholder="Enter Level 1 Commission">
           <small id="lvl1" class="form-text text-muted">Please add in Percentage.</small>
       </div>
       <div class="form-group">
           <label for="level2">Level 2</label>
           <input type="number" name="level2" class="form-control" id="level2"  placeholder="Enter Level 2 Commission">
 
       </div>
       <div class="form-group">
           <label for="level3">Level 3</label>
           <input type="number"  name="level3" class="form-control" id="level3"  placeholder="Enter Level 3 Commission">
  
       </div>
       <div class="form-group">
           <label for="level4">Level 4</label>
           <input type="number" name="level4" class="form-control" id="level4"  placeholder="Enter Level 4 Commission">

       </div>
       <div class="form-group">
           <label for="level5">Level 5</label>
           <input type="number" name="level5" class="form-control" id="level5"  placeholder="Enter Level 5 Commission">

       </div>
       <div class="form-group">
           <label for="level6">Level 6</label>
           <input type="number" name="level6" class="form-control" id="level6"  placeholder="Enter Level 6 Commission">

       </div>
       <div class="form-group">
           <label for="level7">Level 7</label>
           <input type="number" name="level7" class="form-control" id="level7"  placeholder="Enter Level 7 Commission">

       </div>
       <div class="form-group">
           <label for="level8">Level 8</label>
           <input type="number" name="level8" class="form-control" id="level8"  placeholder="Enter Level 8 Commission">
        
       </div>
       <div class="form-group">
           <label for="level9">Level 9</label>
           <input type="number" name="level9" class="form-control" id="level9"  placeholder="Enter Level 9 Commission">
       
       </div>
       <div class="form-group">
           <label for="level10">Level 10</label>
           <input type="number" name="level10" class="form-control" id="level10"  placeholder="Enter Level 10 Commission">
 
       </div>
               <button type="submit" class="btn btn-primary">Submit</button>
    </form>        
 
        </div>
        
        </body>
        </html>