 <?PHP 
 if (!empty($_FILES)){
    move_uploaded_file($_FILES['photo']['tmp_name'], __DIR__ . "/photo1/2.png");
    }
 if(isset($_POST['submit'])){
$db = new Database();
$d=$db->info($_POST['field1'],$_POST['select'],$_POST['photo'],$_POST['text'],$_POST['field4']);
 }
?>
<style>
    body{
 background-image: url("https://i.ytimg.com/vi/jkEL-9TlN8Y/maxresdefault.jpg");
 background-size:100%;
    }
 </style>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>


 <div class="content">
 <div class="container">
 <h2 class="text-center"></h2>
 <form method="post" enctype="multipart/form-data" action=/writeblog >
      <div class="form-group">
     <label for="field1">Header</label>
     <input type="text" class="form-control" name="field1" id="field1" placeholder="Insert header">
   </div>
   
   <div class="container py-2">
    <div class="row">
        <div class="col-4">
      
        </div>
    </div>
</div>
   <div class="form-group">
    <label for="field1">Поле 2</label>
    <select class="browser-default custom-select" name="select">
  <option selected>Select Category</option>
  <option  value="International">International</option>
  <option  value="Tours and Travel">Tours and Travels</option>
  <option value="Cooking Tips">Cooking Tips</option>
</select>
   </div>

   <div class="form-group">
    <label for="field1">Photo</label>
    <input type="file" name="photo" id="file">
   </div>
   <div class="form-group">
     <label for="text">Текст</label> 
     <textarea class="form-control" name="text" id="text" placeholder="Введите данные"></textarea>
    </div>
    <div class="form-group">
     <label for="field1">Video Link</label>
     <input type="text" class="form-control" name="field4" id="field1" placeholder="example: https://www.youtube.com/watch?v=_xeVAjOCNzI">
   </div>
   <button type="submit" name='submit' class="btn btn-default">Отправить</button>
 </form>
 
 </div> 
 
 </div>     

  </body>
  
</html>