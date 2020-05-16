## Pictweet
----------------------------------------------------------

### 必要テーブル
#### users
- id
- name
- email
- password
- created_at
- updated_at
#### tweets
- id
- title
- content
- user_id
- created_at
- updated_at
#### tweet_favorite
- user_id
- tweet_id
#### tweet_pictures
- tweet_id
- url

----------------------------------------------------------

### URL一覧
- /                           | GET | () | PicTweet紹介ページ
- /user/register/input        | GET | () | ユーザー情報登録画面
- /user/register/confirm      | GET | () | ユーザー情報登録内容確認画面
- /user/register/complete     | GET | () | ユーザー情報登録完了通知画面
- /user/register/login        | GET | () | ユーザーログイン画面
- /user/profile/edit          | GET | (要認証) | ユーザープロフィール画面(対自分：編集機能付き)
- /user/profile/show          | GET | () | ユーザープロフィール画面(対一般ユーザー)
- /tweet                      | GET | () | tweet一覧画面(tweet投稿機能含む・・・認証後のみ)
- /tweet/detail               | GET | () | tweet詳細画面
