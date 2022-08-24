## udemy Laravel講座

##ダウンロード方法
git clone
git clone https://github.com/Matsuda1129/laravel_umrache.git

git clone ブランチを指定してダウンロードする場合
git clone -b ブランチ名 https://github.com/Matsuda1129/laravel_umrache.git

もしくはzipファイルでダウンロードしてください

##　インストール方法

## インストール後の実施事項

画像のダミーデータは
public/imagesフォルダ内に
sample1.jpg 〜 sample6.jpg として
保存しています。

php artisan storage:link で
storage フォルダにリンク後、

storage/app/publuc/productsフォルダ内に
保存すると表示されます。
(puroductsフォルダがない場合は作成してください。)

ショップの画像も表示する場合は、
storage/app/publuc/shopsフォルダを作成し
画像を保存してください。

##section7の補足

決済のテストとしてstripeを利用しています。
必要な場合は　.env　にstripeの情報を追記してください。

##section8の補足
メールのテストとしてmailtrapを利用しています。
必要な場合は.env にmailtrapの情報を追記してください。
