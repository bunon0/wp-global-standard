"use strict";

import { accordionToggle } from "./accordionToggle";
import { pageTopBtn } from "./pageTopBtn";
import { selectPlaceholder } from "./selectPlaceholder";
import { SmoothScroll } from "./smooth-scroll";
import { headerSpaceWithBody } from "./spacerInit";
import { spMenuToggle } from "./spMenuToggle";
import { swiperSlider } from "./swiperSlider";
import { viewportSet } from "./viewportSet";

document.addEventListener("DOMContentLoaded", () => {
  //DOMツリーが出来上がったら実行※画像読み込み前
  spMenuToggle();
  swiperSlider();
  viewportSet();
  headerSpaceWithBody();
  accordionToggle();
  SmoothScroll();
  pageTopBtn();
  selectPlaceholder();
});

window.addEventListener("load", () => {
  //最後に実行※画像読み込み後
});

window.addEventListener("resize", () => {
  //画面サイズ変更時
  viewportSet();
  headerSpaceWithBody();
});

window.addEventListener("orientationchange", () => {
  // 端末の縦横を切り替えた時に実行
  viewportSet();
});
