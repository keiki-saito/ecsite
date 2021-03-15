$(function() {
  /*新しい住所*/
  $('#search-btn').on('click', function() {
    //入力された郵便番号の処理
    let zipCode = $('#search-word').val();

    //ajaxを使って、郵便番号APIへリクエストを送る
    $.ajax({
      //通信をするブロック
      url: 'https://zipcloud.ibsnet.co.jp/api/search',
      type: 'GET',
      dataType: 'jsonp', //通信結果のフォーマットを決める
      data: {
        zipcode: zipCode,
      },
    })
      .done(data => {
        //通信が成功した時
        //dataには通信の結果が格納される
        let prefecture = data.results[0].address1; //都道府県名
        let shipping; //送料
        //首都圏
        if (
          prefecture === '東京都' ||
          prefecture === '神奈川県' ||
          prefecture === '埼玉県' ||
          prefecture === '千葉県' ||
          prefecture === '茨城県' ||
          prefecture === '栃木県' ||
          prefecture === '山梨県' ||
          prefecture === '群馬県'
        ) {
          shipping = 0;
        }

        //東北
        if (
          prefecture === '北海道' ||
          prefecture === '青森県' ||
          prefecture === '山形県' ||
          prefecture === '秋田県' ||
          prefecture === '宮城県' ||
          prefecture === '岩手県' ||
          prefecture === '福島県'
        ) {
          shipping = 300;
        }
        //関西
        if (
          prefecture === '京都府' ||
          prefecture === '大阪府' ||
          prefecture === '兵庫県' ||
          prefecture === '滋賀県' ||
          prefecture === '奈良県' ||
          prefecture === '和歌山県' ||
          prefecture === '三重県'
        ) {
          shipping = 300;
        }

        //中部
        if (
          prefecture === '新潟県' ||
          prefecture === '富山県' ||
          prefecture === '石川県' ||
          prefecture === '福井県' ||
          prefecture === '長野県' ||
          prefecture === '岐阜県' ||
          prefecture === '静岡県' ||
          prefecture === '愛知県'
        ) {
          shipping = 300;
        }

        //中国
        if (
          prefecture === '鳥取県' ||
          prefecture === '島根県' ||
          prefecture === '岡山県' ||
          prefecture === '広島県' ||
          prefecture === '山口県'
        ) {
          shipping = 300;
        }

        //四国
        if (
          prefecture === '香川県' ||
          prefecture === '愛媛県' ||
          prefecture === '高知県' ||
          prefecture === '徳島県'
        ) {
          shipping = 500;
        }

        //九州
        if (
          prefecture === '福岡県' ||
          prefecture === '熊本県' ||
          prefecture === '佐賀県' ||
          prefecture === '長崎県' ||
          prefecture === '大分県' ||
          prefecture === '鹿児島県' ||
          prefecture === '宮崎県' ||
          prefecture === '沖縄県'
        ) {
          shipping = 500;
        }

        $('#shipping').text(shipping + '円');
        let total = $('#total')
          .text()
          .replace(/商品合計：/g, '')
          .replace(/円/g, ''); //商品合計金額
        let all_total = Number(total) + Number(shipping); //商品料金と送料を足した金額
        $('#all_total').text(all_total + '円');
        //console.log(total)
      })
      .fail(error => {
        //通信が失敗した時
        //errorには失敗の原因などが格納される
      });
  });


  /**** 既存の住所を選んだ時 ****/
  $('#address-radio').change(function() {
    let address = $(this).val();
    let prefecture_pattern = new RegExp('^(.{2}[都道府県]|.{3}県)', 'gm'); //正規表現を使う準備
    let prefecture = address.match(prefecture_pattern); //正規表現に基づいて都道府県名を抜き出し
    let shipping; //送料
    //首都圏
    if (
      prefecture[0] === '東京都' ||
      prefecture[0] === '神奈川県' ||
      prefecture[0] === '埼玉県' ||
      prefecture[0] === '千葉県' ||
      prefecture[0] === '茨城県' ||
      prefecture[0] === '栃木県' ||
      prefecture[0] === '山梨県' ||
      prefecture[0] === '群馬県'
    ) {
      shipping = 0;
    }

    //東北
    if (
      prefecture[0] === '北海道' ||
      prefecture[0] === '青森県' ||
      prefecture[0] === '山形県' ||
      prefecture[0] === '秋田県' ||
      prefecture[0] === '宮城県' ||
      prefecture[0] === '岩手県' ||
      prefecture[0] === '福島県'
    ) {
      shipping = 300;
    }
    //関西
    if (
      prefecture[0] === '京都府' ||
      prefecture[0] === '大阪府' ||
      prefecture[0] === '兵庫県' ||
      prefecture[0] === '滋賀県' ||
      prefecture[0] === '奈良県' ||
      prefecture[0] === '和歌山県' ||
      prefecture[0] === '三重県'
    ) {
      shipping = 300;
    }

    //中部
    if (
      prefecture[0] === '新潟県' ||
      prefecture[0] === '富山県' ||
      prefecture[0] === '石川県' ||
      prefecture[0] === '福井県' ||
      prefecture[0] === '長野県' ||
      prefecture[0] === '岐阜県' ||
      prefecture[0] === '静岡県' ||
      prefecture[0] === '愛知県'
    ) {
      shipping = 300;
    }

    //中国
    if (
      prefecture[0] === '鳥取県' ||
      prefecture[0] === '島根県' ||
      prefecture[0] === '岡山県' ||
      prefecture[0] === '広島県' ||
      prefecture[0] === '山口県'
    ) {
      shipping = 300;
    }

    //四国
    if (
      prefecture[0] === '香川県' ||
      prefecture[0] === '愛媛県' ||
      prefecture[0] === '高知県' ||
      prefecture[0] === '徳島県'
    ) {
      shipping = 500;
    }

    //九州
    if (
      prefecture[0] === '福岡県' ||
      prefecture[0] === '熊本県' ||
      prefecture[0] === '佐賀県' ||
      prefecture[0] === '長崎県' ||
      prefecture[0] === '大分県' ||
      prefecture[0] === '鹿児島県' ||
      prefecture[0] === '宮崎県' ||
      prefecture[0] === '沖縄県'
    ) {
      shipping = 500;
    }

    $.ajax({
      headers: {
        // POSTのときはトークンの記述がないと"419 (unknown status)"になるので注意
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
      },
      // POSTだけではなく、GETのメソッドも呼び出せる
      type: 'POST',
      // ルーティングで設定したURL
      url: '/shipping', // 引数も渡せる
      dataType: 'json',
    }).done(function(results) {
      let total = results;
      $('#shipping').text(shipping + '円');
      let all_total = Number(total) + Number(shipping); //商品料金と送料を足した金額
      $('#all_total').text(all_total + '円');
    });
  });





  /**** 確認画面で送料と合計金額を表示させるため ****/
  $(window)
    .ready(function() {
      let address = $('.old_address').text();
      let prefecture_pattern = new RegExp('^(.{2}[都道府県]|.{3}県)', 'gm'); //正規表現を使う準備
      let prefecture = address.match(prefecture_pattern);
      let shipping; //送料
      console.log(prefecture[0]);
      //首都圏
      if (
        prefecture[0] === '東京都' ||
        prefecture[0] === '神奈川県' ||
        prefecture[0] === '埼玉県' ||
        prefecture[0] === '千葉県' ||
        prefecture[0] === '茨城県' ||
        prefecture[0] === '栃木県' ||
        prefecture[0] === '山梨県' ||
        prefecture[0] === '群馬県'
      ) {
        shipping = 0;
      }

      //東北
      if (
        prefecture[0] === '北海道' ||
        prefecture[0] === '青森県' ||
        prefecture[0] === '山形県' ||
        prefecture[0] === '秋田県' ||
        prefecture[0] === '宮城県' ||
        prefecture[0] === '岩手県' ||
        prefecture[0] === '福島県'
      ) {
        shipping = 300;
      }
      //関西
      if (
        prefecture[0] === '京都府' ||
        prefecture[0] === '大阪府' ||
        prefecture[0] === '兵庫県' ||
        prefecture[0] === '滋賀県' ||
        prefecture[0] === '奈良県' ||
        prefecture[0] === '和歌山県' ||
        prefecture[0] === '三重県'
      ) {
        shipping = 300;
      }

      //中部
      if (
        prefecture[0] === '新潟県' ||
        prefecture[0] === '富山県' ||
        prefecture[0] === '石川県' ||
        prefecture[0] === '福井県' ||
        prefecture[0] === '長野県' ||
        prefecture[0] === '岐阜県' ||
        prefecture[0] === '静岡県' ||
        prefecture[0] === '愛知県'
      ) {
        shipping = 300;
      }

      //中国
      if (
        prefecture[0] === '鳥取県' ||
        prefecture[0] === '島根県' ||
        prefecture[0] === '岡山県' ||
        prefecture[0] === '広島県' ||
        prefecture[0] === '山口県'
      ) {
        shipping = 300;
      }

      //四国
      if (
        prefecture[0] === '香川県' ||
        prefecture[0] === '愛媛県' ||
        prefecture[0] === '高知県' ||
        prefecture[0] === '徳島県'
      ) {
        shipping = 500;
      }

      //九州
      if (
        prefecture[0] === '福岡県' ||
        prefecture[0] === '熊本県' ||
        prefecture[0] === '佐賀県' ||
        prefecture[0] === '長崎県' ||
        prefecture[0] === '大分県' ||
        prefecture[0] === '鹿児島県' ||
        prefecture[0] === '宮崎県' ||
        prefecture[0] === '沖縄県'
      ) {
        shipping = 500;
      }

      $('#shipping').text(shipping + '円');
      let total = $('#total')
        .text()
        .replace(/商品合計：/g, '')
        .replace(/円/g, ''); //商品合計金額
        console.log(total)
      let all_total = Number(total) + Number(shipping); //商品料金と送料を足した金額
      $('#all_total').text(all_total + '円');
      $('.hidden_all_total').val(all_total);
    })
    .fail(function(jqXHR, textStatus, errorThrown) {
      // 失敗したときのコールバック
    })
    .always(function() {
      // 成否に関わらず実行されるコールバック
    });
});
