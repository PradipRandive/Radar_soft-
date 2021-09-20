
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <title>Document</title>
</head>
<body>
<div class="card-deck m-5">
  <div class="card ">
    <img class="card-img-top img" src="images/pre_event.png" alt="Card image cap">
    <div class="card-body">
      <h2 class="card-title">Pune Auto Expo Pre-Even</h2>
      <table>
          <tr>
              <th class="pl-3 pr-3">Date</th>
              <th class="pl-5 pr-3">Location</th>
              <th class="pl-5 pr-3">Website</th>
          </tr>
          <tr>
              <td class="pl-3"><?php
echo date("d-M-Y") ."</br>";
echo date("h:i a");
?></td>
<td class="pl-5"><a href="http://" target="_blank" rel="noopener noreferrer">Locate Us</a></td>
<td class="pl-5"><a href="http://" target="_blank" rel="noopener noreferrer">Click Here</a></td>
          </tr>
      </table>
    </div>
  </div>
  <div class="card ">
    <img class="card-img-top img" src="images/Global_Activation.png" alt="Card image cap">
    <div class="card-body">
      <h2 class="card-title">GAIA:global Activation</h2>
      <table>
          <tr>
              <th class="pl-3  pr-3">Date</th>
              <th class="pl-5 pr-3">Location</th>
              <th class="pl-5 pr-3">Website</th>
          </tr>
          <tr>
              <td class="pl-3"><?php
echo date("d-M-Y") ."</br>";
echo date("h:i a");
?></td>
<td class="pl-5"><a href="http://" target="_blank" rel="noopener noreferrer">Locate Us</a></td>
<td class="pl-5"><a href="http://" target="_blank" rel="noopener noreferrer">Click Here</a></td>
          </tr>
      </table>
    </div>
  </div>
</div>
<div class="row srow ">
  <div class="col-md-1"></div>
  <div class="col-md-10 mb-3 ">
  <form class="mt-3 mb-3" method="post" name="google_sheet">
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="paid" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1" >Paid</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="free" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2" >Free</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="sponser" id="inlineRadio3" value="option3" >
  <label class="form-check-label" for="inlineRadio3" >Sponser</label>
</div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Event Title</label>
      <input type="text" class="form-control" id="Event_Title" name="event_title">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Organizer</label>
      <input type="text" class="form-control" id="Organizer" placeholder="The YAHA Event" name="organizer">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Website</label>
      <input type="text" class="form-control" id="Website" name="website">
    </div>
    <div class="form-group col-md-6">
    <label for="inputState">Category</label>
      <select id="inputState" class="form-control" name="category">
        <option selected>Select Category</option>
        <option>...</option>
      </select>
    </div>
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Location</label>
      <input type="text" class="form-control" id="Location" placeholder="Location" name="location">
    </div>
    <div class="form-group col-md-6">
      <label>Location Link</label>
      <input type="text" class="form-control" id="Location_link" name="location_link">
    </div>
  </div>
  <div class="row srow">
    <div class="col-md-6"><label for="upload">Event Image</label></div>
    <div class="col-md-6"><label for="upload">Add Attendee</label></div>
  </div>
  <div class="row srow">
    <div class="col-md-1"></div>      
    <div class="col-md-5 text-center border m-2 p-3 ">
    <div class="file-upload-wrapper">
  <input type="file" id="input-file-now" class="file-upload" name="event_image" />
  <p class="pt-2" style="color:gray;">Drag and Drop a File Here Or click</p>
</div>
    </div>
    <div class="col-md-5 text-center border m-2 p-3">
    <div class="file-upload-wrapper">
  <input type="file" id="input-file-now" class="file-upload" name="add_attendee" />
  <p class="pt-2" style="color:gray;">Drag and Drop a File Here Or click</p>
</div>
</div>
    <div class="col-md-1"></div>
  </div>
  
  <div class="row srow text-center borderbottom">
    <div class="col-md-6"><p>TICKET TYPE</p></div>
    <div class="col-md-3">QTY</div>
    <div class="col-md-3">PRICE</div>
  </div>
  <div class="row srow">
    <div class="col-md-12">
      <label for="Event Ticket">Date And Time</label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Event Start</label>
      <input type="time" class="form-control" id="Event_Title" name="event_start">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Event End</label>
      <input type="time" class="form-control" id="Organizer" placeholder="The YAHA Event" name="event_end">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Save Event</button>

  
<div class="col-md-1"></div>
</form>
  









<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="Javascript.js"></script>
   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>










