// Initialize Wow
new WOW().init();

// Dummy Slider
$(".dummySlider").slick({
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
});


$('.product_detail_slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  asNavFor: '.detail_sub_slider'
});
$('.detail_sub_slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.product_detail_slider',
  dots: false,
  focusOnSelect: true,
  arrows: false,
});

$('.pro_slider').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: false,
  arrows: true,
  centerMode: true,
});

// quantity js staart


function incrementValue(button) {
  const input = button.previousElementSibling;
  let value = parseInt(input.value);
  if (!isNaN(value)) {
      input.value = value + 1;
  }
}

function decrementValue(button) {
  const input = button.nextElementSibling;
  let value = parseInt(input.value);
  if (!isNaN(value) && value > 1) {
      input.value = value - 1;
  }
}

function removeItem(button) {
  const cartItem = button.parentElement;
  cartItem.remove();
}

// quantity js staart



// (function () {
//   const second = 1000,
//         minute = second * 60,
//         hour = minute * 60,
//         day = hour * 24;

//   let today = new Date(),
//       dd = String(today.getDate()).padStart(2, "0"),
//       mm = String(today.getMonth() + 1).padStart(2, "0"),
//       yyyy = today.getFullYear(),
//       nextYear = yyyy + 1,
//       dayMonth = "12/12/",
//       birthday = dayMonth + yyyy;

//   today = mm + "/" + dd + "/" + yyyy;
//   if (today > birthday) {
//     birthday = dayMonth + nextYear;
//   }
//   //end

//   const countDown = new Date(birthday).getTime(),
//       x = setInterval(function() {

//         const now = new Date().getTime(),
//               distance = countDown - now;

//         document.getElementById("days").innerText = Math.floor(distance / (day)),
//           document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
//           document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
//           document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

//         //do something later when date is reached
//         if (distance < 0) {
//           document.getElementById("headline").innerText = "Today is the Day!";
//           document.getElementById("countdown").style.display = "none";
//           document.getElementById("content").style.display = "block";
//           clearInterval(x);
//         }
//         //seconds
//       }, 0)
//   }());
