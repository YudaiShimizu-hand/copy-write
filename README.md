# ECサイトの作成

## 設計
* ER図
https://docs.google.com/spreadsheets/d/1GTtviuyGAwl8Lr0M1j1xykWCX4hyR1Xw3tk3hG0Ed9c/edit#gid=0
* 設計書
https://docs.google.com/presentation/d/1mWb9vMNcrWY4LFBGtFupwMq5kjXZenZw42I56MCBW20/edit#slide=id.p
 * 業務フロー図
 * ワイヤーフレーム
* 作成レポート
https://docs.google.com/spreadsheets/d/1IYcW7qtcNor8zSaguB_vv7dCjy7cGBiLFWzQGZrWewU/edit#gid=0


## 使用技術

```
php: ^8.0.2
laravel: ^9.19
vue.js: vue@3.2.47
mysql : 8.0.32

```

## 環境設定

```
$ docker-compose up -d

$ docker-compose exec php bash
//phpコンテナに入る

$ docker-compose exec db bash
//dbコンテナに入る

$ mysql -u root -p 
//mysqlに入る //password

```

## 今後やること

* vue,jsでフロント画面を整える
* paginateと検索フォームの作成
* テスト