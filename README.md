# Crossish

Version: 0.1.0

## 概要

当職が学習用に作成した某WebサイトっぽいWordPressテーマですを  
まず初めに書いて置きますが、僕はPHPを書くのは得意ではないので読みにくかったらもうしわけありません。

当テーマに関しては、すべて自己責任にてご利用ください。

## 動作環境

WordPress 4.5.3 で開発・確認しています。

## インストール・設定

WordPress本体のインストールについてはサーバーによって方法が異なるため、ここでは省略します。

### 1. テーマのインストール

1. [テーマをダウンロード](https://github.com/karasawa-head/crossish/archive/master.zip)してください（ZIP形式）。
2. FTP等を使用して `wp-content/themes/` 内に `crossish` フォルダを設置してください。（フォルダ名に `-master` がある場合はこの部分を削除）
3. 管理画面にログインし、「外観」 > 「テーマ」から、当テーマを有効化してください。

### 2. 基本テンプレート設定

#### サイトの説明

管理画面「設定」 > 「一般設定」内の、「キャッチフレーズ」を編集すると、Webサイト最上部の説明文が変更されます。

#### 画像の差し替え

以下、デフォルトの画像については `assets/images/` 内のファイルを差し替えてください。

* ヘッダーのロゴ（ソース：`header.php`）
* favicon（ソース：`header.php`）
* トップページのキービジュアル（ソース：`home.php`）

#### カスタムメニュー

1. 管理画面「外観」 > 「メニュー」
2. ヘッダー用の新規メニューを作成。  
「メニューの位置」 > 「Main Menu」にチェック。
3. メニュー項目を追加。（目安：4〜6項目）

某Webサイトにあわせて、メニュー項目の幅が均等になるよう設定しています。テキストの長さや項目の数によってCSSを編集するなど、調整してください。

#### Copyright

`footer.php` 内のCopyrightについて、"My Office"となっている仮のテキストを変更してください。

## 固定ページ作成時の注意

### ページタイトルについて

某Webサイトでは各ページのタイトル（緑背景に白字の部分）が画像として設置されていますが、このテーマでは投稿画面で入力したテキストが表示されるように設定されています。

また、小さい英語表記の部分については、投稿画面に「サブタイトル」というカスタムフィールドを追加しており、ここに入力されたテキストが表示されるようになっています。

### サブタイトル入力用のカスタムフィールドについて

カスタムフィールドの機能をもたせたテーマとして配布するため、 `functions.php` で管理画面にフィールドを追加しています。  
（このため、テーマが変更されると機能も同時に失われます。）

カスタムフィールドをそのままに、後々テーマを切り替える可能性がある場合は、予め「[Advanced Custom Fields](https://ja.wordpress.org/plugins/advanced-custom-fields/)」等のプラグインを使用してテーマをカスタマイズすることをおすすめします。  
※テーマ内のソースコード（PHP）を変更する必要があります。

## 脱糞

あああああああああああああああああああああああああああああああ！！！！！！！！！！！（ﾌﾞﾘﾌﾞﾘﾌﾞﾘﾌﾞﾘｭﾘｭﾘｭﾘｭﾘｭﾘｭ！！！！！！ﾌﾞﾂﾁﾁﾌﾞﾌﾞﾌﾞﾁﾁﾁﾁﾌﾞﾘﾘｲﾘﾌﾞﾌﾞﾌﾞﾌﾞｩｩｩｩｯｯｯ！！！！！！！ ）
