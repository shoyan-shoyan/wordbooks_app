<?php

use Illuminate\Database\Seeder;

class WordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('words')->insert([
            [
            'wordbook_id' => 1,
            'content' => 'りんご',
            'answer' => 'apple',
            ],[
            'wordbook_id' => 1,
            'content' => 'オレンジ',
            'answer' => 'orange',
            ],[
            'wordbook_id' => 1,
            'content' => 'バナナ',
            'answer' => 'banana',
            ],[
            'wordbook_id' => 1,
            'content' => 'イチゴ',
            'answer' => 'strawberry',
            ],[
            'wordbook_id' => 1,
            'content' => '木イチゴ',
            'answer' => 'raspberry',
            ],[
            'wordbook_id' => 1,
            'content' => 'グレープフルーツ',
            'answer' => 'grapefruit',
            ],[
            'wordbook_id' => 1,
            'content' => 'さくらんぼ',
            'answer' => 'cherry',
            ],[
            'wordbook_id' => 1,
            'content' => 'パイナップル',
            'answer' => 'pineapple',
            ],[
            'wordbook_id' => 1,
            'content' => 'ぶどう',
            'answer' => 'grape',
            ],[
            'wordbook_id' => 1,
            'content' => 'マンゴー',
            'answer' => 'mango',
            ],[
            'wordbook_id' => 1,
            'content' => '桃',
            'answer' => 'peach',
            ],[
            'wordbook_id' => 1,
            'content' => 'ゆず',
            'answer' => 'yuzu',
            ],[
            'wordbook_id' => 1,
            'content' => 'レモン',
            'answer' => 'lemon',
            ],[
            'wordbook_id' => 2,
            'content' => '受取手形',
            'answer' => '相手側から振り出された約束手形を受取った時に使う勘定科目',
            ],[
            'wordbook_id' => 2,
            'content' => '定期預金',
            'answer' => '定期預金口座への預け入れや引き出しがあった時に使う勘定科目',
            ],[
            'wordbook_id' => 2,
            'content' => '当座預金',
            'answer' => '当座預金口座への預け入れ・引き出しがあった時に使う勘定科目で小切手や約束手形の決済に使われる',
            ],[
            'wordbook_id' => 2,
            'content' => '普通預金',
            'answer' => '普通預金口座への預け入れ・引き出しがあった時に使う勘定科目',
            ],[
            'wordbook_id' => 2,
            'content' => '小口現金',
            'answer' => '小口現金係が管理する現金',
            ],[
            'wordbook_id' => 2,
            'content' => '現金',
            'answer' => '紙幣・通貨や通貨代用証券',
            ],[
            'wordbook_id' => 2,
            'content' => '仮払金',
            'answer' => '用途や金額が不明なまま、一時的にお金を概算で支払った時に使う勘定科目',
            ],[
            'wordbook_id' => 2,
            'content' => '未収入金',
            'answer' => '商品以外のものを後払いで売った時に使う勘定科目',
            ],[
            'wordbook_id' => 2,
            'content' => '前払金',
            'answer' => '商品を受取る前に、代金の一部または全部を先に支払った時に使う勘定科目',
            ],[
            'wordbook_id' => 2,
            'content' => '立替金',
            'answer' => 'お金を一時的に立て替えた時に使う勘定科目 従業員にたいしてお金を立て替えた時は「従業員立替金」',
            ],[
            'wordbook_id' => 2,
            'content' => '手形貸付金',
            'answer' => 'お金を貸した際に借用証書の代わりに約束手形を受取った時に使う勘定科目',
            ],[
            'wordbook_id' => 2,
            'content' => '貸付金',
            'answer' => 'お金を貸した時に使う勘定科目 従業員にお金を貸した時は「従業員貸付金」 法人が役員にお金を貸し付けた時は「役員貸付金」',
            ],[
            'wordbook_id' => 2,
            'content' => '繰越商品',
            'answer' => '期末にまだ販売していない商品(在庫)の金額を表す勘定科目',
            ],[
            'wordbook_id' => 2,
            'content' => '商品',
            'answer' => '販売を目的として取引先から仕入れた物品',
            ],[
            'wordbook_id' => 2,
            'content' => '電子記録債権',
            'answer' => '電子記録を利用して債権のやり取りをする時に使う勘定科目',
            ],[
            'wordbook_id' => 2,
            'content' => 'クレジット売掛金',
            'answer' => '商品やサービスをクレジットカード払いで販売した時に使う勘定科目',
            ],[
            'wordbook_id' => 2,
            'content' => '売掛金',
            'answer' => '商品を掛けで販売した時に使う勘定科目',
            ],[
            'wordbook_id' => 2,
            'content' => '受取商品券',
            'answer' => '他店が発行した商品券を受け取ったり精算した時に使う勘定科目',
            ],[
            'wordbook_id' => 2,
            'content' => '差入保証金',
            'answer' => '賃貸借契約の際に敷金など保証金をあらかじめ支払った時に使う勘定科目',
            ],[
            'wordbook_id' => 2,
            'content' => '貯蔵品',
            'answer' => '期末に残った切手や収入印紙などを資産に計上する時に使う勘定科目',
            ],[
            'wordbook_id' => 2,
            'content' => '仮払消費税',
            'answer' => '商品を仕入れた時に支払った消費税	',
            ],[
            'wordbook_id' => 2,
            'content' => '仮払法人税等',
            'answer' => '法人税・法人住民税・法人事業税を見込みで納付(中間納付)した時に使用する勘定科目',
            ],[
            'wordbook_id' => 2,
            'content' => '前払費用',
            'answer' => '当期に支払った費用のうち、実際に消費するのが次期になる分を決算時に取り消すために使う勘定科目',
            ],[
            'wordbook_id' => 2,
            'content' => '未収収益',
            'answer' => '代金は受け取っていないが収益は発生している当期未回収分の収益を決算時に計上するために使う勘定科目',
            ],[
            'wordbook_id' => 2,
            'content' => '車両運搬具',
            'answer' => '社用車・トラックなど',
            ]
        ]);
    }
}
