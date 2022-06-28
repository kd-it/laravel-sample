# Docker Composeで使うLaravel(サンプル)

このサンプルは、Docker Composeの仕組みを用いて、Laravel+MySQL(MariaDB)で動かせる環境を構築します。

**v2タグ以降を使う** ときは、拡張の類いは管理対象外のため、composerで入れる必要があるので注意してください。

```
PS> docker compose run frontend composer install
PS> docker compose up -d
```

* v0
    * 初期段階(まだcomposerによるLaravel導入をする前)
* v1
    * create-projectをしたところ
    * `src/sample/.env` は本来 `.gitignore` で対象外にしていますが、説明用に必要なので今回は管理対象に設定しています
* v2
    * 開発サーバー起動モードに差し替え
    * `resources/views/welcome.blade.php` を試しに書き換えた例



