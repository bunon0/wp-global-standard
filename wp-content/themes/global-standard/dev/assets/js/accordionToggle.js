import { slideToggle } from "./functions/slideToggle";

export const accordionToggle = () => {
  const Title = document.querySelectorAll(".js-accordion-target");

  if (Title) {
    for (let i = 0; i < Title.length; i++) {
      let titleEach = Title[i];
      let content = titleEach.nextElementSibling;
      titleEach.addEventListener("click", () => {
        titleEach.classList.toggle("_is-open");
        content.classList.toggle("_is-active");
        slideToggle(content);
      });
    }
  }
};
