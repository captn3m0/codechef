---
{"category_name":"medium","problem_code":"LCH15CD","problem_name":"Candidate walk","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":"1 - 2","source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"rubanenko","date_added":"25-12-2014","tags":{"0":"dynamic","1":"easy","2":"implementation","3":"ltime20","4":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/LCH15CD","time":{"view_start_date":1422174600,"submit_start_date":1422174600,"visible_start_date":1422174600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME20/mandarin/LCH15CD.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME20/russian/LCH15CD.pdf">Russian</a>.</h3>
<p> Elections in Bytetown are coming soon! </p>
<p> Candidate Boris is going to have a small walk. Bytetown can be represented as <b>N</b>-dimensional cube with edge size <b>D</b>. Initially Boris stands in cell with coordinates <b>(0, 0, ... 0)</b> and his destination is cell <b>(D-1, D-1,... D-1)</b>. His route consists of chain of the cells, where each pair of consecutive cells differs in exactly one coordinate by 1 and sum of coordinates strictly increases during his walk. Note that Boris walks through the <b>cells</b> not points.</p>
<p>But not all the people in Bytetown are going to vote for Boris. Some of them are sure that Boris is a liar and bribetaker and they will tell it to Boris if they meet him. Boris doesn't like such people and avoids them. He knows that at cell with coordinares <b>(i<sub>0</sub>, i<sub>1</sub>,..., i<sub>N-1</sub>)</b> he will meet <b>(i<sub>0</sub>^ i<sub>1</sub>^...^i<sub>N-1</sub>)x(i<sub>0</sub>+ i<sub>1</sub>+...+ i<sub>N-1</sub>)</b> such people (in other words XOR-sum of coordinates times arithmetic sum of coordinates). Try to help him to find minimal number of unfriendly people he will have to meet. </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Each of the next <b>T</b> lines contain two integer <b>N</b> and <b>D</b>.</p>
<h3>Output</h3>
<p>Output <b>T</b> lines. Every line should contain one integer -  the minimal number of unfriendly people among all the possible routes Boris will have to meet for the corresponding test case.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10</b></li>
<li>Total number of cells in one cube  doesn't exceed <b>2<sup>16</sup></b></li>
</ul>
<h3> Subtasks </h3>
<p><b>Subtask #1</b>[26 points]: <b>N = 1</b><br />
<b>Subtask #2</b>[29 points]:  <b>N = 2</b><br />
<b>Subtask #3</b>[45 points]:  <b>N > 2</b></p>
<pre><h3>Example</h3>
<b>Input:</b>
4
1 2
1 3
2 2
2 3
<b>Output:</b>
1
5
1
10
</pre>