# convert-to-hiragana
## 概要
[https://ryo.dev/service/api/convert-to-hiragana/v1/](https://ryo.dev/service/api/convert-to-hiragana/v1/)の`sentence`パラメーターに文章を指定してリクエストを送ると、ひらがなに変換してJSON形式で返します。数字やアルファベットはひらがなに変換せず、そのまま返します。

Yahoo! JAPANが提供しているテキスト解析WebAPIの中の[ルビ振り機能](https://developer.yahoo.co.jp/webapi/jlp/furigana/v1/furigana.html)を使っています。

**クレジット表記**：Webサービス by Yahoo! JAPAN （https://developer.yahoo.co.jp/about）

## サンプル
`sentence`パラメーターに「COVID-19が早く収束するといいですね」という文章を渡してリクエストを送る場合、リクエストURLは以下のようになります。
```
https://ryo.dev/service/api/convert-to-hiragana/v1/?sentence=COVID-19が早く収束するといいですね
```
このリクエストURLは次のようなJSONを返します。
```
"COVID-19がはやくしゅうそくするといいですね"
```

## その他
知識とスキルがしょぼいPHPerが作ってみたAPIです。いろいろ問題があるかもしれないので、もし見つけましたら教えていただけますと幸いです。
