// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2026 15:37:25").getTime();

function updateCountdown() {
  var now = new Date().getTime();
  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  if (distance < 0) {
    document.getElementById("counter").innerHTML = "EXPIRED";
    clearInterval(x);
  } else {
    document.getElementById("counter").innerHTML =
      days + "يوم " + hours + "ساعة " +
      minutes + "دقيقة " + seconds + "ثانية ";
  }
}

// Show immediately
updateCountdown();

// Update every second
var x = setInterval(updateCountdown, 1000);