(function () {
  let timer;
  const buttons = document.querySelectorAll(".timer__controls > button");
  const timeLeft = document.querySelector(".display__time-left");
  const endTime = document.querySelector(".display__end-time");

  const startTimer = function (sec) {
    clearInterval(timer);
    const now = Date.now();
    const end = now + sec * 1000;

    timer = setInterval(function () {
      const secLeft = Math.floor((end - Date.now()) / 1000);
      if (secLeft >= 0) {
        const displayMin = Math.floor(secLeft / 60);
        let displaySec = secLeft % 60;
        timeLeft.textContent = `${displayMin}:${displaySec}`;
      } else {
        clearInterval(timer);
      }
    }, 16);
    const endDate = new Date(end);
    let hour = endDate.getHours();
    let min = endDate.getMinutes();
    min = min < 10 ? "0" + min : min;
    endTime.textContent = `Back at ${hour}:${min}`;
  };
  const setTimer = function () {
    const sec = parseInt(this.dataset.time);
    startTimer(sec);
  };
  buttons.forEach((button) => button.addEventListener("click", setTimer));
  document.querySelector("#custom").addEventListener("submit", function (e) {
    e.preventDefault();
    const value = parseInt(this.minutes.value);
    if (value) {
      startTimer(value * 60);
      this.reset();
    }
  });
})();
