import { slideDown, slideUp } from "./functions/slideToggle";

export const spMenuToggle = () => {
  const hamburger = document.querySelector(".js-hamburger");
  const modal = document.querySelector(".js-sp-modal");

  if (hamburger) {
    hamburger.addEventListener("click", () => {
      if (hamburger.classList.contains("_is-active")) {
        hamburger.classList.remove("_is-active");
        slideUp(modal, 300);
      } else {
        hamburger.classList.add("_is-active");
        slideDown(modal, 300);
      }
    });
  }
};
