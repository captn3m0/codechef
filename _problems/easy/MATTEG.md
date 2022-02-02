---
{"category_name":"easy","problem_code":"MATTEG","problem_name":"Mathison and the teleportation game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":"1 - 2.5","source_sizelimit":50000,"problem_author":"alexvaleanu","problem_tester":"kingofnumbers","date_added":"23-08-2017","tags":{"0":"alexvaleanu","1":"bitmasking","2":"dynamic","3":"ltime51","4":"medium"},"editorial_url":"https://discuss.codechef.com/problems/MATTEG","time":{"view_start_date":1503768600,"submit_start_date":1503768600,"visible_start_date":1503768600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME51/mandarin/MATTEG.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME51/russian/MATTEG.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME51/vietnamese/MATTEG.pdf">vietnamese</a> as well.</h3>

<p>
  Mathison and Chef are playing a new teleportation game. This game is played on a <b>R</b>×<b>C</b> board where each cell contains some value. A cell at x-th row and y-th column is denoted by (x,y). The purpose of this game is to collect a number of values by
 teleporting from one cell to another. A teleportation can be performed using a <abbr title="teleportation pair">tel-pair</abbr>.
</p>

<p>
  A player is  given <b>N</b> <abbr title="teleportation pairs">tel-pairs</abbr>. <b>Each tel-pair can be used at most once and a player can use them in any order they like</b>. Suppose a player is at cell <b>(a, b)</b> and the tel-pair is <b>(dx, dy)</b>. Then, the player can reach in one teleportation
  any cell <b>(c, d)</b> from  <b>(a, b)</b>  such that <b>|a − c| = dx</b> and <b>|b − d| = dy</b>.
</p>

<p>
  It is Mathison’s turn next in the game to make a sequence of moves. <br />
  He would like to know what is the highest value of a <abbr title="sequence of cells">path</abbr>
  of length <b> at most N+1</b> that starts in <b>(Sx, Sy)</b> and uses some (possibly all) of the tel-pairs given.
</p>

<h3>Input</h3>
<p>
  The first line contains a single integer, <b>T</b>, the number of tests.
</p>

<p>
  Each test starts with three integers, <b>R</b>, <b>C</b>, and <b>N</b>, representing the number of rows, columns, and tel-pairs.
</p>

<p>
  The next line contains two integers, <b>Sx</b>, and <b>Sy</b>, representing the coordinates of the starting cell.
</p>

<p>
  The next two lines will contain the description of the tel-pairs. The first one will contain <b>N</b> integers, the x-component of each tel-pair.
  The second one will contain <b>N</b> integers, the y-component of each tel-pair.
</p>

<p>
  Next, there will be <b>R</b> lines, each containing <b>C</b> integers, the description of the board.
</p>

<h3>Output</h3>
<p>
  The output file will contain <b>T</b> lines. Each line will contain the answer (i.e. the highest value of a path) to the corresponding test.
</p>

<h3>Constraints and notes</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>R, C</b> ≤ 1000</li>
<li>1 ≤ <b>N</b> ≤ 9</li>
<li>0 ≤ <b>Sx</b> &lt; <b>R</b></li>
<li>0 ≤ <b>Sy</b> &lt; <b>C</b></li>
<li>0 ≤ <b>dx</b> ≤ <b>R</b></li>
<li>0 ≤ <b>dy</b> ≤ <b>C</b></li>
<li>The value of a cell is a natural number between 1 and 1,000,000 (i.e. 10<sup>6</sup>).</li>
<li>You are allowed to visit a cell multiple times!</li>
<li>It's <b>not</b> allowed to go outside the board!</li>
<li>If a cell is visited more than once, its value should be taken into account every single time!</li>
<li>You don't have to use all tel-pairs (but you may want to).</li>
<li>The length of a path is equal to the number of cells in the path.</li>
<li>The value of a path is equal to the sum of values of the cells in the path.</li>
<li><b>Note: You may want to use faster reading methods!</b></li>
<li><b>Note: The time limits (TLs) are given per input file!</b></li>
</ul>

<h3>Subtaks</h3>
<p><b>Subtask #1</b> (15 points):
<ul>
<li><b>T</b> ≤ 100</li>
<li><b>R, C</b> ≤ 10</li>
<li><b>N</b> ≤ 4</li>
<li><b>TL</b> = 1s</li>
</ul>
</p>

<p><b>Subtask #2</b> (25 points):
<ul>
<li><b>T</b> ≤ 25</li>
<li><b>R, C</b> ≤ 100</li>
<li><b>N</b> ≤ 8</li>
<li><b>TL</b> = 1.5s</li>
</ul>
</p>

<p><b>Subtask #3</b> (30 points):
<ul>
<li><b>T</b> ≤ 5</li>
<li><b>R, C</b> ≤ 1000</li>
<li><b>N</b> ≤ 8</li>
<li><b>TL</b> = 2s</li>
</ul>
</p>

<p><b>Subtask #4</b> (30 points):
<ul>
<li><b>T</b> ≤ 5</li>
<li><b>R, C</b> ≤ 1000</li>
<li><b>N</b> ≤ 9</li>
<li><b>TL</b> = 2.5s</li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
3
5 5 2
2 2
1 2
2 1
10 11 62 14 15
57 23 34 75 21
17 12 <b>14</b> 11 53
84 61 24 <b>85</b> 22
43 <b>89</b> 14 15 43
3 3 2
0 0
1 1
1 1
<b>9</b> 8 7
5 <b>6</b> 4
1 3 2
2 2 1
1 1
2
2
5 6
8 <b>3</b>

<b>Output:</b>
188
24
3
</pre>

<h3>Explanation</h3>
<pre>
First test
Mathison starts at (2, 2).
Mathison has two tel-pairs (2, 1) and (1, 2).
The following path (i.e. bolded numbers) generates the maximum value: (2, 2) → (4, 1) → (3, 3)

Second test
Mathison starts at (0, 0).
Mathison has two tel-pairs (1, 1) and (1, 1).
The following path (i.e. bolded numbers) generates the maximum value: (0, 0) → (1, 1) → (0, 0)

Third test
Mathison starts at (1, 1).
Mathison has one tel-pair, (2, 2).
He can't use the tel-pair so the answer is 3 (the value of the starting cell).
</pre>
