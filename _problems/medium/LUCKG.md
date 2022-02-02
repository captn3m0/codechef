---
{"category_name":"medium","problem_code":"LUCKG","problem_name":"Lucky Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witalij_hq ","problem_tester":null,"date_added":"25-04-2014","tags":{"0":"ad","1":"bfs","2":"july14","3":"medium","4":"witalij_hq"},"editorial_url":"http://discuss.codechef.com/problems/LUCKG","time":{"view_start_date":1405330200,"submit_start_date":1405330200,"visible_start_date":1405330200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/mandarin/LUCKG.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/russian/LUCKG.pdf">Russian</a>.</h3>
<p>
Chef, to entertain customers, decided to establish some kind of game in his restaurant. And here is what he invented:<br />
n players sit around a round table. There is n * m cards with unique numbers of range <b>1..n*m</b>.<br />
Each player has m cards. In each set of the game each player selects some card and everyone shows his card at the same time. Card of <b>i<sup>th</sup></b> player is compared to card of player <b>p[i]</b>. If it’s number is greater than the number on card of player <b>p[i]</b>, then <b>i<sup>th</sup></b> gets a point. <b>P</b> is a permutation of sequence <b>0..n-1</b>.<br />
But all customers when playing this game want to win. Chef on his side wants to please his customers. So, he decided to give cards in such way, that each player gets a point with probability larger than <b>½</b>.<br />
But it appears to be a complicated task, so he asks you for help.
</p>
<p> </p>
<h3>Input</h3>
<p>First line of input contains <b>T</b> – number of test cases. Then <b>T</b> test cases follow. Each test case consists of two lines. First line contains two numbers – <b>n</b> and <b>m</b>. Second one – permutation <b>p</b>.</p>
<h3>Output</h3>
<p>For each test case, if there’s no solution output single line <i>“No Solution”</i> (without quotes), otherwise output <b>n</b> lines with cards for each player. <b>i<sup>th</sup></b> line should contain <b>m</b> numbers in increasing order – numbers on <b>i<sup>th</sup></b> player’s cards.<br/><br />
Extra spaces at the end of the line are not allowed.</br/></p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>n, m</b> ≤ <b>10<sup>3</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 1
0
3 3
2 0 1

<b>Output:</b>
No Solution
2 6 7
3 4 8
1 5 9
</pre><p> </p>
<p><b>Explanation</b><br />
For second test case, probability is 5/9 for each player to get a point.</p>
<p> </p>
