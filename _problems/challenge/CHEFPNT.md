---
{"category_name":"challenge","problem_code":"CHEFPNT","problem_name":"Chef and Painting","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"shangjingbo","date_added":"1-04-2014","tags":{"0":"berezin","1":"challenge","2":"oct14","3":"randomized"},"time":{"view_start_date":1413192600,"submit_start_date":1413192600,"visible_start_date":1413192600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/mandarin/CHEFPNT.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/russian/CHEFPNT.pdf">Russian</a>.</h3>
<p>Chef wants to paint with you today:)</p>
<p><ul>
<li>The field of the game is a matrix that has <b>N</b> rows and <b>M</b> columns.</li>
<li>The rows of the matrix are numbered from 1 to <b>N</b>.</li>
<li>The columns of the matrix are numbered from 1 to <b>M</b>.</li>
<li>Initially some cells are painted with black color. All other are painted with white.</li>
<li>On each step Chef can choose any white cell and the direction: Left-Right or Up-Down. </li>
<li>Left-Right direction means that Chef goes left from chosen cell and paint each cell on his way with red color until he reach the board or some already painted with red or black color cell. Then he do the same in right direction (goes right from the chosen cell) and then he paint chosen cell with red color. </li>
<li>Up-Down direction means the same for appropriate directions</li>
<li>The aim of game is to paint all white cells with red color in the minimal number of steps. </li>
</ul>
</p>
<h3>Input</h3>
<p>The first line of each test case contains three integers <b>N, M, K</b> denoting the size of matrix and the number of painted with black color cells. </p>
<p>Each of next <b>K</b> lines contains two integers <b>i, j</b> denoting the painted with black color cells. </p>
<h3>Output</h3>
<p>In the first line print integer <b>P</b> - the number of steps. </p>
<p>Next <b>P</b> lines should describe steps. Each step in a single line. </p>
<p>The description of each step contains two integers <b>i, j</b> denoting the cell you choose and string <b>"0"</b> or <b>"1"</b>, according to the directions you choose<br />
(<b>"0"</b> - Left-Right, <b>"1"</b> - Up-Down).</p>
<h3>Scoring</h3>
<ul>
<li>For each test your score will be defined as number of steps. </li>
<li>The total score for a submission is the sum of the scores for all test cases. </li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>min(N*M - 1, 3000)</b></li>
<li><b>1</b> ≤ <b>i</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>j</b> ≤ <b>M</b></li>
</ul>
<h3>Test generation</h3>
<ul>
<li>Initially we take <b>N</b>, <b>M</b>, and <b>K</b> with uniform random in the range under constraints </li>
<li>Then in a loop from <b>1</b> to <b>K</b> we take uniform random row number (from <b>1</b> to <b>N</b>) and uniform random column number (from <b>1</b> to <b>M</b>) and while the cell <b>a<sub>ij</sub></b>  is already painted we take new uniform random <b>i</b> and <b>j</b>. </li>
<li>Test cases contains max tests, tests with big (close to <b>N*M</b>) and small <b>K</b>. </li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
6 7 6
1 3
3 2
2 4
4 5
5 6
6 4

<b>Output:</b>
12
3 1 1
6 7 1
1 2 1
2 3 1
1 5 0
4 2 1
3 4 0
2 5 0
5 5 0  
6 5 0
4 4 1
4 6 1
</pre>