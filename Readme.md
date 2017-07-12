# PHPパフォーマンス検証

### hooks/pre-commit
- メリット
    - 簡単に記述できる
    - shell, python, go, ruby など選択が可能
- デメリット    
    - shell, python, go, ruby が動かないといけない
    - いろいろ記載できるがコードが長くなる

### pre-commit
- メリット
    - モジュールを入れると管理が楽
    - かっこいい
- デメリット    
    - pre-commitのインストールが必要
    - モジュール配置ディレクトリがソースと同じ階層になるかも？？

 # 今のとこの結論
 - pre-commitの方がカッコ良いけど、構成が微妙
   hooks/pre-commit が管理的に良さげ
