---
{"category_name":"easy","problem_code":"ANUTHM","problem_name":"Tojo hates probabilities","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anudeep2011","problem_tester":"xiaodao","date_added":"5-01-2015","tags":{"0":"anudeep2011","1":"cook54","2":"easy","3":"maths"},"editorial_url":"http://discuss.codechef.com/problems/ANUTHM","time":{"view_start_date":1421609400,"submit_start_date":1421609400,"visible_start_date":1421609400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK54/mandarin/ANUTHM.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK54/russian/ANUTHM.pdf">Russian</a> as well.</h3>
<h3>Problem description</h3>
<p>As a holiday gift, Tojo received a probability problem. The problem read as follows</p>
<p>Consider an <b>N</b> by <b>M</b> grid. Rows are numbered <b>1</b> to <b>N</b>, from top to bottom. Columns are numbered <b>1</b> to <b>M</b>, from left to right. You are initially at cell (1, 1) and want to go to cell (<b>N, M</b>). From any cell you can move to the cell below it or to the cell right to it. You should never go out of the grid. At any point you should consider all the possibilities of movement with equal probability</p>
<p>Let P[i][j] be the probability of visiting cell (i, j). You need to calculate the sum of P[i][j] for <b>1</b> ≤ <b>i</b> ≤ <b>N</b>, <b>1</b> ≤ <b>i</b> ≤ <b>M</b>.</p>
<p>As we all know, Tojo really hates probability related problems. He wants you to solve this task</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.Only line of each test case has two integer <b>N</b> and <b>M</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the required answer. Answers within an absolute or relative error of 10<sup>-6</sup> will be accepted.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>1000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 2
1 6

<b>Output:</b>
3.000000
6.000000
</pre><h3>Explanation</h3>
<p><b>Example case 1</b></p>
<p>Probability matrix P for N=2, M=2 is<br />
1.0 0.5<br />
0.5 1.0<br />
You are at (1, 1) initially. So the probablity of visiting (1, 1) is 1. At (1, 1) you have 2 options, move below to (2, 1) or to right cell (1, 2). Probablity of going to (1, 2) is 0.5. Probability of going to (2, 1) is 0.5. You always end up at (2, 2), so P[2][2] is 1. Required sum = 1.0 + 0.5 + 0.5 + 1.0 = 3.0</p>
<p><b>Example case 2</b></p>
<p>Probability matrix P for N=1, M=6 is<br />
1.0 1.0 1.0 1.0 1.0 1.0<br />
Because at any position there is only one possible next position.</p>
