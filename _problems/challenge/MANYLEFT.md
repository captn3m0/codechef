---
{"category_name":"challenge","problem_code":"MANYLEFT","problem_name":"Many Left","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":"laycurse","date_added":"30-09-2012","tags":{"0":"challenge","1":"nov12","2":"optimization","3":"pieguy","4":"search"},"editorial_url":"http://discuss.codechef.com/problems/MANYLEFT","time":{"view_start_date":1352712600,"submit_start_date":1352712600,"visible_start_date":1352712600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
The classical game of OneLeft is played as follows. Some pegs are placed on an NxN grid. Initially, at least one cell is empty and at least one contains a peg (each cell contains at most one peg). A move consists of jumping one peg over an adjacent peg to an empty cell, and removing the peg that was jumped over. Formally, if there is a peg in cell (x1, y1), and cell (x2, y2) is empty, and (x1-x2, y1-y2) is one of (0, 2), (0, -2), (2, 0), or (-2, 0), and there is a peg in cell ((x1+x2)/2, (y1+y2)/2), then the peg in cell (x1, y1) may be moved to cell (x2, y2) and the peg in cell ((x1+x2)/2, (y1+y2)/2) removed.  The coordinate (0, 0) indicates the top-left corner, (N-1, 0) indicates the top-right corner, (0, N-1) indicates the bottom-left corner, and (N-1, N-1) indicates the bottom-right corner.
</p>
<p>
The game continues until no more moves are possible. Normally the goal of OneLeft is to leave a single peg on the grid. However, in this problem the goal is to leave <em>as many pegs as possible</em>. Optimal solutions are not required, but solutions that leave more pegs will score more points.
</p>
<h3>Input</h3>
<p>
Input begins with an integer N, the size of the grid. N lines follow with N characters each, representing the grid. A '.' character indicates an empty cell, and a '*' character indicates a peg.
</p>
<h3>Output</h3>
<p>
For each test case, first output the number of moves in your solution. Then output each move in the form "x1 y1 x2 y2", which indicates a peg moving from (x1,y1) to (x2,y2). Any whitespace in your solution will be ignored.
</p>
<h3>Scoring</h3>
<p>
Your score for each test case is the fraction of cells containing pegs after performing the moves in your solution. Your overall score is the average of your scores on the individual test cases. Invalid solutions will be judged as "wrong answer". In particular, if any legal moves exist after the moves in your solution have been performed, your solution will considered invalid.
</p>
<h3>Sample Input 1</h3>
<pre><code>6
..*..*
*..*.*
***.**
.***..
****..
**.*.*
</code></pre><h3>Sample Output 1</h3>
<pre>13
1 3 1 1
3 3 1 3
0 5 0 3
0 2 0 0
3 5 3 3
5 2 3 2
5 0 5 2
3 2 3 0
2 4 0 4
0 3 0 5
3 0 1 0
0 0 2 0
0 5 2 5
</pre><h3>Sample Input 2</h3>
<pre><code>5
.*.*.
..*..
*...*
...*.
.*...
</code></pre><h3>Sample Output 2</h3>
<pre>0

</pre><p>
The first sample output scores 8/36 = 0.2222.<br />
The second sample output scores 7/25 = 0.28.<br />
Recall that the goal is to maximize your score.
</p>
<h3>Test Case Generation</h3>
<p>
For each official test file, N is chosen randomly and uniformly between 10 and 30, inclusive. A real number D is chosen randomly and uniformly between 0.5 and 0.95, then each cell is independently chosen to contain a peg with probability D.
</p>
