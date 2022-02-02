---
{"category_name":"medium","problem_code":"CHITHH","problem_name":"Chef and Science","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":null,"date_added":"15-09-2013","tags":{"0":"binary","1":"furko","2":"ltime04","3":"medium","4":"preprocessing"},"editorial_url":"http://discuss.codechef.com/problems/CHITHH","time":{"view_start_date":1380445200,"submit_start_date":1380445200,"visible_start_date":1380445200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p> </p>
<p>Chef studied science at school. But now he was tired of it. He likes to solve problems on Codechef. Here and now, he decided to go to his favourite site and solve several interesting problems. But as it turned out Chef is not yet ready to solve the harder problems. So you have to help him.</p>
<p>
If you take away all the foreword, then the task set is this: you have <b>N</b> non-negative numbers <b>A<sub>1</sub>, A<sub>2</sub> ... A<sub>N</sub></b> and <b>M</b> requests. Each request consists of three numbers <b>(l, v, k)</b>. <b>MagicInteger(l,v)</b> is equal to concatenation of the numbers <b>A<sub>i</sub></b>, such that <b>(i = l + v * q &amp; 1 &lt;= i &lt;= n &amp; q >= 0)</b>. For each such request you have to write the <b>k-th</b> digit of <b>MagicInteger(l,v)</b>.
</p>
<p>
Concatanation example:<br />
If you have <b>2</b> numbers <b>11, 22</b> - after concatenation you will have <b>1122</b>.<br />
If you have <b>3</b> number <b>13, 44, 12</b> - after concatenation you will have <b>134412</b>.<br />
One more example: <b>0, 3, 11, 0</b> - after concatenation you will have <b>03110</b>. First digit of this string is <b>0</b>, not <b>3</b>.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains an integer <b>N</b> denoting the number of integers in the given array. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the given array. The third line has a single integer <b>M</b> denoting the number of requests. The next <b>M</b> lines contains three space separated numbers in each line <b>(l, v, k)</b> denoting each request. </p>
<h3>Output</h3>
<p>For each request output a single line containing <b>k-th</b> digit of <b>MagicInteger(l, v)</b>. If the length of <b>MagicInteger(l,v)</b> is smaller than <b>k</b>, you need to output "<b>So sad</b>" without quotes.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>l, v</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>k</b> ≤ <b>10<sup>6</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
0 1 2 3
5
1 1 2
1 2 2
1 2 1
2 2 3
4 100000 1

<b>Output:</b>
1
2
0
So sad
3
</pre><p> </p>
<h3>Scoring</h3>
<p>Subtask 1 (30 points): <b>N ≤ 1000</b><br /><br />
Subtask 2 (25 points): <b>V ≤ 100</b><br /><br />
Subtask 3 (45 points):  Look at constraints <br /></p>
