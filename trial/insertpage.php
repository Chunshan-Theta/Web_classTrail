<html>
	<head>
	<meta charset='utf-8'/>
	<link type="text/css" rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="topbar" style="width:100%;height:50px;background-color:#0066FF;padding-right:12px;right:0;left:0;top:0;position: fixed;" >        
            <button id="host" style="float:right;height:50px;background-color:#0066FF; border:5px #0066FF solid;"onclick="location.href='https://www.facebook.com/chunshan.wang'">聯絡版主</button>
            <button onclick="location.href='./index.php'" style="float:right;height:50px;background-color:#0066FF; border:5px #0066FF solid;">首頁</button>
        </div>
        <div id="topspan" style="height:50px;margin:160px;border-bottom:5px #FFF solid">
            <h1 id="indextitle">將我們的體驗傳達出去</h1>
            <p style="padding:20px;">        
            讓世人知道每堂課程的結果，用我們的聲音揚善罰惡<br>
            我們誓言公正評論每一堂課程<br>
            今日就是教授們的期末評量，讓知道他們的課堂是否及格？該被二一的人是學生還是教授？<br>
            問心無愧就接受眾人檢視
            
            </p>
        </div>
       
            
		<div id="content" style="margin:auto;padding-left:100px;padding-bottom:20px;border-radius:100px;background-color:#77AAFF;width:750px;">
            
            
            <form method='POST' action='sqlinsert.php'>    
                <p id="classN" style="padding:20px;padding-right:100px;">1.課程名稱  <br>    
                    <input for="classN" name='classN' style="float:right;width:70%;"  type="text" value=""></input>            
                </p>
                <p id="teacherN"  style="padding:20px;padding-right:100px;">2.教師姓名 <br>     
                    <input for="teacherN" name="teacherN" style="float:right;width:70%;"  type="text" value=""></input>            
                </p>            
                <p id="major"  style="padding:20px;padding-right:100px;">3.開設系別<br>      
                    <input for="major" name="major" style="float:right;width:70%;"  type="text" value=""></input>            
                </p>            
                <p id="classcall" style="padding:20px;padding-right:100px;">4.固定點名<br> 
                    <input type="radio" name="classcall" value="1">有</input>
                    <input type="radio" name="classcall" value="0">無</input>                    
                </p>            
                <p id="classexam" style="padding:20px;padding-right:100px;">5.課堂小考<br>      
                    <input type="radio" name="classexam" value="1">有</input>
                    <input type="radio" name="classexam" value="0">無</input>           
                </p>
                <p id="homework"  style="padding:20px;padding-right:100px;">6.作業<br>      
                    <input type="radio" name="homework" value="1">有</input>
                    <input type="radio" name="homework" value="0">無</input>             
                </p>
                <p id="midexam"  style="padding:20px;padding-right:100px;">7.期中考試<br>    
                    <input type="radio" name="midexam" value="筆試(選擇題居多)">筆試(選擇題居多)</input>
                    <input type="radio" name="midexam" value="筆試(非選題居多)">筆試(非選題居多)</input> 
                    <input type="radio" name="midexam" value="實作">實作</input>
                    <input type="radio" name="midexam" value="上臺報告(個人)">上臺報告(個人)</input>   
                    <input type="radio" name="midexam" value="上臺報告(團體)">上臺報告(團體)</input>
                    <input type="radio" name="midexam" value="繳交報告(個人)">繳交報告(個人)</input>
                    <input type="radio" name="midexam" value="繳交報告(團體)">繳交報告(團體)</input>
                    <input type="radio" name="midexam" value="無">無</input>
                    <input type="radio" name="midexam" value="其他">其他</input>                    
                </p>            
                <p id="endexam"  style="padding:20px;padding-right:100px;">8.期末考試<br>      
                    <input type="radio" name="endexam" value="筆試(選擇題居多)">筆試(選擇題居多)</input>
                    <input type="radio" name="endexam" value="筆試(非選題居多)">筆試(非選題居多)</input> 
                    <input type="radio" name="endexam" value="實作">實作</input>
                    <input type="radio" name="endexam" value="上臺報告(個人)">上臺報告(個人)</input>   
                    <input type="radio" name="endexam" value="上臺報告(團體)">上臺報告(團體)</input>
                    <input type="radio" name="endexam" value="繳交報告(個人)">繳交報告(個人)</input>
                    <input type="radio" name="endexam" value="繳交報告(團體)">繳交報告(團體)</input>
                    <input type="radio" name="endexam" value="無">無</input>
                    <input type="radio" name="endexam" value="其他">其他</input>              
                </p>            
                <p id="cost"  style="padding:20px;padding-right:100px;">9.難易度<br>      
                    <input type="radio" name="cost" value="非常簡單">非常簡單</input>
                    <input type="radio" name="cost" value="簡單">簡單</input> 
                    <input type="radio" name="cost" value="一般">一般</input>
                    <input type="radio" name="cost" value="困難">困難</input>   
                    <input type="radio" name="cost" value="非常困難">非常困難"</input>         
                </p>            
                <p id="value" style="padding:20px;padding-right:100px;">10.評價<br>     
                    <input type="radio" name="value" value="非常推薦">非常推薦</input>
                    <input type="radio" name="value" value="推薦">推薦</input> 
                    <input type="radio" name="value" value="一般">一般</input>
                    <input type="radio" name="value" value="浪費生命">浪費生命</input>   
                    <input type="radio" name="value" value="非常浪費生命">非常浪費生命"</input>         
                </p>            
                <p id="say"  style="padding:20px;padding-right:100px;">11.感想(250字內)<br>      
                    <input  type="textarea" for="say" name="say" style="float:right;width:70%;height:180px;"  value=""></input>            
                </p>        
                <br><br><br><br><br><br><br>
                <input type='submit' value='送出' name='insert'/>
            </form>
            
        </div>
        
        
		<!-- script -->
        <script>

        
        
        
        

        </script>	
	</body>
</html>