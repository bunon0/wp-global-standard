export const pageTopBtn = () => {
  const topBtn = document.querySelector("#page-top");
  if (topBtn) {
    topBtn.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }
};
