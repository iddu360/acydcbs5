let listVideo = document.querySelectorAll('.video-list .vid');
let mainVideo = document.querySelector('.main-video iframe');
let title = document.querySelector('.main-video .title');

listVideo.forEach(video => {
  video.onclick = () => {
    listVideo.forEach(vid => vid.classList.remove('active'));
    video.classList.add('active');
    if (video.classList.contains('active')) {
      let src = video.children[0].getAttribute('src');
      mainVideo.src = src;
      let text = video.children[1].innerHTML;
      title.innerHTML = text;
    };
  };
});

AOS.init();

let popup = document.getElementById("popup");
function openPopup() {
  popup.classList.add("open-popup");
}
function closePopup() {
  popup.classList.remove("open-popup");
};

let sponsorSide = document.querySelector('.sponsor-side');
let projectSide = document.querySelector('.project-side');
var btn = document.getElementById('sbtn')

function leftClick() {
  btn.style.left = '0';
  sponsorSide.style.display = 'none';
  projectSide.style.display = 'block';
}

function rightClick() {
  btn.style.left = '200px';
  // btn.style.right = '0';
  sponsorSide.style.display = 'block';
  projectSide.style.display = 'none';

}

$(document).ready(function () {
  $('#openpops').click(function () {
    $('.model-container').css('transform', 'scale(1)');
  });

  $('#closepops').click(function () {
    $('.model-container').css('transform', 'scale(0)');
  });
});

function goBack() {
  window.history.back();
};


// contact script

$(document).ready(function () {
  $('#msg').hide();
});
$(function () {
  $("form[name='myForm']").validate({
    // Define validation rules
    rules: {
      yourname: "required",
      email: {
        required: true,
        email: true
      },
      subject: "required",
      msg: {
        required: true,
        minlength: 5
      }
      // password: {
      //   required: true,
      //   minlength: 5
      // },
      // confirm_password: {
      //   required: true,
      //   minlength: 5,
      //   equalTo: "#password"
      // },

    },
    // Specify validation error messages
    messages: {
      yourname: "Please provide your name.",
      email: {
        required: "Please enter your email",
        email: "Please enter a valid email address",
      },

      subject: "Please enter subject",
      msg: {
        required: "Message is required",
        minlength: "Your message must consist of at least 5 characters"
      }
      // password: {
      //   required: "Please provide a password",
      //   minlength: "Your password must be at least 5 characters long"
      // },
      // confirm_password: {
      //   required: "Please provide a password",
      //   minlength: "Your password must be at least 5 characters long",
      //   equalTo: "Please enter the same password as above"
      // },

    },
    submitHandler: function (form) {
      //form.submit();
      sendEmail();
    }
  });
});
// send mail

function sendEmail() {

  var name = $("#name");
  var email = $("#email");
  var subject = $("#subject");
  var body = $("#body");

  if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
    $("#submit").text("Please wait...");
    $.ajax({
      url: 'sendEmail.php',
      method: 'POST',
      dataType: 'json',
      selector: '#postresult',
      data: {
        name: name.val(),
        email: email.val(),
        subject: subject.val(),
        body: body.val()
      },
      success: function (response) {
        $('#myForm')[0].reset();
        $('.sent-notification').text("Message Sent Successfully.");
        $("#postresult").text("Thank you!");
        $('#msg').show();
        $(".cd1").css({
          "height": "300px",
          "backgroundColor": "#056C9F",
          "color": "white"
        });

        $("#submit").text("Submit");
        $("#myForm").hide();
        Swal.fire(
          'Success',
          'Message Sent Successfully',
          'success'
        )


      }
    });
  }
}

function isNotEmpty(caller) {
  if (caller.val() == "") {
    caller.css('border', '1px solid red');
    return false;
  } else
    caller.css('border', '');

  return true;
};

