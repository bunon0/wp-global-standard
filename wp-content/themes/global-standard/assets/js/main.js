"use strict";

// slideUp
const slideUp = function (el) {
  let duration = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 300;
  el.style.height = el.offsetHeight + "px";
  el.offsetHeight;
  el.style.transitionProperty = "height, margin, padding";
  el.style.transitionDuration = duration + "ms";
  el.style.transitionTimingFunction = "ease";
  el.style.overflow = "hidden";
  el.style.height = 0;
  el.style.paddingTop = 0;
  el.style.paddingBottom = 0;
  el.style.marginTop = 0;
  el.style.marginBottom = 0;
  setTimeout(() => {
    el.style.display = "none";
    el.style.removeProperty("height");
    el.style.removeProperty("padding-top");
    el.style.removeProperty("padding-bottom");
    el.style.removeProperty("margin-top");
    el.style.removeProperty("margin-bottom");
    el.style.removeProperty("overflow");
    el.style.removeProperty("transition-duration");
    el.style.removeProperty("transition-property");
    el.style.removeProperty("transition-timing-function");
  }, duration);
}; // slideDown


const slideDown = function (el) {
  let duration = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 300;
  el.style.removeProperty("display");
  let display = window.getComputedStyle(el).display;

  if (display === "none") {
    display = "block";
  }

  el.style.display = display;
  let height = el.offsetHeight;
  el.style.overflow = "hidden";
  el.style.height = 0;
  el.style.paddingTop = 0;
  el.style.paddingBottom = 0;
  el.style.marginTop = 0;
  el.style.marginBottom = 0;
  el.offsetHeight;
  el.style.transitionProperty = "height, margin, padding";
  el.style.transitionDuration = duration + "ms";
  el.style.transitionTimingFunction = "ease";
  el.style.height = height + "px";
  el.style.removeProperty("padding-top");
  el.style.removeProperty("padding-bottom");
  el.style.removeProperty("margin-top");
  el.style.removeProperty("margin-bottom");
  setTimeout(() => {
    el.style.removeProperty("height");
    el.style.removeProperty("overflow");
    el.style.removeProperty("transition-duration");
    el.style.removeProperty("transition-property");
    el.style.removeProperty("transition-timing-function");
  }, duration);
}; // slideToggle


const slideToggle = function (el) {
  let duration = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 300;

  if (window.getComputedStyle(el).display === "none") {
    return slideDown(el, duration);
  } else {
    return slideUp(el, duration);
  }
};

const accordionToggle = () => {
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

const pageTopBtn = () => {
  const topBtn = document.querySelector("#page-top");

  if (topBtn) {
    topBtn.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    });
  }
};

const selectPlaceholder = () => {
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

const SmoothScroll = () => {
  // 1. すべてのhref="#"のaタグを取得
  const smoothScrollTrigger = document.querySelectorAll("a[href^='#']");
  let urlHash = location.hash; // ページ外 SmoothScrollを機能させる

  if (urlHash) {
    const Header = document.querySelector(".js-header");
    let headerHight = Header.offsetHeight; //固定ヘッダー分の高さ

    setTimeout(() => {
      window.scrollTo({
        top: 0
      }, 0);
    }); //ページロード用に処理を遅らす

    setTimeout(() => {
      // スクロール先の要素を取得 （アンカーの リンク先 #.. の # を取り除いた名前と一致する id名の要素）
      const urlTarget = document.getElementById(urlHash.replace("#", "")); // スクロール先の要素の位置を取得

      const urlPosition = window.pageYOffset + urlTarget.getBoundingClientRect().top - headerHight; // スクロールアニメーション

      window.scroll({
        top: urlPosition,
        // スクロール先要素の左上までスクロール
        behavior: "smooth" // スクロールアニメーション

      });
    }, 200);
  } // end ページ外 SmoothScrollを機能させる


  if (smoothScrollTrigger) {
    // 2. 1のaタグにそれぞれクリックイベントを設定
    for (let i = 0; i < smoothScrollTrigger.length; i++) {
      smoothScrollTrigger[i].addEventListener("click", e => {
        // 別ページの#ユニークもSmoothスクロールにする
        // 3. ターゲットの位置を取得
        e.preventDefault();
        let href = smoothScrollTrigger[i].getAttribute("href"); // 各a要素のリンク先を取得

        if (href !== "#") {
          let targetElement = document.getElementById(href.replace("#", "")); // リンク先の要素（コンテンツ）を取得

          const Header = document.querySelector(".js-header");
          let headerHight = Header.offsetHeight; //固定ヘッダー分の高さ

          const rect = targetElement.getBoundingClientRect().top; // ブラウザからの高さを取得

          const offset = window.pageYOffset; // 現在のスクロール量を取得

          const target = rect + offset - headerHight; //最終的な位置を割り出す
          // 4. スムースにスクロール

          window.scrollTo({
            top: target,
            behavior: "smooth"
          });
        }
      });
    }
  }
};

const headerSpaceWithBody = () => {
  const Header = document.querySelector(".js-header");

  if (Header) {
    const HtmlBody = document.body;
    let headerHight = Header.offsetHeight;
    HtmlBody.style.paddingTop = `${headerHight}px`;
  }
};

const spMenuToggle = () => {
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

const swiperSlider = () => {
  /* eslint-disable*/
  const swiper = new Swiper(".swiper", {
    effect: "fade",
    fadeEffect: {
      crossFade: true
    },
    // loop: true,
    loopAdditionalSlides: 1,
    speed: 2000,
    autoplay: {
      // 自動再生させる
      delay: 5000,
      // 次のスライドに切り替わるまでの時間（ミリ秒）
      disableOnInteraction: false,
      // ユーザーが操作しても自動再生を止めない
      waitForTransition: false // アニメーションの間も自動再生を止めない（最初のスライドの表示時間を揃えたいときに）

    }
  });
  /* eslint-disable*/
};

const viewportSet = () => {
  let wsw = window.screen.width;

  if (wsw < 375) {
    // デバイス横幅2000px以上
    document.querySelector("meta[name='viewport']").setAttribute("content", "width=375");
  } else if (wsw >= 2000) {
    // デバイス横幅2000px以上
    document.querySelector("meta[name='viewport']").setAttribute("content", "width=2000");
  } else {
    // それ以外
    document.querySelector("meta[name='viewport']").setAttribute("content", "width=device-width,initial-scale=1.0");
  }
};

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
window.addEventListener("load", () => {//最後に実行※画像読み込み後
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
//# sourceMappingURL=sourcemaps/main.js.map