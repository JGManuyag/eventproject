 function Confirm()
  {
  var x = confirm("Are you sure you want to delete this Attendee?");
  if (x)
    return true;
  else
    return false;
  }