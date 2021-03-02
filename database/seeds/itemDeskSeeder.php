<?php

use Illuminate\Database\Seeder;

class itemDeskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name'=>'MELLTORP メルトルプ',
                'category_id'=>2,
                'detail'=>'商品テスト済。テーブルの表面は液体、食品のしみやオイル、熱、傷、衝撃への耐性があります
                安定性を高めるため、組み立てから約2週間後に、また必要に応じてネジを締め直してください',
                'fee'=>5990,
                'image_path'=>'item0008.jpg'
            ],
            [
                'name'=>'システムデスク',
                'category_id'=>2,
                'detail'=>'お子様部屋やワンルームでのご使用に最適な使い勝手の良い省スペース仕様。
                限られたスペースでもラックとデスクの一体型で場所の有効活用できます。
                どんなお部屋にも合わせやすいシンプルデザインが魅力。
                ほしいものにすぐ手が届く手軽さが好評です。',
                'fee'=>8138,
                'image_path'=>'item0009.jpg'
            ],
            [
                'name'=>'システムデスクセット',
                'category_id'=>2,
                'detail'=>'無機質でクールなダメージ風天板とスチール脚の組合せ。
                インダストリアルテイストのシンプルデザインがお部屋の雰囲気を高めてくれます。',
                'fee'=>21890,
                'image_path'=>'item0010.jpg'
            ],
            [
                'name'=>'スリムデスク',
                'category_id'=>2,
                'detail'=>'奥行き40cmのスリムタイプのデスクは置く場所を選びません。
                リビングやベッドルーム、ワンルームなどの空いたスペースにおすすめです。',
                'fee'=>21890,
                'image_path'=>'item0011.jpg'
            ],
            [
                'name'=>'ダイニングテーブル7点セット',
                'category_id'=>2,
                'detail'=>'天然木ならではの滑らかな造り、肌ざわりが楽しめます。
                ビーチ材の特徴的な小さい斑点がやさしく繊細な木目を生み出し、色合い、節など一点一点で違う表情を見せてくれます。',
                'fee'=>139900,
                'image_path'=>'item0012.jpg'
            ],
            [
                'name'=>'リビングダイニングテーブル4点セット',
                'category_id'=>2,
                'detail'=>'ダイニング、リビングのどちらにも合わせやすいロータイプ。圧迫感が無く、お部屋が広く感じられます。',
                'fee'=>81378,
                'image_path'=>'item0013.jpg'
            ],
            [
                'name'=>'ダイニングテーブル4点セット',
                'category_id'=>2,
                'detail'=>'ワイドな150cmで余裕のある使い心地。
                脚元はT字タイプなので四隅にスペースができ、イスの出し入れが簡単にできます。
                天板は自然な風合いのある天然木突板を使用。
                シンプルなデザインでお部屋を選びません。',
                'fee'=>101751,
                'image_path'=>'item0014.jpg'
            ],
            [
                'name'=>'リビングダイニングテーブル5点セット',
                'category_id'=>2,
                'detail'=>'脚元はT字タイプなので四隅にスペースができ、イスの出し入れが簡単にできます。
                天板はナラ無垢材を使用。
                天然木の持つ、風合い・色合い・ぬくもりのある表情を楽しめます。',
                'fee'=>182415,
                'image_path'=>'item0015.jpg'
            ],
            [
                'name'=>'リビングダイニングテーブル3点セット',
                'category_id'=>2,
                'detail'=>'天板下に便利な棚付きで雑誌や小物をさっとしまえて便利なテーブルとおしゃれでシンプルな細脚ベンチのセットです。',
                'fee'=>101650,
                'image_path'=>'item0016.jpg'
            ],
            [
                'name'=>'リビングダイニングテーブル3点セット',
                'category_id'=>2,
                'detail'=>'足元のペダル1つで簡単に上げ下げできる昇降式テーブルのリビングダイニングセット。',
                'fee'=>101650,
                'image_path'=>'item0017.jpg'
            ],
            [
                'name'=>'リビングダイニングテーブル3点セット',
                'category_id'=>2,
                'detail'=>'足元のペダル1つで簡単に上げ下げカンタン。高さ調節ができる昇降テーブルとソファセット。',
                'fee'=>106640,
                'image_path'=>'item0018.jpg'
            ],
            [
                'name'=>'サイドテーブル',
                'category_id'=>2,
                'detail'=>'ウォールナット突き板を使った天板とシンプルなスチール脚。どの部屋にもなじむデザインです。',
                'fee'=>6101,
                'image_path'=>'item0019.jpg'
            ],
            [
                'name'=>'サイドテーブル ラウンズ',
                'category_id'=>2,
                'detail'=>'ちょっとした小物を置くのに便利なサイドテーブルです',
                'fee'=>1990,
                'image_path'=>'item0020.jpg'
            ],
            [
                'name'=>'ワイヤーテーブル ハオ',
                'category_id'=>2,
                'detail'=>'●中にものを入れることができ、サイドテーブルにもなるバスケット
                ●飲み物や読みかけの本を置くなど、さまざまなシーンで大活躍',
                'fee'=>1990,
                'image_path'=>'item0021.jpg'
            ],
            [
                'name'=>'サイドテーブルタブレット',
                'category_id'=>2,
                'detail'=>'板は高さ調整ができ、お使い方の身長や、家具に合わせて調節が可能です。
                テーブル角度も見やすく変えることができ、楽な姿勢で使えるので体の負担を軽減します。
                天板にはタブレットやノートパソコンも設置可能です。
                移動に便利なキャスター付きです。',
                'fee'=>9990,
                'image_path'=>'item0022.jpg'
            ],
            [
                'name'=>'昇降式リビングテーブル',
                'category_id'=>2,
                'detail'=>'簡単操作で天板昇降ができ、ソファに座ったままで快適にパソコン作業ができます。',
                'fee'=>29900,
                'image_path'=>'item0023.jpg'
            ],
            [
                'name'=>'昇降センターテーブル',
                'category_id'=>2,
                'detail'=>'高さ調整できるからリビングにもダイニングにも使えます。',
                'fee'=>15176,
                'image_path'=>'item0024.jpg'
            ],
            [
                'name'=>'ドレッサー付きセンターテーブル',
                'category_id'=>2,
                'detail'=>'1台2役でおしゃれなリビングテーブル',
                'fee'=>10900,
                'image_path'=>'item0025.jpg'
            ],
            [
                'name'=>'ドレッサーテーブル',
                'category_id'=>2,
                'detail'=>'落ち着いた中にも愛らしさのあるフレンチカントリー風のドレッサーテーブル。お部屋をやさしい雰囲気で包みます。',
                'fee'=>12120,
                'image_path'=>'item0026.jpg'
            ],
            [
                'name'=>'鏡面コレクションテーブル',
                'category_id'=>2,
                'detail'=>'アクセサリーや時計などお気に入りのものをディスプレイ！',
                'fee'=>12900,
                'image_path'=>'item0027.jpg'
            ],
            [
                'name'=>'ローボードやキャビネットと合わせてお手軽にコーディネートできるセンターテーブル',
                'category_id'=>2,
                'detail'=>'ナチュラルテイストな天然木調のセンターテーブル。同シリーズのローボード・キャビネットと合わせてお部屋をコーディネートできます。',
                'fee'=>12900,
                'image_path'=>'item0028.jpg'
            ],
            [
                'name'=>'センターテーブル',
                'category_id'=>2,
                'detail'=>'奥行45cmの省スペースで使用できるスリムタイプ。天板は強化ガラスを使用した安心設計です。',
                'fee'=>9990,
                'image_path'=>'item0029.jpg'
            ],
            [
                'name'=>'アンティーク調センターテーブル',
                'category_id'=>2,
                'detail'=>'木部にダメージ加工を施したサイズ違いの天然木を組み合わせた個性的なテーブルです。',
                'fee'=>17160,
                'image_path'=>'item0030.jpg'
            ],
        ]);
    }
}