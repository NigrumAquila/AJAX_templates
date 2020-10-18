$('.toggle').click(function () {
  $(this).children('i').toggleClass('fa-pencil');
  $('.form').animate({
    height: "toggle",
    'padding-top': 'toggle',
    'padding-bottom': 'toggle',
    opacity: "toggle"
  }, "slow");
});

$(function () {
  var modal = document.getElementById('myModal');
  var btn = document.getElementById("btn1");
  var span = document.getElementsByClassName("close")[0];

  btn.onclick = function () {
    modal.style.display = "block";
  }

  span.onclick = function () {
    modal.style.display = "none";
  }

  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
});


$(document).ready(function() {
  $("#ajaxform").submit(function(){
    var form = $(this);
    var error = false;
    form.find('input').each( function(){
      if ($(this).val() == '') {
        alert('Зaпoлнитe пoлe "'+$(this).attr('placeholder')+'"!');
        error = true;
      }
    });
    if (!error) {
      var data = form.serialize();
      $.ajax({
         type: 'POST',
         url: 'writer.php',

         dataType: 'json',
         data: data,
           beforeSend: function(data) {
                form.find('button[type="submit"]').attr('disabled', 'disabled');
              },
           success: function(data){
              if (data['error']) {
                alert(data['error']);
              } else {
                // alert('Ведутся технические работы, перезайдите!');
              }
             },
           error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
             },
           complete: function(data) {
                form.find('button[type="submit"]').prop('disabled', false);
             }
           });
    }
    return true;
  });
});
