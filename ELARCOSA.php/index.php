<?php require_once 'includes/header.php' ?>

<h1 class="text-center" >&#128512; REGISTRATION TO IT CONFERENCE&#128512;</h1>
<form>
  <div class="container">
    <div class="form-group">
    <label for="firstname">Firstname</label>
    <input type="text" class="form-control" id="fname" placeholder="Enter Firstname" aria-describedby="name">
    <small id="fname" class="form-text text-muted"></small><br>
    </div>
    
    <div class="form-group">
    <label for="lastname">Lastname</label>
    <input type="text" class="form-control" id="lname" placeholder="Enter Lastname"><br>
    </div>

    <div class="form-group">
    <label for="Specialty">SPECIALTY:</label><br><br>
    <input type="checkbox" id="work" name="work" value="position1">
    <label for="value1"> DataBase Admin</label><br><br>
    <input type="checkbox" id="work2" name="work2" value="position2">
    <label for="value2"> Software Developer</label><br><br>
    <input type="checkbox" id="work3" name="work3" value="position3">
    <label for="value3"> Web Administrator</label><br><br>
    </div>

    <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Email Address" aria-describedby="email">
    <small id="emailHelp" class="form-text text-muted"></small><br>
    </div>

    <div class="form-group">
    <label for="Date">Date</label>
    <input type="text" id="datepicker"></p><br><br>
    </div>

    <div class="form-group">
    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" placeholder="Enter Phone Number" name="phone"><br><br>
    </div>

    <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label><br><br>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button><br><br>

    <video width="1100" height="340" controls>
    <source src="Movies.mp4" type="video/mp4">
    <source src="movie.ogg" type="video/ogg">
    Your browser does not support the video tag.
    </video>

  </div>
</form>



<?php require_once 'includes/footer.php'?>