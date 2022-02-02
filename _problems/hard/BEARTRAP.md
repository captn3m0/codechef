---
{"category_name":"hard","problem_code":"BEARTRAP","problem_name":"Bear and Cat Trap","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":"xcwgf666","date_added":"23-02-2017","tags":{"0":"errichto","1":"hard","2":"interactive","3":"march17"},"editorial_url":"https://discuss.codechef.com/problems/BEARTRAP","time":{"view_start_date":1489397400,"submit_start_date":1489397400,"visible_start_date":1489397400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/mandarin/BEARTRAP.pdf?v=1">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/russian/BEARTRAP.pdf?v=1">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/vietnamese/BEARTRAP.pdf?v=1">Vietnamese</a> as well.</h3>

<p>This is an interactive problem.
It means that every time you output something, you must finish with a newline character and flush the output.
For example, in C++ use the fflush(stdout) function, in Java — call System.out.flush(), in Python — sys.stdout.flush(), and in Pascal — flush(output).
Only after flushing the output will you be able to read from the input again.</p>

<p>Limak is a little polar bear.
One of his favorite games is the Cat Trap (also known as Black Cat, Chat Noir or Circle The Cat).
The goal of the game is to prevent a cat from running away.
Limak loves it because cats are usually afraid of him (for no reason) and don't want to play with him.
You can try that game yourself: <a href = "http://www.gamedesign.jp/flash/chatnoir/chatnoir.html">http://www.gamedesign.jp/flash/chatnoir/chatnoir.html</a>.</p>

<p>In this problem, your task is to win in a modified version of the game.
The differences are:</p>

<ol>
<li>The grid is a regular hexagon of side N = 20.</li>
<li>Initially no cells are blocked.</li>
<li>You must win in <b>M</b> turns (i.e. you can block at most <b>M</b> cells).</li>
<li>The cat follows some particular strategy, described below.</li>
</ol>
<br>

<p>Rows are numbered -(N-1) through N-1 from top to bottom, so the row 0 is in the middle.
Columns are numbered -(N-1) through N-1 from left to right, where the column 0 is the diagonal that contains the first cell of the top row and the last cell of the bottom row.
For example, for N = 3 the grid would look like this (blue arrows are pointing at the column 0):</p>

<p><img src= "https://codechef_shared.s3.amazonaws.com/download/upload/MARCH17/beartrap1.png" height="240"/></p>

<p>Let (r, c) denote the cell at the intersection of the r-th row and the c-th column.
The description above implies that the cell (r,c) has at most six adjacent cells: (r,c+1), (r-1,c+1), (r-1,c), (r,c-1), (r+1,c-1), (r+1,c).</p>

<p>A <b>border cell</b> is a cell with fewer than six adjacent cells (there are exactly 6*(N-1) border cells).
For any not-blocked cell X we define <b>the distance to the border</b> as the minimum number of moves the cat would need to reach a border cell, assuming that he starts from X and no more cells will be blocked.
In particular, the distance to the border is 0 for all not-blocked border cells.
The distance to the border is infinite if a cell is blocked or the cat can't reach any border cell.</p>

<p>The cat starts in the cell (0, 0), i.e. in the middle of the grid.
In each turn of the game:</p>

<ol>
<li>The cat moves first.
If he is in a border cell, he runs away and you lose.
If he can't reach any border cell, you win (i.e. when the cat is in a connected component bounded by blocked cells).
Otherwise, the cat moves to one of the adjacent cells with the minimum distance to the border.
For example, if three adjacent cells are blocked, two cells have the distance to the border equal to 15, and one cell has the distance to the border equal to 17, then the cat chooses one of the two adjacent cells with the distance 15.
Also, in the very first move the cat chooses any of six adjacent cells, because all of them have the same distance to the border.</li>
<li>Then you can block one cell.
You can't block a cell if it's already blocked or it contains the cat.</p>
</ol>



<h3>Interaction</h3>

<p>The first line of the input contains two integers <b>T</b> and <b>M</b> denoting the number of test cases and the maximum allowed number of times you can block a cell (per test case).
At the beginning of each test case, the cat starts in the cell (0, 0) and no cells are blocked.</p>

<p>When the cat is supposed to move, you should read from the input, a line that is either "WIN" or "CAT r c" (both without the quotes).
A line "WIN" means that the cat can't reach the border anymore and you should proceed to the next test case (and again read the first move of the cat), unless it's the last test case — then you should terminate your program.
A line "CAT r c" means that the cat moves to the cell (r, c).</p>

<p>After the cat moves, you should print a line in the format "BLOCK r c" denoting blocking the cell (r, c).
Remember about printing a newline character and flushing the output.
You can't skip a move and you can't block a cell if it's already blocked or it contains the cat.</p>



<h3>Subtasks</h3>

<ul>
<li>Subtask #1 (35 points) 1 ≤ <b>T</b> ≤ 10, <b>M</b> = 500</li>
<li>Subtask #2 (65 points) 1 ≤ <b>T</b> ≤ 100, <b>M</b> = 20</li>
</ul>



<h3>Visualizer</h3>

<p>You need Python3 to run the visualizer: <b><a href="https://codechef_shared.s3.amazonaws.com/download/upload/MARCH17/BEARTRAP.py">link</a>.</b>
The instructions and the example usage are provided at the bottom of the file.</p>




<h3>Example</h3>

<table border="1">
<tr>
<td>your program</td>     <td>the system</td>
</tr>

<tr><td></td><td>2 500</td></tr>

<tr><td></td><td>CAT 1 -1</td></tr>
<tr><td>BLOCK -1 0</td><td></td></tr>

<tr><td></td><td>CAT 1 0</td></tr>
<tr><td>BLOCK -1 1</td><td></td></tr>

<tr><td></td><td>CAT 0 0</td></tr>
<tr><td>BLOCK 1 -1</td><td></td></tr>

<tr><td></td><td>CAT 0 1</td></tr>
<tr><td>BLOCK 0 -1</td><td></td></tr>

<tr><td></td><td>CAT 1 0</td></tr>
<tr><td>BLOCK 1 1</td><td></td></tr>

<tr><td></td><td>CAT 0 0</td></tr>
<tr><td>BLOCK 0 2</td><td></td></tr>

<tr><td></td><td>CAT 0 1</td></tr>
<tr><td>BLOCK -1 2</td><td></td></tr>

<tr><td></td><td>CAT 0 0</td></tr>
<tr><td>BLOCK 1 0</td><td></td></tr>

<tr><td></td><td>WIN</td></tr>

<tr><td></td><td>CAT 1 0</td></tr>
<tr><td>BLOCK 5 -12</td><td></td></tr>

<tr><td>...</td><td>...</td></tr>

<tr><td></td><td>WIN</td></tr>

</table>


<h3>Explanation</h3>

<p>In the provided example, there are <b>T</b> = 2 test cases and in each of them you are allowed to block <b>M</b> = 500 cells.
Note that the example communication is invalid because the cat doesn't always move to an adjacent cell with the minimum distance to the border.
Such a situation won't happen in real tests.
And the second test case was given only to show you how the communication looks like if there are multiple test cases.</p>

<p>You can run the visualizer to see the simulation of the first test case.
For your convenience, the grid below shows the final situation, assuming that the size of the grid is N = 4 (but remember that N = 20 in all tests).</p>

<pre><code>   . , . , 
  , . , . , 
 . , # # # , 
, . # c , # , 
 , . # # # . 
  , . , . , 
   , . , .</code></pre>