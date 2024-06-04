const counters = document.querySelectorAll(".count");
counters.forEach((counter) => {
  counter.innerText = "0";
  const updateCounter = () => {
    const target = +counter.getAttribute("data-target");
    const c = +counter.innerText;

    const increment = target / 100;
    console.log(increment);

    if (c < target) {
      counter.innerText = `${Math.ceil(c + increment)}`;
      setTimeout(updateCounter, 30);
    } else {
      counter.innerText = target;
    }
  };

  updateCounter();
});

function submit() {
  document.getElementById(myform).submit;
}
function reset() {
  document.getElementById(myform).reset;
}
