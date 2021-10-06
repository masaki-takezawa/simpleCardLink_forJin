# ■ About simpleCardLink_for_Wordpress
WordPressテーマ「JIN」に対応したリンクカードを作成するWordPressプラグインです。

aタグを勝手にpタグで囲み、不自然な余白を作ってしまうWordPressの仕様を避け、比較的キレイにリンクカードが挿入されるようにしています。

また、カードのサムネイル、説明文、タイトルを自由に変更できるのも本プラグインのこだわりです。

## ⇩ Sample
![Sample](https://user-images.githubusercontent.com/83880991/136142038-6e12edf0-4ffa-4f3a-9ec0-90a82b106d1d.png)

# ■ ご利用方法
以下の手順でご利用頂けます。

## □ 準備編
1. 当プラグインをWordpressにインストール＆有効化
2. 追加CSSに当CSSを追加

## □ 利用編
1. ショートコード内に必要事項を記述

それぞれ解説していきます。


# ■ 準備編
## 1. 当プラグインをWordpressにインストール＆有効化
1. 上記のファイル群より、「simpleCardLink_forJin.zip」をダウンロード。

![スクリーンショット 2021-10-06 140334](https://user-images.githubusercontent.com/83880991/136143602-dc9544a4-08dd-4491-b41f-4e87b332ebb6.png)

2. WordPressの「ダッシュボード」 → 「プラグイン」を開く。

![スクリーンショット 2021-10-06 141031](https://user-images.githubusercontent.com/83880991/136144087-66c2fd7b-10f8-4517-bef0-802fa07c4c21.png)

3. 「新規追加」 → 「プラグインのアップロード」より①でダウンロードしたzipファイルをアップロードしてください。

![スクリーンショット 2021-10-06 141055](https://user-images.githubusercontent.com/83880991/136144093-60359508-3456-4d56-90f1-57ef0c86e6be.png)


## 2. 追加CSSに当CSSを追加
1. 上記のファイル群の、「CSS.scss」を開き表示されたコードをコピー。

![2](https://user-images.githubusercontent.com/83880991/136143608-2fff9519-e0b7-4d77-b810-114860b735b7.png)

2. WordPressの「カスタマイズ」 → 「追加CSS」に①でコピーしたコードを貼り付けてください。

※Githubの特性上、コピー時に余分な文字列が前後に挿入されることがあります。エラーが出た場合は、貼り付けたコードの前後に余分な文字列が挿入されてしまっていないかご確認ください。

# ■ 利用編
1. 下記ショートコードを挿入し、必要箇所をご記入ください。
```ショートコード
[SCL title="リンク先タイトル" desc="説明文(65字以内、推奨)" url="リンク先のURL" imgurl="サムネイル画像のURL"]
```
