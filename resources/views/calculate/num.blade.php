<html>
　　<head>
    　<title>計算アプリ</title>
　　</head>
　　<body>
   　 <h1>計算アプリです</h1>
　　</body>
　　<div>
　　    <form>
　　        <input type="text" name="usdoller" placeholder="$0" style="height: 30px; width: 120px">
　　        <button type="submit">円に換算</button>
　　    </form>
　　    
　　    <p>日本円で{{ number_format($jpyen) }}円です</p>
　　</div>
</html>
