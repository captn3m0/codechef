---
{"category_name":"medium","problem_code":"THREECOL","problem_name":"Bear and Three Colours","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":null,"date_added":"30-11-2016","tags":{"0":"errichto"},"time":{"view_start_date":1481535000,"submit_start_date":1481535000,"visible_start_date":1481535000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/mandarin/THREECOL.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/russian/THREECOL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/vietnamese/THREECOL.pdf">Vietnamese</a> as well.</h3>

<p>Limak, a little polar bear, loves puzzles. He has recently found an especially interesting one.</p>

<p>There is a rectangular grid with <b>N</b> rows and <b>N</b> columns, both numbered <b>1</b> through <b>N</b>. Two cells are called adjacent if they share a side, i.e. all the cells other than those at boundary will have 4 adjacent cells. Every cell is colored in one of three colors. For convenience, let us label these colors by characters 'A', 'B' and 'C'.</p>

<p>In one move, Limak can choose any two adjacent cells of different colors and change them both to the third color. For example, if two adjacent cells have colors 'A' and 'C', then Limak can change them both to colour 'B'.</p>

<p>It's forbidden to choose two non-adjacent cells or to choose a cell with itself.
It's allowed to choose two adjacent cells of the same color, but such a move does nothing.</p>

<p>The goal of the puzzle is to get all the cells of the grid in the same color. Limak is a smart bear, he would surely achieve that, but there is a problem, he is color-blind.
He sees the size of the grid but he can't distinguish the colors of cells.</p>

<p>You are his only hope. Given an integer <b>N</b>, find a sequence of at most <b>100,000</b> moves such that it solves each grid of dimensions <b>N × N</b>.</p>

<h3>Input</h3>
<p>The only line of the input contains a single integer <b>N</b>, denoting the dimension of the grid.</p>

<h3>Output</h3>
<p>In the first line, output a single integer <b>K</b> (between <b>0</b> and <b>100,000</b>, inclusive), denoting the number of moves.</p>
<p>Then print <b>K</b> lines. The <b>i</b>-th of them should contain four integers <b>r1</b>, <b>c1</b>, <b>r2</b> and <b>c2</b>, meaning that in the <b>i</b>-th move, you choose cells <b>(r1, c1)</b> and  <b>(r2, c2)</b>. These two cells must be adjacent. All coordinates must be between <b>1</b> and <b>N</b>, inclusive.
Here, <b>(i, j)</b> denotes a cell at the intersection of the <b>i</b>-th row and the <b>j</b>-th column.</p>

<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>20</b></li>
<li><b>N</b> is not divisible by <b>3</b>. This condition guarantees that all initial grids are solvable.</li>
</ul>

<h3>Subtasks</h3>
<p>There are eight subtasks, each worth 12 or 13 points.
Every subtask contains only one test.
Values of <b>N</b> are: <b>2</b>, <b>4</b>, <b>5</b>, <b>8</b>, <b>11</b>, <b>13</b>, <b>16</b>, <b>20</b>.</p>

<h3>Checker and Correctness</h3>
<p>The task will be graded by a custom checker. Your program will be judged AC (accepted) only if your solution follows the output format and the grader can't find any counterexample grid that breaks your solution. We tried to make the checker as strong as possible. The intended solution indeed solves all possible initial grids. It's possible that the checker is strong enough that all incorrect solutions are judged WA (wrong answer).</p>

<h3>Example</h3>
<pre><b>Input:</b>
4

<b>Output:</b>
6
1 1 1 2
1 3 2 3
2 3 2 2
3 2 2 2
4 3 4 4
1 4 1 3
</pre>

<h3>Explanation</h3>
<p>The provided output isn't correct because it doesn't solve all possible initial grids.
Its only purpose is to show you a valid format.
Below you can see how one example grid would change.
Here we assume that columns are numbered from top to bottom, and rows are numbered from left to right.
In every new grid two previously chosen cells are marked bold.
Note that some moves don't affect the grid.</p>

<tt>AAAB      <b>AA</b>AB      AA<b>C</b>B      AACB      AACB      AACB      AA<b>AA</b></tt><br>
<tt>ABBA      ABBA      AB<b>C</b>A      A<b>AA</b>A      A<b>A</b>AA      AAAA      AAAA</tt><br>
<tt>AAAA      AAAA      AAAA      AAAA      A<b>A</b>AA      AAAA      AAAA</tt><br>
<tt>AABC      AABC      AABC      AABC      AABC      AA<b>AA</b>      AAAA</tt>