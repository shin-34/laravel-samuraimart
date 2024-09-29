<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP+DB</title>
     <link rel="stylesheet" href="css/style.css">
 </head>
 
 <body>
     <h1>ユーザー登録</h1>
     <p>ユーザー情報を入力してください。</p>
     <form action="insert.php" method="post">
         <div>
             <label for="user_name">お名前<span>【必須】</span></label>
             <input type="text" id="user_name" name="user_name" maxlength="60" required>
 
             <label for="user_furigana">ふりがな<span>【必須】</span></label>
             <input type="text" id="user_furigana" name="user_furigana" maxlength="60" required>
 
             <label for="user_email">メールアドレス<span>【必須】</span></label>
             <input type="email" id="user_email" name="user_email" maxlength="255" required>
 
             <label for="user_age">年齢</label>
             <input type="number" id="user_age" name="user_age" min="13" max="130">
 
             <label for="user_address">住所</label>
             <input type="text" id="user_address" name="user_address" maxlength="255">
         </div>
         <button type="submit" name="submit" value="insert">登録</button>
     </form>
 </body>
 
 </html>