export const SmoothScroll = () => {
  // 1. すべてのhref="#"のaタグを取得
  const smoothScrollTrigger = document.querySelectorAll("a[href^='#']");
  let urlHash = location.hash;

  // ページ外 SmoothScrollを機能させる
  if (urlHash) {
    const Header = document.querySelector(".js-header");
    let headerHight = Header.offsetHeight; //固定ヘッダー分の高さ

    setTimeout(() => {
      window.scrollTo({ top: 0 }, 0);
    });
    //ページロード用に処理を遅らす
    setTimeout(() => {
      // スクロール先の要素を取得 （アンカーの リンク先 #.. の # を取り除いた名前と一致する id名の要素）
      const urlTarget = document.getElementById(urlHash.replace("#", ""));

      // スクロール先の要素の位置を取得
      const urlPosition =
        window.pageYOffset + urlTarget.getBoundingClientRect().top - headerHight;
      // スクロールアニメーション
      window.scroll({
        top: urlPosition, // スクロール先要素の左上までスクロール
        behavior: "smooth", // スクロールアニメーション
      });
    }, 200);
  }
  // end ページ外 SmoothScrollを機能させる

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
            behavior: "smooth",
          });
        }
      });
    }
  }
};
