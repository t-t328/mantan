# mantan
htmlの制作課題
=Gitルール
-必ず個人開発用のローカルブランチを切ってから編集すること
-編集するときはカレントブランチを確認すること
-コミットはこまめに、マージは完成してから
=編集ファイル
-/mantan/web/resources
=コンポーネントについて
-LaravelのBladeComponentsを使用
-HTML上でコンポーネント(可変する部分)として利用したい部分には "{{ $変数名 }}"


# clone後に実行するコマンド
~/mantan$ ./setup.sh


# 主なコマンド
-起動
~/mantan/web$ make up
-終了
~/mantan/web$ make down


# おまけ
-エイリアス設定
$ alias sail='./vendor/bin/sail'

-tailwindチートシート
https://nerdcave.com/tailwind-cheat-sheet

-laravel参考文献
https://reffect.co.jp/laravel/laravel-components#Blade_Components-3