!function ($) {
  let badgeUrl = '';
  const badge = document.getElementById('netlify-deployment-badge');
  if (badge && badge.dataset && badge.dataset.badgeUrl) {
    badgeUrl = badge.dataset.badgeUrl;

    setInterval(function() {
      badge.src = badgeUrl + '?t=' + new Date().getTime();
    }, 2000);
  }

  const deployButton = $('.js-deploy-button');
  if (deployButton) {
    deployButton.on('click', function () {
      const _this = this

      $(_this).addClass('add loading');
      $(_this).removeClass('submit');
      $(_this).prop('disabled', true);
      $.ajax({
        type: "POST",
        url: $(_this).attr('data-build-hook'),
        error: function () {
          $(_this).removeClass('add loading');
          $(_this).addClass('submit');
          $(_this).prop('disabled', false);
        },
        success: function () {
          $(_this).removeClass('add loading');
        }
      });
    });
  }
}(jQuery);
