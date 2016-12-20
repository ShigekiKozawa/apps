//ホバーイベント
$(".button").hover(function() {
    //配色を作る
    var colors = ["＃F5222B", "＃2294F5", "#F59A22", "#22F549", "#392E87"];
    //ランダム
    var pick = Math.floor(Math.random() * 5);
    var color = colors[pick];
    $(this).css('color', color);
}, function() {
    //基本色
    $(this).css('color', 'black');
});
//フェードアウト
 $(function(){
    $('body').fadeMover({
        'outSpeed':500, 'inSpeed':500
    });
});
