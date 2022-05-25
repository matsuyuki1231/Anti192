# Anti192 - LAN内からログインさせない
LAN内(192.168.l.l)からログインした場合に~~サーバーが開いてないように見せかけて~~kickさせるプラグイン
## 使用方法
ダウンロードした Anti192フォルダ をpluginsフォルダの中に入れてください。このプラグインの起動には、.pharとしてアーカイブ化されていないファイルを読み込むために[DevTools](https://poggit.pmmp.io/p/DevTools)が必要です。
## LAN内からでもログインできるゲーマータグを設定
プラグインを一度起動した後、plugin_data/anti192/allow.ymlの中にあるallowの欄にゲーマータグを追加していってください
## Kick時のメッセージを変更
プラグインを一度起動した後、plugin_data/anti192/allow.ymlの中にあるmessageの欄を変えてください。<br>
初期状態では、「The server isn't available now.(サーバーは現在利用できません。)」になっています。英語下手なのは許してください。