---
{"category_name":"easy","problem_code":"L56LABY","problem_name":"Chef and Escaping from the Labyrinth","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kefaa","problem_tester":"mgch","date_added":"18-01-2018","tags":{"0":"bfs","1":"easy","2":"greedy","3":"heaps","4":"kefaa","5":"ltime56","6":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/L56LABY","time":{"view_start_date":1517073000,"submit_start_date":1517073000,"visible_start_date":1517073000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME56/mandarin/L56LABY.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME56/russian/L56LABY.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME56/vietnamese/L56LABY.pdf">Vietnamese</a> as well.</h3>

<p>Chef has fallen into the Labyrinth!</p>

<p>Fortunately, Chef found a map of the Labyrinth. On this map, the Labyrinth is represented as an <b>N × M</b> grid of integers. The rows of the grid are numbered 1 through <b>N</b> and the columns are numbered 1 through <b>M</b>; let's denote the cell in the <b>i</b>-th row and <b>j</b>-th column by (<b>i</b>, <b>j</b>). Each cell of this grid belongs to one of the following three types:
<ul>
<li>Forbidden cell (represented by <b>-1</b>). It's impossible to enter or exit this cell.</li> 
<li>Empty cell (represented by <b>0</b>). Chef can freely enter or exit this cell, but cannot use it to escape the Labyrinth.</li> 
<li>Exit cell (represented by a positive integer <b>x</b>). Chef can freely enter or exit this cell. Moreover, Chef can escape the Labyrinth if he's located in this cell and no more than <b>x</b> seconds have elapsed since the beginning.</li>
</ul>
</p>

<p>Chef is able to move from his current cell to any non-forbidden adjacent cell of the Labyrinth; this action takes <b>one second</b>. Two cells are considered adjacent if they share an edge.</p>

<p>Chef does not even know his starting location, so he decided first to determine his chances of escaping from each possible cell. Specifically, for each non-forbidden cell, Chef wants to know whether it is possible to escape the Labyrinth when he's initially (at time 0) located in this cell.</p>

<p>Help Chef — for each cell, find out if it's possible to start in this cell at time 0 and escape the Labyrinth.</p>


<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>M</b>.</li>
<li><b>N</b> lines follow; each of these lines contains <b>M</b> space-separated integers. For each 1 ≤ <b>i</b> ≤ <b>N</b>, 1 ≤ <b>j</b> ≤ <b>M</b>, the <b>j</b>-th number on the <b>i</b>-th of these lines describes the type of cell (<b>i</b>, <b>j</b>) of the Labyrinth.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print <b>N</b> lines; each of these lines should contain a string consisting of <b>M</b> characters. The <b>j</b>-th character in the <b>i</b>-th of these strings should be:
<ul>
<li><tt>B</tt> if the cell (<b>i</b>, <b>j</b>) is forbidden</li> 
<li><tt>Y</tt> if the cell (<b>i</b>, <b>j</b>) of the Labyrinth is not forbidden and it is possible to escape the Labyrinth when starting in this cell</li>
<li><tt>N</tt> if the cell (<b>i</b>, <b>j</b>) is not forbidden and it is impossible to escape when starting in this cell</li></ul>
</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 30</li>
<li>1 ≤ <b>N</b>, <b>M</b> ≤ 1,000</li>
<li>1 ≤ sum of <b>N</b> · <b>M</b> for all test cases  ≤ 3,000,000</li>
<li>-1 ≤ type of each cell ≤ 1,000</li>
</ul>


<h3>Subtasks</h3>
<p>
<b>Subtask #1 (30 points):</b>
<ul>
<li>2 ≤ <b>N</b>, <b>M</b> ≤ 100</li>
<li>1 ≤ sum of <b>N</b> · <b>M</b> for all test cases ≤ 30,000</li>
</ul>
</p>

<p><b>Subtask #2 (70 points):</b> original constraints</p>

<h3>Example</h3>
<pre><b>Input:</b>

2
5 5
0 0 0 -1 5
0 0 0 -1 0
1 0 0 0 0
0 0 0 0 0
0 0 0 0 0
3 4
0 0 5 -1
0 -1 -1 0
0 0 0 0

<b>Output:</b>

NNNBY
YNYBY
YYYYY
YNYYY
NNNYY
YYYB
YBBN
YYNN
</pre>

<h3> Explanation </h3>
<p><b>Example case 1:</b> Cell (3, 1) can be used as the exit when starting in cells (2, 1), (3, 1), (4, 1) or (3, 2). Cell (1, 5) can be used as the exit if Chef starts in cells (3, 2), (3, 3), (2, 3), (4, 3), (3, 4), (4, 4), (5, 4), (1, 5), (2, 5), (3, 5), (4, 5) or (5, 5). Please note that if Chef starts in cell (3, 2), he can use either of the two exit cells for escaping.</p>

<p><b>Example case 2:</b> Chef can escape if he starts in cells (1, 3), (1, 2), (1, 1), (2, 1), (3, 1) or (3, 2).</p>
