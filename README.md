<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Webサービスの紹介
単語帳を作って学習ができるオリジナルWebサービス 「タンシェル」：  
https://www.tansheru.com/

単語帳（暗記カード）は学生時代などに使用されたことがある人多いかと思います。  
英単語などを書き留めて、ペラペラめくって学習するツールです。  
この単語帳をパソコンやスマホ、タブレットからいつでも作成・学習するためのWebサービスとなります。

また、特徴として他のユーザと単語帳が共有できます。  
単語帳は、学校のテスト、試験が終わると用が無くなって破棄するだけになります。  
しかし、他に必要な人、欲しい人が必ずいるので、共有して使えるようにしてはどうかと思いました。  
単語帳自体のWebサービス、アプリは色々ありますが、「共有する」という特徴を持たせました。  
そのため、Webサービスの名前は「単語（帳）をつくる」、「共有（シェア）する」で「タンシェル」としました。

## HOME画面
HOME画面からは自身で作成した単語帳やフォローした他のユーザの単語帳が並ぶようになっています。他のユーザの単語帳はそのユーザをフォローすることでHOME画面に表示されます。

## 学習画面
登録した単語と答えを上下に分けて表示しています。  
解答を確認する際は左へスライドします。  

解答の表示方法は少し悩みましたが、スライド表示にしました。  
当初はクリックでパッと解答が見れるようにしていましたが、実際の単語帳を使用する際は、ちょっとめくったり、解答の頭文字だけ見たりとかすると思うので、できるだけそういった使い方に近い動作にしたかったというのが理由です。


## 機能一覧
・単語帳/単語 登録  
・単語帳/単語 管理機能  
　-編集  
　-削除  
・単語帳学習機能  
　-登録順出題  
　-ランダム出題  
・いいね機能  
　-いいね（お気に入り）登録/削除  
　-いいね（お気に入り）一覧表示  
・タグ機能  
　–タグ登録/削除  
　–同一タグの単語帳表示  
・ユーザ機能  
　-ユーザ登録、ログイン、ログアウト  
　-他ユーザのフォロー／アンフォロー  
　-パスワード再設定  
　-プロフィール設定（画像アップロード）  

レスポンシブ対応  
Webサービスの性質上、外で使うことが多いと思われるため、スマホ表示にも対応しています。

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
