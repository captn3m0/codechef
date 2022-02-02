---
{"category_name":"medium","problem_code":"LMA1","problem_name":"Lucy and the Math Analysis","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":null,"date_added":"13-10-2013","tags":{"0":"easy","1":"ltime06","2":"math","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/LMA1","time":{"view_start_date":1385285563,"submit_start_date":1385285563,"visible_start_date":1385285563,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/LTIME06/russian/LMA1.pdf">here</a></h3>
<p>Lucy is taking math analysis classes in her school. She always has a lot of homework and she always spends a considerable amount of time in order to do it, but today she had completely forgotten about it for some reason. So, please, help her!</p>
<p>Lucy asks you to solve to following problem: calculate the following:<br /> <img src="//www.codechef.com/download/CodeCogsEqn-7.gif" /><br /> Output the result till the <b>D-th</b> digit after the decimal point. We're asking you to output truncated result, but not rounded!</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /><br />
Each test is described by a line of four numbers - <b>a</b>, <b>p</b>, <b>q</b> and <b>D</b> respectively. <b>a</b>, <b>p</b>, <b>q</b> will be given with exactly two digits after the decimal point.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the corresponding test case (with <b>D</b> digits after the decimal point).</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
0.62 2.71 3.14 42
0.91 4.70 6.67 18
0.01 9.81 8.63 66

<b>Output:</b>
17.903573407202216066481994459833795013850415
796.867901234567901234
0.187143148658300173451688603203754718906234057749209264360779512294
</pre><h3>Scoring</h3>
<p>In all the test cases, 0.01 &lt;= <b>a</b> &lt; 1.00, 0.00 &lt;= <b>p</b> &lt;= 10.00, 0.00 &lt;= <b>q</b> &lt;= 10.00<br /><br />
Output will not exceed 1 MB<br /><br />
Subtask 1 (31 point): <b>T</b> = 100000, 5 &lt;= <b>D</b> &lt;= 7, 0.01 &lt;= <b>a</b> &lt;= 0.50<br /><br />
Subtask 2 (29 points): <b>T</b> = 100, 50 &lt;= <b>D</b> &lt;= 100<br /><br />
Subtask 3 (15 points): <b>T</b> = 10000, 50 &lt;= <b>D</b> &lt;= 100<br /><br />
Subtask 4 (25 points): 10 &lt;= <b>T</b> &lt;= 100, 1 &lt;= <b>D</b> &lt;= 100000<br /></p>
