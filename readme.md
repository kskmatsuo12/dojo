<h1 align="center">世界を変えるdojyoを作ろう</h1>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## ブランチの使い分け

master：本番環境<br>
release:（本来は本番に放り込む前にテストしてこれをmasterにpushするはずなのですが、）今回は、正しく動作しているチェックポイントとしてバックアップに使いたいと思います。<br>
develop:開発環境、機能が完成したら、作業用のブランチからここにプルリクエストを飛ばしてください。<br>
feat/???:新規機能を作成中に使用するブランチ。４人別々の作業をすると思うので、各自作成してください。<br>
fix/???:少しバグを修正したい時に使用するブランチ。４人別々の作業をすると思うので、各自作成してください。<br>

## 基本的な流れ

①各自featかfixブランチのローカルで作業して、作業の経過をcommitしておく（この辺りは個人作業なので報告不要）<br>
　　※commitメッセージに関しては下記でルールを記載します。<br>
<br>
②作業がひと段落して、機能が完成したら、ローカルで作業しているブランチからremoteの同ブランチへpushする。<br>
<br>
③developへプルリクエスト→マージする（報告必須！）<br>
　コンフリクト発生時は慌てず騒がず。コンフリクトに関しては下記でルールを記載します。<br>
 <br>
④developからpullしてブランチを最新の状態にして作業を再開<br>
<br>
※ややこしいのですが、履歴は全てgithub上で見れるので、ミスがあったら巻き戻れば良いだけなのでガンガン使っていきましょう。<br>
※開発段階ではデータベースに情報が溜まらないので大惨事にはならないはずです！<br>
※リモートのdevelopをpullしてローカルに持ってきて、動作確認してうまくいった場合、ローカルのブランチは不要なので削除して大丈夫です。<br>
※次の作業をする場合、新しいブランチを作成する感じでいきましょう。<br>
<br>
## commitメッセージについて<br>
<br>
１行目に、何の作業をしたのか他の人に伝わりやすく書きましょう。<br>
２行目以降は自由に伝えたいこと、自分のメモなど。<br>
コミットは本当に「小さいことでも、なんでも」という感じで気軽にやっていきましょう<br>
<br>
## コンフリクト発生時の注意<br>
<br>
深呼吸する。<br>
ギットクラーケンの赤文字は基本的にノリでOKを押さない方が良いかもです。<br>
コンフリクト発生時は、Github上で正しい方を残して更新する方法が一番簡単だと思います。<br>
<br>
作業が多い場合は、一度ローカルのdevelopでpullをして最新状態にします。<br>
ローカルdevelop→作業したブランチへマージ。<br>
コンフリクトが起きるので修正をしてブランチをステージング→pushする。<br>
もう一度remote上でdevelopへプルリクエストするとmergeされて成功！<br>
<br>
コンフリクトが発生したとき他の人が何の作業をしたのか確認をして修正するようです。<br>
<br>
<br>
## ファイル名とファイルの分け方<br>
<br>
完全に表示されるページを分けた方が分かりやすいと思います。<br>
もちろん、usersの中にフォルダを作成して見やすくしてもOKです！<br>
<br>
【View】<br>
resouces→view→users→???.blade.php<br>
resouces→view→clients→???.blade.php<br>
resouces→view→admin→???.blade.php<br>
<br>
【CSS】<br>
public→css→users→???.css<br>
public→css→clients→???.css<br>
public→css→admin→???.css<br>
<br>
【JS】<br>
public→js→users→???.js<br>
public→js→clients→???.js<br>
public→js→admin→???.js<br>
<br>
対応するViewとCSSとJSは【同じ名称にする】<br>
<br>
layouts.appには絶対に共通になるであろうheadタグだけ記載し、<br>
CSSやJSはViewごとに読み込むファイルを記載する。<br>
<br>
<br>
##composerの利用について<br>
<br>
composerで追加した機能は共有していきましょう。<br>
コマンドを叩いて導入したものは、まとめておいて、いざというときの復元作業で使うことがあるようです。<br>
（Qiitaの本番環境でやらかした記事より）<br>
<br>
<br>
##どんどんルールの追記お願いします。<br>
