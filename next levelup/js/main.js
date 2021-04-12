function hideandshow() {
  var button = document.getElementById("show");
  var show = document.getElementById("password");
  var flag = show.type;

  if (flag == "password") {
    button.style.backgroundColor = "#5BA27F";
    show.type = "text";
    button.innerHTML = "hide";
  } else {
    button.style.backgroundColor = "#828282";
    show.type = "password";
    button.innerHTML = "show";
  }
}

function next1() {
  const isi1 = document.querySelector('.isi1');
  isi1.style.display = "none";
  const isi2 = document.querySelector('.isi2');
  isi2.style.display = "inline";
}

function next2() {
  const isi2 = document.querySelector('.isi2');
  isi2.style.display = "none";
  const isi3 = document.querySelector('.isi3');
  isi3.style.display = "inline";
  const box2 = document.querySelector('.box2');
  box2.style.display = "none";
  const box1 = document.querySelector('.box1');
  box1.style.height = "680px";
}

function back1() {
  const isi1 = document.querySelector('.isi1');
  isi1.style.display = "inline";
  const isi2 = document.querySelector('.isi2');
  isi2.style.display = "none";
}

function back2() {
  const isi2 = document.querySelector('.isi2');
  isi2.style.display = "inline";
  const isi3 = document.querySelector('.isi3');
  isi3.style.display = "none";
  const box1 = document.querySelector('.box1');
  box1.style.height = "562px";
  const box2 = document.querySelector('.box2');
  box2.style.display = "flex";
}

$(document).ready(function () {
  $image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width: 200,
      height: 200,
      type: 'square' //circle
    },
    boundary: {
      width: 300,
      height: 300
    }
  });

  $('#upload_image').on('change', function () {
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function () {
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
  });

  $('.crop_image').click(function (event) {
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function (response) {
      $.ajax({
        url: "upload.php",
        type: "POST",
        data: {
          "image": response
        },
        success: function (data) {
          $('#uploaded_image').html(data);
        }
      });
    })
  });
});