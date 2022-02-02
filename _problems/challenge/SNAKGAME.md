---
{"category_name":"challenge","problem_code":"SNAKGAME","problem_name":"Game of snakes on a grid","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"xcwgf666","date_added":"15-03-2016","tags":{"0":"admin2"},"time":{"view_start_date":1460374200,"submit_start_date":1460374200,"visible_start_date":1460374200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/mandarin/SNAKGAME.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/russian/SNAKGAME.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/vietnamese/SNAKGAME.pdf">Vietnamese</a> as well.</h3>
<p>You are going to play a game with Chef on a grid of size <b>n</b> rows by <b>m</b> columns. Some of the cells of the grid are blocked. The aim of the game is to create snakes of as large lengths as possible in the grid, while avoiding death and getting bonuses with along with the journey.</p>
<p>This is an <b>interactive challenge</b>, judge program will be playing on behalf of Chef. </p>
<p>The game will played alternately between you and the judge. You are the one to move first. In your first move, you can choose any of the empty cells of the grid and start creating a snake from that cell. A snake is identified by its two ends, head and tail. When you create a new snake, then both head and tail of the snake will be same. </p>
<p>
In your subsequent moves, you can increase length of your snake by extending it from either of its ends, i.e. from head or tail. In other words, you can choose an empty cell adjacent to either head or tail, and extend the snake by moving its respective end to the empty cell. A cell is said to be adjacent to other if they share a side (i.e. each cell has no more than <b>4</b> cells adjacent to it).
</p>
<p>
If at some stage, you are not able to extend the snake, then the snake will be considered dead. Now you can create another snake on the grid similarly. For each snake created, you will be granted score proportional to its length. You will also be charged penalty for each dead snake. Please see the scoring section for exact details. </p>
<p>Please note that when you or judge make a move to create or extend snake, then the cells occupied by the dead or live snakes, or initially blocked cells are considered to be non-empty cells.
</p>
<p>
During your journey, you can also be given a special bonus. In this special bonus, the judge program will be freezed for <b>turns</b> turns, i.e. during these turns, the judge will not be creating or extending a snakes. All other rules remain unchanged.
</p>
<p>
Note that if there is no empty cell left in the grid, then the game will end. Game will also be considered to be ended if your move is an EXIT move. Please see the next sections for details about various moves.
</p>
<h3>Input and Output</h3>
<p>The first line of the input contains three space-separated integers <b>n, m, K</b> denoting the height and width of the grid and number of blocked cells.</p>
<p>Each of following <b>K</b> lines will contain two space-separated integers <b>x y</b>, denoting the coordinate of blocked cell.  </p>
<p>After that you will be first one to make a move, followed by the move of the judge, followed by you and then judge and so on in the alternate order. In your move, you can print "EXIT" to exit the game. Also, the judge can print "EXIT" if all the cells of the grids are occupied and there is no way to move further. You should not make any move after that. </p>
<p>Please flush the output buffer after each of your moves (for example, by calling fflush(stdout) in C++), otherwise your solution might not work properly.</p>
<p>For further details, please read the next section.</p>
<h3>Interaction with the judge</h3>
<p>Each of your moves can have one of tree types.</p>
<ul>
<li><b>MOVE from_x from_y to_x to_y</b> : Extend the length of the current snake by moving its' one of the ends from the cell with coordinates <b>(from_x, from_y)</b> to one of its adjacent empty neighbours with coordinates <b>(to_x, to_y)</b>. Please note that <b>(from_x, from_y)</b> should be one of the ends of the snake.</li>
<li><b>NEW x y</b> : Create a new snake whose head/tail will be at an empty cell with coordinates <b>(x, y)</b>.</li>
<li><b>EXIT</b> : Exit the game. </li>
</ul>
<p>
Please note that we follow <b>1-based indexing</b> in the entire problem.</p>
<p>
Similarly, judge's move can also be one of the above kinds. Other than the above moves, judge will have one more move, called <b>FREEZE</b> move. During this move, the judge will be freezed and won't take its' turn of extending or creating snake. This move will be represented by <b>FREEZE turns</b>, where <b>turns</b> denotes the number of turns for which judge will be freezed. </p>
<p>Note that if in its' turn, judge made <b>FREEZE turns</b> move, then in its' next move, it will have to make <b>FREEZE turns-1</b> move if <b>turns > 1</b>.<br />
Please see the second example for better understanding.
</p>
<h3>Constraints</h3>
<ul>
<li><b>200 ≤ n, m ≤ 300</b> for type 1 test files.</li>
<li><b>500 ≤ n, m ≤ 600</b> for type 2 test files.</li>
</ul>
<h3> Scoring </h3>
<p>If your snake is of length <b>L</b>, then the score you get for this snake will be <b>L * floor(sqrt(L))</b>. Total score will be sum of scores of each snake you create. Also, you will be paying a penalty of <b>floor(sqrt(L))</b> for each dead snake. Note that the last snake created by you will also be considered dead at the end of the game.
</p>
<p>
In summary, for each snake of length <b>L</b>, you will get a score of <b>(L - 1) * floor(sqrt(L))</b>
</p>
<p>Your total score for the problem will be the sum of scores on all the test cases.</p>
<h3>Example 1</h3>
<pre>
2 2 0(judge printed n, m and number of blocked cells)
NEW 1 1 (your move to create a new snake)
NEW 1 2 (judge's move to create a new snake)
MOVE 1 1 2 1 (your move to extend the snake)
MOVE 1 2 2 2 (judge's move to extend the snake)
EXIT (your move to exit the game as there is no empty cell)

Your score for this will be = 2 * floor(sqrt(2)) - floor(sqrt(2)) = floor(sqrt(2)) = 1;
</pre><h3>Example 2</h3>
<pre>

3 3 0 (judge printed n, m and number of blocked cells)
NEW 2 2 (your move to create a new snake)
FREEZE 2 (judge freezed for 2 turns)
MOVE 2 2 3 2 (your move to extend the snake)
FREEZE 1 (judge is freezed for 1 turn, i.e. it is allowed to create/extend a snake in the next turn.)
MOVE 3 2 3 3 (your move to extend the snake)
NEW 2 3 (judge created new snake)
MOVE 2 2 1 2 (your move to extend the snake)
FREEZE 1  (judge is freezed for 1 turn)
MOVE 1 2 1 1 (your move to extend the snake)
MOVE 2 3 1 3 (judge's move to extend the snake)
MOVE 1 1 2 1 (your move to extend the snake)
NEW 3 1 (judge's move to create a new snake)
EXIT (your move to exit the game, as there are no empty cells to continue the game.)

You have created one snake of length 6. So your score is 6 * sqrt(6) - sqrt(6) = 5 * floor(sqrt(6)) = 5 * 2 = 10.

Judge created two snakes of length 2 and 1.
</pre><h3>Example 3</h3>
<pre>
3 4 2
1 1
3 4
NEW 1 2
NEW 2 4
MOVE 1 2 1 3
MOVE 2 4 2 3
MOVE 1 3 1 4
MOVE 2 3 3 3
NEW 3 2
NEW 2 1
MOVE 3 2 2 2
MOVE 2 1 3 1
EXIT
</pre><h3> Test data generation </h3>
<p>There will be two types of the test files. </p>
<ul>
<li><b>n, m are randomly generated number from 200 to 300.</b></li>
<li><b>n, m are randomly generated number from 500 to 600.</b></li>
</ul>

<p>There will be 10 test files of each type. During the contest, you will be shown the score for only two test file of each type.</p>
<p>
The grid will initially be empty. Each of the cells has 1/25 probability of being marked as blocked.</p>
<p>The judge will choose its' move according to following strategy:</p>
<p>The judge maintains the head and the tail of the snake. </p>
<ul>
<li>If its last move was <b>FREEZE turns</b> move such that <b>turns > 1</b>, then the current move will be <b>FREEZE turns'</b> where <b>turns' = turns - 1</b>.</li>
<li>Otherwise, with the probability of 1/500, the judge will make a freezing move, the number of turns of freezing move will be a random number between <b>1</b> and <b>50</b>. </li>
<li>If it is the beginning of the game, judge will start a new snake.</li>
<li>If the judge is unable to extend its' current snake, it will create a new snake by choosing one of the empty cells of the grid randomly as the head/tail of the new snake.</li>
<li>Otherwise, with the probability <b>99/100</b>, the judge will try to extend its' current snake by extending it from both head and tail. It will consider all the empty adjacent cells of both head and tail. Judge will select one of these cells uniformly randomly to extend its snake.</li>
<li>With the remaining <b>1/100</b> probability, the judge will create a new snake.</li>
</ul>

