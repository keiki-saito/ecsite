const { type } = require("jquery");

$(function(){

    //検索ボタンがクリックされたら
    $('#search-btn').on('click',function(){
        //入力された郵便番号の処理
        let zipCode =$('#search-word').val();

        //ajaxを使って、郵便番号APIへリクエストを送る
        $.ajax({
            //通信をするブロック
            url: 'https://zipcloud.ibsnet.co.jp/api/search',
            type:'GET',
            dataType:'jsonp', //通信結果のフォーマットを決める
            data:{
                zipcode: zipCode
            }
        }).done((data) => {
            //通信が成功した時
            //dataには通信の結果が格納される
            //console.log(data);
            let prefecture = data.results[0].address1;
            let city = data.results[0].address2;
            let address = data.results[0].address3;
            $('#address').val(prefecture+city+address);
            $('#sub_address').val(prefecture+city+address);
        }).fail((error)=>{
            //通信が失敗した時
            //errorには失敗の原因などが格納される
        })
    })
    $.fn.autokana('#name', '#furigana', { katakana: true });


})

