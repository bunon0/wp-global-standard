export const selectPlaceholder = () => {
  const Target = document.querySelector(".js-select");
  if (Target) {
    Target.addEventListener("change", () => {
      if (Target.value != "") {
        Target.classList.remove("_is-empty");
      } else {
        Target.classList.add("_is-empty");
        console.log(Target.value);
      }
    });
  }
};
