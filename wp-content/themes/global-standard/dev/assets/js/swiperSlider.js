export const swiperSlider = () => {
  /* eslint-disable*/
  const swiper = new Swiper(".swiper", {
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },

    // loop: true,
    loopAdditionalSlides: 1,
    speed: 2000,
    autoplay: {
      // 自動再生させる
      delay: 5000, // 次のスライドに切り替わるまでの時間（ミリ秒）
      disableOnInteraction: false, // ユーザーが操作しても自動再生を止めない
      waitForTransition: false, // アニメーションの間も自動再生を止めない（最初のスライドの表示時間を揃えたいときに）
    },
  });
  /* eslint-disable*/
};
