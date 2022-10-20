export const viewportSet = () => {
  let wsw = window.screen.width;
  if (wsw < 375) {
    // デバイス横幅2000px以上
    document.querySelector("meta[name='viewport']").setAttribute("content", "width=375");
  } else if (wsw >= 2000) {
    // デバイス横幅2000px以上
    document.querySelector("meta[name='viewport']").setAttribute("content", "width=2000");
  } else {
    // それ以外
    document
      .querySelector("meta[name='viewport']")
      .setAttribute("content", "width=device-width,initial-scale=1.0");
  }
};
