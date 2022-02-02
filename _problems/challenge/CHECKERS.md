---
{"category_name":"challenge","problem_code":"CHECKERS","problem_name":"Eastern Draughts","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":"0.1 - 0.167023","source_sizelimit":50000,"problem_author":"pieguy","problem_tester":null,"date_added":"7-06-2012","tags":{"0":"aug12","1":"challenge","2":"graph","3":"pieguy"},"editorial_url":"http://discuss.codechef.com/problems/CHECKERS","time":{"view_start_date":1344676276,"submit_start_date":1344676276,"visible_start_date":1342982428,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Eastern Draughts is played on an NxN grid,
consisting of cells (x, y) with 0 ≤ x,y &lt; N.
Some cells of the grid have pieces on them, and no cell may ever have more than one piece at a time.
The number of pieces will be equal to P*(P+1)/2 for some positive integer P ≤ N.
There are two types of moves in the game:
<ul>
<li>
A step consists of moving a piece from (x, y) to (x+1, y), (x-1, y), (x, y+1), (x, y-1), (x+1, y-1), or (x-1, y+1).
The destination cell must be empty, and must lie within the bounds of the grid.
Note that you cannot move a piece directly from (x, y) to (x-1, y-1) or (x+1, y+1).
</li>
<li>
A jump consists of moving a piece from (x, y) to (x+2, y), (x-2, y), (x, y+2), (x, y-2), (x+2, y-2), or (x-2, y+2).
Not only must the destination cell be empty and lie within the bounds of the grid,
but the cell between the source and destination cells must contain a piece.
</li>
</ul>
</p>
<p>
A turn consists of either a single step, or a sequence of one or more jumps where the same piece is moved with each jump.
The goal is to move the pieces to the goal configuration in as few turns as possible.
The goal configuration is such that each cell (x, y) contains a piece if and only if x+y &lt; P.
</p>
<p>
For this problem, you do not need to use as few turns as possible, but the fewer turns you use the higher your score will be.
</p>
<h3>Input</h3>
<p>
Input will begin with an integer N, the size of the grid.
N lines follow with N characters each, giving the initial positions of the pieces.
A '*' indicates a piece, and a '.' indicates an empty cell.
The upper-left corner is (0, 0), upper-right corner is (N-1, 0), bottom-left corner is (0, N-1), and bottom-right corner (N-1, N-1).
</p>
<h3>Output</h3>
<p>
First output an integer L,
the number of moves in your solution (not number of turns).
Then output L lines, each formatted as "x1 y1 x2 y2", where (x1, y1) is the source cell and (x2, y2) is the destination cell.  L must be less than one million.
</p>
<h3>Scoring</h3>
<p>
Let K be the number of turns in your solution, and let S be the sum of x+y over all
cells initially containing pieces, and R be the sum of x+y over all cells containing pieces in the goal configuration.
Then your score for each test case is (S - R)/K.
Your overall score is the average of your scores on the individual input files.
</p>
<h3>Sample Input 1</h3>
<pre><code>4
....
....
....
..*.
</code></pre>
<h3>Sample Output</h3>
<pre>5
2 3 2 2
2 2 2 1
2 1 2 0
2 0 1 0
1 0 0 0
</pre>
<h3>Sample Input 2</h3>
<pre><code>5
.....
...*.
...*.
.....
..*..
</code></pre>
<h3>Sample Output 2</h3>
<pre>10
2 4 2 3
2 3 4 1
4 1 2 1
3 2 3 0
3 1 1 1
3 0 1 2
1 2 1 0
2 1 0 1
0 1 0 0
1 1 0 1

</pre>
<p>The sample output uses 5 turns on the first test case, and 8 on the second.
The sequence of turns on the second test case is:<ol>
<li>(2 4) - (2 3)</li>
<li>(2 3) - (4 1) - (2 1)</li>
<li>(3 2) - (3 0)</li>
<li>(3 1) - (1 1)</li>
<li>(3 0) - (1 2) - (1 0)</li>
<li>(2 1) - (0 1)</li>
<li>(0 1) - (0 0)</li>
<li>(1 1) - (0 1)</li>
</ol>
For the first test case S = 5 and R = 0, and for the second case S = 15 and R = 2.
Thus the score for the first test case is (5 - 0)/5 = 1, and the score for the second test case is (15 - 2)/8 = 1.625.
The overall score is (1 + 1.625)/2 = 1.3125.
</p>
<h3>Test Case Generation</h3>
<p>N is chosen randomly and uniformly between 10 and 30, inclusive.  P is chosen randomly and uniformly between 1 and N, inclusive.  P*(P+1)/2 cells are chosen at random for pieces.  You may safely assume there will be no test cases where the starting configuration is equal to the goal configuration.</p>