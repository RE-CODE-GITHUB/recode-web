# recode-web
[recode.tokyo](http://recode.tokyo/)  

## 誰でもプルリク可能！  
誰でも送ってください！  

## 構造  
なるべくサーバに依存させないような作りにしたい。  
apiディレクトリには、サーバサイドの機能を載せる。機能単位で作成。  
dbはsqlite3を使用し、各ディレクトリごとに作成する。  

## 最初にやること
```
composer install
```

