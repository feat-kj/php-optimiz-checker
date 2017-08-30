# PHPパフォーマンス検証

## 導入
1. 導入したいgitプロジェクトに以下のファイルを移動する
    - composer.json
    - build/pre-commit
        - .git/hooks/配下に配置
2. .gitignore に [vendor/]を追加        
3. composer install　
    - composer入ってない場合が入れてください
4. おかしい phpファイルをコミットする時にコミットできなくる
    - コマンドラインのみ動作確認

## サンプル実行
お試しで実行する場合
1. pre-commitの配置
    - build/pre-commit .git/hooks/配下に配置
2. composer install
3. test/test.php を適当に編集　
4. git add して　git commit -m 'test'
