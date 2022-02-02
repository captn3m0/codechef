---
{"category_name":"medium","problem_code":"POWERMUL","problem_name":"Fombinatorial","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":null,"date_added":"21-07-2014","tags":{"0":"devuy11","1":"easy","2":"nov14","3":"number"},"editorial_url":"http://discuss.codechef.com/problems/POWERMUL","time":{"view_start_date":1416216600,"submit_start_date":1416216600,"visible_start_date":1416216600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/mandarin/POWERMUL.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/russian/POWERMUL.pdf">Russian</a>.</h3>
<p>You are given a function f which is defined as :<br /><br /><br />
<img src = "https://codechef_shared.s3.amazonaws.com/download/NOV14/CodeCogsEqn%283%29.gif" /><br /><br /></p>
<p>Your task is to find the value of  <b>f(N) / ( f(r)*f(N-r) )</b><br /><br /> . As it will be a large number output it modulo <b>M</b>. </p>
<h3> Input </h3>
<p>First line contains <b>T</b> , number of test cases to follow.<br /></p>
<p>Next follows <b>T</b> test case.<br /></p>
<p>First line of ever test case contain 3 space separated integers <b>N , M</b> and <b>Q</b>.<br /></p>
<p>Next <b>Q</b> line follows , each line contain r.<br /></p>
<h3>Output</h3>
<p>For every test case , output <b>Q</b> lines , each line containing the answer.<br /></p>
<h3>Constraints</h3>
<ul>
<li>2 ≤  <b>N</b>  ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>M</b> ≤ 10<sup>9</sup></li>
<li>2 ≤ Sum of <b>N</b> over all test cases ≤ 5*10<sup>5</sup></li>
<li>2 ≤ Sum of <b>Q</b> over all test cases ≤ 10<sup>5</sup></li>
<li>1 &lt; <b>r</b> &lt; <b>N</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li> Subtask 1:  N ≤ 5 , rest of the constraints are same. Points - 9 </li>
<li> Subtask 2:  N ≤ 500 , M is a prime number , rest of the constraints are same. Points - 31 </li>
<li> Subtask 3: Refer to constraints above : Points-60 </li>
</ul>
<pre><h3>Sample Input</h3>
1
5 24 2
2
3
<h3>Sample Output</h3>
8
8
</pre><h3>Explanation</h3>
<p>f[1] = 1<br /><br />
f[2] = 4<br /><br />
f[3] = 1*2<sup>2</sup>*3<sup>3</sup> = 108<br /><br />
f[4] =1*2<sup>2</sup>*3<sup>3</sup>*4<sup>4</sup> = 27648<br /><br />
f[5] = 1*2<sup>2</sup>*3<sup>3</sup>*4<sup>4</sup>*5<sup>5</sup> =86400000<br /><br />
value of f[5] / (f[2]*f[3]) = 200000 and 200000%24 is 8<br /></p>
