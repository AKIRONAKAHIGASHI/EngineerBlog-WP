$(function () {
    $(".loading-animation").addClass('is-active'); // loadingアニメーションを表示
    setTimeout(function () {
        // ローディングを数秒後に非表示にする
        $(".loading").addClass('is-active');
        $(".loading-animation").removeClass('is-active');
    }, 3000); // ローディングを表示する時間
  });