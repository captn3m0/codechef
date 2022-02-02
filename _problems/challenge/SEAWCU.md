---
{"category_name":"challenge","problem_code":"SEAWCU","problem_name":"Sereja and Ways in the Cube","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"xcwgf666","date_added":"7-10-2016","tags":{"0":"sereja"},"time":{"view_start_date":1479115800,"submit_start_date":1479115800,"visible_start_date":1479115800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/mandarin/SEAWCU.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/russian/SEAWCU.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/vietnamese/SEAWCU.pdf">Vietnamese</a> as well.</h3>


<p>
Sereja has a cube <b>A</b> of <b>N x N x N</b> cells. The
the cell at position <b>(X, Y, Z)</b> contains a number <b>A[X][Y][Z]</b>. You have to to find a sequence of cells <b>(X[1], Y[1], Z[1]), (X[2], Y[2], Z[2]), ..., (X[K], Y[K], Z[K])</b> (triples of integers between <b>1</b> and <b>N</b>) satisfying the following properties:
<ul>
<li> The first cell lies on the front side, i.e. <b>X[1] = 1</b>. </li>
<li> Each pair of consecutive cells in the sequence are adjacent. Here, we say two cells <b>(X, Y, Z), (X', Y', Z')</b> are adjacent if <b>|X-X'| + |Y-Y'| + |Z-Z'| = 1</b>.</li>
<li> Two non-consecutive cells in the sequence are not adjacent. That is, if <b>i</b> and <b>j</b> are two indices into the sequence with <b>i+2</b> ≤ <b>j</b> then <b>|X[i]-X[j]| + |Y[i]-Y[j]| + |Z[i]-Z[j]| ≠ 1</b>. </li>
<li> No two cells in the sequence are the same. </li>
</ul>
</p>

<p>
Help Sereja, find such a sequence that maximize the sum of the numbers stored at the cells in the sequence.
</p>


<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.
</p>
The first line of each test case contains integer <b>N</b>. Then <b>N</b> <i>blocks</i> of input follow where each block consists of <b>N</b> lines, each containing <b>N</b> integers. The <b>X</b>-th number in the <b>Y</b>-th line of <b>Z</b>-th block is the value <b>A[X][Y][Z]</b>.
</p>

<h3>Output</h3>
<p>
The first line of output for each test case should contain number <b>K</b> - the number of cells in the sequence. The next <b>K</b> lines should contain three space-separated integers: the <b>X,Y,Z</b> indices of the cell.
</p>


<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>50</b></li>
<li><b>-1000000</b> ≤ <b>A[i][j][k]</b> ≤ <b>1000000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
2
1 1
1 1
1 1
1 1

<b>output:</b>
4
1 1 1
1 1 2
1 2 2
2 2 2
</pre>
<p> </p>
<h3>Test generation</h3>
Each test will contain <b>T=10</b> test cases and <b>N</b> will always be equal to <b>50</b>.
There will be <b></b> three types of tests:
<ul>
<li>Every number in the cube will be from the set {1, 0, -1000000}. The cube will be generated in the following way. Originally it will be filled with only 1s. Then a randomly-chosen 5% of the positions will be filled with 0.
Finally, while less than 20% of the cube consists of -1000000 entries, some subcube will be filled with -1000000 entries.</li>
<li>Every number in cube will be from the set {10000, 1000, 100, 1, 0, -1000000}. This will be generated in the same way as previous test, but originally all numbers are random positives number from the set.</li>
<li>80% of numbers are positive numbers from the interval [1, 1000000]. 20% are randomly chosen from the set {-1, -10, -100, -1000, -10000, -100000, -1000000}.</li>
</ul>
<h3>Scoring</h3>
For each test case, let <b>S</b> be the sum of values on the selected path. Let <b>W</b> be the average value of positive numbers inside of the cube. Lets <b>Sum</b> be the sum of the values <b>max(S/W, 1)</b> among all test cases. Lets <b>Best</b> be the maximum value of <b>Sum</b> among all participants. Your displayed score will be <b>Sum/Best</b>. 