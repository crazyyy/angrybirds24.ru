$(function() {
  $('.pager').hide();

  $('.scroll').jscroll({
    debug: false,
    autoTrigger: true,
    loadingHtml: '<img src="http://game-angrybirds.ru/wp-content/themes/angrybirds/img/loading.gif" alt="Loading" />',
    nextSelector: '.pager li.previous a',
    contentSelector: '.scroll',
    callback: function() {
      $('.pager').hide();
    }
  });
});