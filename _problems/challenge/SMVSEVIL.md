---
{"category_name":"challenge","problem_code":"SMVSEVIL","problem_name":"Smart Chef vs Evil Chef","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":0.872122,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":"anton_lunyov","date_added":"11-12-2011","tags":{"0":"challenge","1":"feb12","2":"pieguy"},"editorial_url":"http://discuss.codechef.com/problems/SMVSEVIL","time":{"view_start_date":1328955978,"submit_start_date":1328955978,"visible_start_date":1328952600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Evil Chef recently challenged Smart Chef in the following way:
Evil Chef will design a maze, and Smart Chef will provide a route through the maze.
The maze consists of a square grid of cells, one of which is marked as the starting
point, and one of which is marked as the exit.  A robot will be placed at the starting
point, which will attempt to execute each move of Smart Chef's route one at a time.
If the robot cannot move in the specified direction (either because the cell in that direction is impassable,
or because doing so would move the robot off the grid) the move will be ignored.
Otherwise it will move one space in the specified direction.
It then checks to see if it has exited the maze, and if so ignores the rest of the route.
If the robot makes it to the exit, Smart Chef wins.  Otherwise Evil Chef wins.</p>

<p>But Smart Chef's task is not as easy as it seems.
Smart Chef must provide the route without knowing what the maze looks like.
Furthermore, Evil Chef may cheat and change the layout of the maze after he finds
out Smart Chef's route.
Luckily, Evil Chef is not very smart, and only knows how to make a limited number of mazes.
And Smart Chef is so smart that he knows all the mazes Evil Chef is capable of making.
He's also smart enough to know when to ask for help,
and has asked for your help in designing the route.</p>

<p>Your task is to design a route guarantees Smart Chef will win.
In other words, your route must be able to solve all of Evil Chef's mazes.
Your goal is to minimize the length of the route, but it is not necessary to find the shortest possible route
(see the scoring section for additional details).
As long as your route solves all the mazes, does not exceed 10000 moves in length, and no prefix of your route solves all mazes, your solution will be judged as correct.
</p>

<h3>Input</h3>
<p>Input will begin with an integer T, the number of test cases that follow.
Each test case begins with an integer K, the number of mazes.
K maze descriptions follow.
Each maze description begins with 2 integers M and N, the height and width of the maze, respectively.
M lines follow with N characters each.
A '.' character indicates a passable cell.
A '#' character indicates an impassable cell.
A 'S' character indicates the starting point, and a 'E' character indicates the exit point.
There will be exactly one 'S' character and one 'E' character per maze.
</p>

<h3>Output</h3>
<p>Output one line per test case containing the route Smart Chef should use, as a sequence of
'N', 'E', 'S', and 'W' characters, corresponding to the directions North, East, South, and West,
respectively.  Your route must not exceed 10000 moves in length.</p>

<h3>Scoring</h3>
<p>Your score for each test case is the length of your route.
Your total score for each test file is the sum of your scores on the individual test cases.
Your overall score is the average of your scores on the individual test files.</p>

<h3>Sample Input</h3>
<pre><code>2
2
6 7
.###.##
..#...#
#S#.#..
.....#.
#.##..#
E...#..
6 7
.##.#.#
.......
#.#.#.#
..E#S..
.##..#.
#...#..
3
5 6
...E#.
#.##..
...##.
.##.#.
.....S
5 6
##.###
#...##
E##..#
.##.#.
..S...
6 6
#..###
.#..##
.S.#.#
.#.#.E
#..#.#
##....
</code></pre>

<h3>Sample Output</h3>
<pre><code>SSSWENENNWWWWSSE
ESSSWWWWNWNNESEEEWNNEE

</code></pre>

<p>This sample output would score 16+22=38.  Note that better scores may be possible.</p>

<h3>Test case generation</h3>
<p>For each official test file, T is 10.
K is chosen uniformly between 2 and 25, inclusive.
An integer L is calculated as floor(45/sqrt(K)) and H as floor(70/sqrt(K)).
Then for each maze M and N are each chosen uniformly between L and H, inclusive.</p>
<p>
Each maze is generated using a random walk algorithm.  
Initially all cells are marked as impassable.  One cell, chosen randomly, is marked as passable, and a marker is placed in this cell.  The following process repeated 10000000 times: The marker is moved to a random adjacent cell.  Then, if the marker is in a cell adjacent to exactly one passable cell, the cell with the marker becomes passable.
</p>
<p>
Finally, the exit is chosen randomly among all passable cells with only one passable neighbor, and the start cell is chosen randomly among all remaining passable cells.
</p>