---
{"category_name":"medium","problem_code":"RNDGRID","problem_name":"Bear and Random Grid","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"3 - 5","source_sizelimit":50000,"problem_author":"errichto","problem_tester":null,"date_added":"20-02-2017","tags":{"0":"april17","1":"errichto"},"editorial_url":"https://discuss.codechef.com/problems/RNDGRID","time":{"view_start_date":1492421400,"submit_start_date":1492421400,"visible_start_date":1492421400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/mandarin/RNDGRID.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/russian/RNDGRID.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/vietnamese/RNDGRID.pdf">Vietnamese</a> as well.</h3>

<p>Don't miss the "Tests Generation" section.
The input is generated in a special way for this problem.</p>

<p>Bear Limak lives in a square grid that consists of <b>N</b> rows and <b>N</b> columns.
Each cell is either empty or blocked, denoted with character '.' or '#' respectively.
Limak can only visit empty cells and he can't move outside the grid.</p>

<p>Limak wants to impress a girl he likes.
He should make a sequence of moves described by a string <b>S</b> of length <b>L</b>.
Each character is one of 'R', 'L', 'U', 'D', denoting directions: right, left, up and down respectively.</p>

<p>Depending on the starting cell, making all <b>L</b> moves might be impossible.
Limak considers each empty cell as a starting one and wonders how many  moves in the sequence he can make, before being forced to stop.
For example, if <b>S</b> starts with 'R' but a cell on the right from the starting cell is blocked (or is outside the grid), Limak would do 0 moves.</p>

<p>Your task is to find the number of moves Limak would do from each starting cell, and print the <a href = "https://en.wikipedia.org/wiki/Bitwise_operation#XOR">bitwise XOR</a> of those numbers.</p>



<h3>Tests Generation</h3>

<p>The input in this problem is generated as follows.
For each test case we manually chose only three values: two integers <b>L</b> and <b>N</b> and one real value P (0 ≤ P < 1).
Each character in <b>S</b> is chosen (generated) uniformly at random from the four allowed characters.
Each cell in the grid is blocked with probability P, and empty otherwise.
If all cells are blocked, the test case is generated again, so it is guaranteed that at least one cell is empty.</p>



<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.
The description of <b>T</b> test cases follows.</p>

<p>The first line of each test case contains two integers <b>L</b> and <b>N</b> denoting the length of the sequence of moves and the size of the grid.</p>

<p>The second line of a test case contains a string <b>S</b> denoting the sequence of moves.</p>

<p>Next <b>N</b> lines describe the grid.
The i-th line contains a string of length <b>N</b> denoting the i-th row of the grid.</p>



<h3>Output</h3>

For each test case, output a single line containing one integer — the bitwise XOR of the number of moves made by Limak from each possible starting cell.



<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>T</b> ≤ 3</li>
<li>1 ≤ <b>L</b> ≤ 5000</li>
<li>1 ≤ <b>N</b> ≤ 1000</li>
<li><b>S</b> will contain exactly <b>L</b> characters.</li>
<li>Each character in <b>S</b> will be one of four: 'R', 'L', 'U', 'D'.</li>
<li>Each string denoting a row of the grid will contain exactly <b>N</b> characters.</li>
<li>Each character in the grid will be one of two: '.' or '#'.</li>
<li>At least one cell will be empty.</li>
<li>Both the grid and the sequence of moves are generated according to the description above.</li>
<li>0 ≤ P < 1</li>
</ul>



<h3>Subtasks</h3>

<ul>
<li>Subtask #1 (15 points) 1 ≤ <b>N</b> ≤ 10</li>
<li>Subtask #2 (30 points) P = 0, which means that all cells are empty.</li>
<li>Subtask #3 (30 points) P ≥ 0.1</li>
<li>Subtask #4 (25 points) original constraints</li>
</ul>



<h3>Example</h3>

<pre><b>Input:</b>
2
3 4
DDU
#..#
#...
...#
..#.
10 4
RLLRDDLUUL
....
.#..
..#.
.#.#

<b>Output:</b>
2
3
</pre>



<h3>Explanation</h3>
<p><b>Test case 1.</b> We are given the grid of size <b>N</b> = 4, and a sequence of <b>L</b> = 3 moves. For each empty cell of the grid, below you can see the number of moves Limak would make:</p>

<pre>
# 3 3 # 
# 3 1 0 
1 1 0 # 
0 0 # 0
</pre>

<p>The answer is 3 xor 3 xor 3 xor 1 xor 1 xor 1 = 2.</p>

<p><b>Test case 2.</b> Again, below you can see the number of moves Limak would make from each cell:</p>

<pre>
2 4 5 0 
0 # 2 0 
2 0 # 0 
0 # 0 #
</pre>