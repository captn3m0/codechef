---
{"category_name":"hard","problem_code":"GRIDGAME","problem_name":"Game on a Grid","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":"anton_lunyov","date_added":"22-11-2012","tags":{"0":"cook29","1":"game","2":"medium","3":"pieguy"},"editorial_url":"http://discuss.codechef.com/problems/GRIDGAME","time":{"view_start_date":1356288262,"submit_start_date":1356288262,"visible_start_date":1356288262,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Alice and Bob are playing a game. A single pawn is placed on a grid. The grid consists of cells <b>(X, Y)</b> for non-negative integers <b>X</b> and <b>Y</b>. Some cells of the grid have been marked as impassable. A move consists of choosing some positive integer <b>D</b> and moving the pawn from <b>(X, Y)</b> either to <b>(X − D, Y)</b> or to <b>(X, Y − D)</b>, of course, if this cell belongs to the grid. In other words, we move the pawn a positive number of steps along the row or column towards the origin. The pawn is not allowed to land on nor pass through an impassable cell. Alice and Bob alternate moves, with Alice going first. The first player unable to make a move loses.</p>
<p>Alice and Bob will play several games on the same grid, but with different starting positions of the pawn. Assuming both players play optimally, determine which player will win each game.</p>
<h3>Input</h3>
<p>Input will begin with an integer <b>T</b>, the number of test cases that follow. Each test case will begin with an integer <b>N</b>, the number of impassable cells. <b>N</b> lines follow with 2 integers each: the X and Y coordinates of an impassable cell. Following this is a line with an integer <b>Q</b>, the number of games to be played on this grid. <b>Q</b> lines follow with 2 integers each: the X and Y coordinates of the pawn.</p>
<h3>Output</h3>
<p>For each test case, print the winner of each of the <b>Q</b> games, one per line.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10000 (10<sup>4</sup>)</li>
<li>1 ≤ <b>N</b> ≤ 100000 (10<sup>5</sup>)</li>
<li>1 ≤ <b>Q</b> ≤ 100000 (10<sup>5</sup>)</li>
<li>The sum of <b>N</b> over all test cases will not exceed 100000 (10<sup>5</sup>)</li>
<li>The sum of <b>Q</b> over all test cases will not exceed 100000 (10<sup>5</sup>)</li>
<li>All coordinate values will be between 0 and 1000000000 (10<sup>9</sup>), inclusive</li>
<li>All impassable cells will be distinct</li>
<li>No starting position of the pawn will be impassable</li>
</ul>
<h3>Sample Input</h3>
<pre>1
2
1 1
4 2
4
2 2
1 2
3 4
6 5
</pre><h3>Sample Output</h3>
<pre>Alice
Bob
Alice
Bob
</pre><h3>Explanation</h3>
<p>In the first game, the pawn is at cell (2, 2). In order to win Alice can begin by moving the pawn to (1, 2). Bob's only available move is to (0, 2) since (1, 1) is impassable. Alice then moves the pawn to (0, 0), leaving Bob with no available moves.</p>
<p>Here is the small portion of the table of winning and losing positions. Here X-direction goes from the left to the right and Y-direction goes from the top to the bottom. Letter <b>'A'</b> at the cell <b>(X, Y)</b> means that Alice will win when <b>(X, Y)</b> is the starting position of the pawn and <b>'B'</b> means that Bob will win. We use different background color for Alice and Bob cells for convenience. Impassable cells have black background color.</p>
<p>
<table>
<tbody>
<tr>
<td></td>
<td>0</td>
<td>1</td>
<td>2</td>
<td>3</td>
<td>4</td>
<td>5</td>
<td>6</td>
</tr>
<tr>
<td>0</td>
<td bgcolor="red">B</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
</tr>
<tr>
<td>1</td>
<td bgcolor="yellow">A</td>
<td bgcolor="black"></td>
<td bgcolor="red">B</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
</tr>
<tr>
<td>2</td>
<td bgcolor="yellow">A</td>
<td bgcolor="red">B</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="black"></td>
<td bgcolor="red">B</td>
<td bgcolor="yellow">A</td>
</tr>
<tr>
<td>3</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="red">B</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
</tr>
<tr>
<td>4</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="red">B</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
</tr>
<tr>
<td>5</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="red">B</td>
</tr>
</tbody>
</table>
</p>
