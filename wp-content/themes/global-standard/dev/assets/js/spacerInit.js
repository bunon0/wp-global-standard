export const headerSpaceWithBody = () => {
  const Header = document.querySelector(".js-header");
  if (Header) {
    const HtmlBody = document.body;
    let headerHight = Header.offsetHeight;
    HtmlBody.style.paddingTop = `${headerHight}px`;
  }
};
