---
{"category_name":"hard","problem_code":"SEAORD","problem_name":"Sereja and Order","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":null,"date_added":"10-09-2014","tags":{"0":"hard","1":"nov14","2":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEAORD","time":{"view_start_date":1416216600,"submit_start_date":1416216600,"visible_start_date":1416216600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/mandarin/SEAORD.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/russian/SEAORD.pdf">Russian</a>.</h3>
<p>Sereja have <b>N</b> programs. Sereja should run every program on two computers. Program number <b>i</b> works <b>A[i]</b> seconds on first computer and <b>B[i]</b> seconds on second. On each computer Sereja isn't able to run two programs in parallel, also Sereja isn't able to run one program on two computers in one moment. Sereja need to run all programs on both computers in minimal time. Help Sereja in his problem.</p>
<h3>Input</h3>
<p>First line contain integer <b>T</b> number of test cases. <b>T</b> tests follow. First line of each test case contain integer <b>N</b>. Next <b>N</b> lines contain integers <b>A[i], B[i]</b>.</p>
<p> </p>
<h3>Output</h3>
<p>For each test case output optimal time in separated line. On the next <b>N</b> lines. In i-th line output pair of numbers <b>X, Y</b> <b>X</b> - start of working program number <b>i</b> on first computer, <b>j</b> - the same information for second computer.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>Sum of N over all the test cases</b> ≤ <b> 200000 </b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b> 10000 </b></li>
<li><b>1</b> ≤ <b>A[i], B[i]</b> ≤ <b> 100000 </b></li>
</ul>
<p> </p>
<h3>Subtasks</h3>
<li>Subtask #1: <b>1</b> ≤ <b>N</b> ≤ <b> 10 </b>, <b>1</b> ≤ <b>T</b> ≤ <b> 1000 </b>(16 points)</li>
<li>Subtask #2: <b>1</b> ≤ <b>N</b> ≤ <b> 500 </b>(21 points)</li>
<li>Subtask #3: <b>1</b> ≤ <b>N</b> ≤ <b> 10000 </b>(63 points)</li>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1
1 1
3
2 2
1 1
1 1


<b>Output:</b>
2
0 1
4
2 0
0 2
1 3

.
</pre>