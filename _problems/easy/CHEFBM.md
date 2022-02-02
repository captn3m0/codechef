---
{"category_name":"easy","problem_code":"CHEFBM","problem_name":"Chef and Strange Matrix","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":"1 - 2","source_sizelimit":50000,"problem_author":"berezin","problem_tester":"xcwgf666","date_added":"18-03-2014","tags":{"0":"berezin","1":"easy","2":"implementation","3":"may14"},"editorial_url":"http://discuss.codechef.com/problems/CHEFBM","time":{"view_start_date":1399887000,"submit_start_date":1399887000,"visible_start_date":1399887000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/CHEFBM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/CHEFBM.pdf">Russian</a>.</h3>
<p>Spring is interesting season of year. Chef is thinking about different things, but last time he thinks about interesting game - "Strange Matrix". </p>
<p>Chef has a matrix that consists of <b>n</b> rows, each contains <b>m</b> elements. Initially, the element <b>a<sub>i</sub><sub>j</sub></b> of matrix equals <b>j</b>. <b>(1 ≤ i ≤ n, 1 ≤ j ≤ m)</b>. </p>
<p>Then <b>p</b> times some element <b>a<sub>i</sub><sub>j</sub></b> is increased by <b>1</b>. </p>
<p>Then Chef needs to calculate the following: </p>
<ul>
<li>For each row he tries to move from the last element (with number <b>m</b>) to the first one (with the number <b>1</b>). </li>
<li>While staying in <b>a<sub>i</sub><sub>j</sub></b> Chef can only move to <b>a<sub>i</sub><sub>j - 1</sub></b> only if <b>a<sub>i</sub><sub>j - 1</sub> ≤ <b>a<sub>i</sub><sub>j</sub></b></b>. </li>
<li>The cost of such a movement is <b>a<sub>i</sub><sub>j</sub></b> - <b>a<sub>i</sub><sub>j - 1</sub></b>.</li>
<li>Otherwise Chef can't move and lose (in this row).</li>
<li>If Chef can move from the last element of the row to the first one, then the answer is the total cost of all the movements. </li>
<li>If Chef can't move from the last element of the row to the first one, then the answer is <b>-1</b>. </li>
</ul>

<p> Help Chef to find answers for all the rows after <b>P</b> commands of increasing. </p>
<h3>Input</h3>
<p>
<ul>
<li>The first line contains three integers <b>n</b>, <b>m</b> and <b>p</b> denoting the number of rows, the number of elements a single row and the number of increasing commands. </li>
<li>Each of next <b>p</b> lines contains two integers <b>i</b> and <b>j</b> denoting that the element <b>a<sub>i</sub><sub>j </sub></b> is increased by one. </li>
</ul>
</p>
<h3>Output</h3>
<ul>
<li>For each row in a single line print the answer after the <b>P</b> increasing commands.</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>n, m, p</b> ≤ <b>10 ^ 5</b></li>
<li><b>1</b> ≤ <b>i</b> ≤ <b>n</b></li>
<li><b>1</b> ≤ <b>j</b> ≤ <b>m</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4 4 6
2 2
3 2 
3 2 
4 3
4 4
4 3

<b>Output:</b>
3
3
-1
4

</pre><p> </p>
<h3>Explanation</h3>
<pre>
<p>Here is the whole matrix after <b>P</b> commands:</p>
1 2 3 4
1 3 3 4
1 4 3 4
1 2 5 5
<p> Explanations to the answer: </p>
<ul>
<li>The first line is without changes: 4-3=1, 3-2=1, 2-1=1. answer = 3. </li>
<li>The second line: 4-3=1, 3-3=0, 3-1=2. The answer is 3. </li>
<li>The third line: 4-3=1, 3-4=-1, Chef can't move to the first number here. Therefore, the answer is -1. </li>
<li>The fourth line: 5-5=0, 5-2=3, 2-1=1. The answer is 4. </li>
</ul>

</pre>