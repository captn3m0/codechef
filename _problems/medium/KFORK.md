---
{"category_name":"medium","problem_code":"KFORK","problem_name":"Knight Fork","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"piyushkumar","problem_tester":null,"date_added":"20-04-2014","tags":{"0":"brute","1":"ltime11","2":"piyushkumar","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/KFORK","time":{"view_start_date":1398587400,"submit_start_date":1398587400,"visible_start_date":1398587400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME11/mandarin/KFORK.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME11/russian/KFORK1.pdf">Russian</a>.</h3>
<p>Forking is an important tactics in the game of chess. A piece is said to perform a fork if <br /><br />
1) It is on a safe square, i.e., the next move by the opponent does not kill the piece<br /><br />
2) It targets atleast 2 of the opponents pieces in its next move. So even if the opponent moves one of his pieces to safety, one of his remaining pieces can be killed.<br /><br />
<br /><br />
You are given an <b>NxN</b> board, containing <b>M</b> White Queens. Remember, a Queen can move vertically, horizontally and diagonally; and kills any opponents piece directly in these directions. A Knight has 8 possible moves from position (i,j), viz (i+1,j+2), (i+1,j-2), (i-1,j+2), (i-1,j-2), (i+2,j+1), (i+2,j-1), (i-2,j+1), (i-2,j-1) (while remaining inside the NxN board). You have to find out the number of unoccupied positions on the NxN board, where a Black Knight can be placed such that it forks atleast 2 Queens.<br /><br />
<br /><br />
<b>INPUT:</b><br /><br />
First line contains <b>T</b>, number of testcases<br /><br />
Each testcase starts with a line containing two integers <b>N</b> and <b>M</b><br /><br />
Then M lines follow, ith line containing two space separated integers X[i] and Y[i], the coordinates of the ith Queen<br /><br />
<br /><br />
<b>OUTPUT:</b><br /><br />
For each testcase, output a single line containing the answer to the question<br /><br />
<br /><br />
<b>CONSTRAINTS:</b><br /><br />
1&lt;=T&lt;=10<br /><br />
1&lt;=X[i],Y[i]&lt;=N <br /><br />
0&lt;=M&lt;=N*N <br /><br />
40 points : 1&lt;=N&lt;=8<br /><br />
60 points : 1&lt;=N&lt;=1000<br /><br />
No two queens can be in the same square.<br /><br />
<br /><br />
<b>SAMPLE INPUT:</b><br /><br />
1<br /><br />
5 2<br /><br />
1 1<br /><br />
3 1<br /><br />
<br /><br />
<b>SAMPLE OUTPUT:</b><br /><br />
1<br /><br />
<br /><br />
<b>EXPLANATION:</b><br /><br />
Only forking position is (2,3)</p>
