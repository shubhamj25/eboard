<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <div class="card" style="width: 97%;padding:auto;margin:auto;margin-top:2vw;margin-bottom:2vw;box-shadow: 5px 50px 50px 5px rgba(0,0,0,0.5);">
  <div class="card-body">
    <h5 class="card-title">Create Post</h5>
    
    <form action="frame.php" method="POST">
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Title" name="title" >
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Department</label>
    <div class="col-sm-10">
<select class="custom-select" id="inlineFormCustomSelectPref" name="department" >
    <option selected disabled>Choose...</option>
  <option name=department value="University">University</option>
  <option name=department value="General">General</option>
  <option name=department value="Society">Society</option>
  <option name=department value="Computer Science">Computer Science</option>
  <option name=department value="Electronics">Electronics</option>
  <option name=department value="Mecnanical">Mechanical</option>
  <option name=department value="Electrical">Electrical</option>
  </select>

</select>   
 </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Created by</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Your Name" name="creator">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Content</label>
    <div class="col-sm-10">
    <textarea style="border-radius: 5px;border:0.5px light grey;width:100%;height:10vw;" id="validationTextarea" name="content" placeholder="Notice Content" required></textarea>
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Priority</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio"  value="High"
          name="priority" checked>
          <label class="form-check-label" for="gridRadios1">
            High
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio"   value="Medium" name="priority">
          <label class="form-check-label" for="gridRadios2">
            Medium
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio"  value="Low" name="priority">
          <label class="form-check-label" for="gridRadios3">
            Low
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-10">
  <button type="submit" formaction="index.php" class="btn btn-primary">Create Post</button>
    </div>
  </div>
</form>
    
    
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
