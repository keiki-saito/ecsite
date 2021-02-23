<?php

use Illuminate\Database\Seeder;

class itemTableSeeder extends Seeder
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
                'name'=>'回転チェア, ホワイト',
                'category_id'=>1,
                'detail'=>'チェアの高さを調節できるので、自分に合った高さで快適に座れます
                安全キャスターは感圧式ロック機能付き。立ち上がるとチェアが動かないようロックがかかります。座るとロックが解除されます',
                'fee'=>2999,
                'image_path'=>'item001.jpg'
            ],
            [
                'name'=>'RENBERGET レンベルゲット',
                'category_id'=>1,
                'detail'=>'体の動きや体重に合わせて、背もたれのテンションの強さを変えられます
                チェアの高さを調節できるので、自分に合った高さで快適に座れます',
                'fee'=>4999,
                'image_path'=>'item002.jpg'
            ],
            [
                'name'=>'LÅNGFJÄLL ロングフィェル',
                'category_id'=>1,
                'detail'=>'ゆるやかにカーブを描く人間工学デザインのオフィスチェア。丁寧な縁縫い。チェアのデザインを損なわないようシートの下に隠れた使いやすい調節機能
                安全キャスターは感圧式ロック機能付き。立ち上がるとチェアが動かないようロックがかかります。座るとロックが解除されます',
                'fee'=>19990,
                'image_path'=>'item003.jpg'
            ],
            [
                'name'=>'LOBERGET ローベルゲット / BLYSKÄR ブリシェール',
                'category_id'=>1,
                'detail'=>'安全キャスターは感圧式ロック機能付き。立ち上がるとチェアが動かないようロックがかかります。座るとロックが解除されます
                チェアの高さを調節できるので、自分に合った高さで快適に座れます',
                'fee'=>3699,
                'image_path'=>'item004.jpg'
            ],
            [
                'name'=>'REMSTA レームスタ',
                'category_id'=>1,
                'detail'=>'アームチェアの形が腰を快適にサポートします
                ソフトで上品な風合いのベルベット。磨耗に強く、お手入れが簡単です。普段のお手入れは、柔らかいブラシを取り付けた掃除機でゴミやホコリを吸い取ってください',
                'fee'=>19990,
                'image_path'=>'item005.jpg'
            ],
            [
                'name'=>'EKERÖ エーケロー',
                'category_id'=>1,
                'detail'=>'リバーシブルの背もたれクッションが背中をふんわりと優しくサポートします
                背もたれクッションは取り外し可能。お好みに合わせてご自由にお使いください',
                'fee'=>16990,
                'image_path'=>'item006.jpg'
            ],
            [
                'name'=>'JÄRVFJÄLLET イェルヴフェレット',
                'category_id'=>1,
                'detail'=>'10年品質保証。詳しくは「品質保証のご案内」をご覧ください
                背もたれは通気性の高いメッシュ素材。長時間座っても背中が蒸れません',
                'fee'=>16990,
                'image_path'=>'item007.jpg'
            ],
        ]);
    }
}
