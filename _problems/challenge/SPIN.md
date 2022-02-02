---
{"category_name":"challenge","problem_code":"SPIN","problem_name":"Spinning Wheels","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":0.92,"source_sizelimit":50000,"problem_author":"gennady.korotkevich","problem_tester":"pieguy","date_added":"10-11-2011","tags":{"0":"challenge","1":"dec11","2":"gennady"},"editorial_url":"http://discuss.codechef.com/problems/SPIN","time":{"view_start_date":1323600962,"submit_start_date":1323600962,"visible_start_date":1323600962,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Spinning Wheels is a game for one player. It is played on a square grid consisting of <b>N</b> rows and <b>N</b> columns. Each cell contains a <i>wheel</i>, which is colored into one of five colors -- red, orange, yellow, blue or violet (for convenience, we'll number the colors from 1 to 5, correspondingly). Each wheel also has two <i>needles</i>, and the needles are placed in one of the following positions (for convenience, we'll number the positions from 1 to 4, correspondingly):

</p><p><div align="center">
<img src="http://www.codechef.com/download/SPIN1.png" />   
</div>

<br /></p><p>Basically, position 1 means that the needles are directed up and right, position 2 means that they're directed down and right down, position 3 -- down and left, and position 4 -- up and left.

</p><p>The goal of the game is to make all the wheels colored into the same color through a sequence of <i>moves</i>. A move consists of choosing a wheel and rotating it 90 degrees clockwise (for example, if the wheel was in position 1, it would change to position 2). After the rotation of some wheel, the state of other wheels (as well as the state of the wheel rotated first) may change.

</p><p>More formally. Let's denote the color of the wheel chosen on this move by <b>C</b>. We'll say that two wheels are <i>matching</i> if they are situated in side-by-side neighboring cells and either needle of both wheels is directed to the other wheel. The process of changing the grid is separated into <i>iterations</i>. We will maintain set <b>S</b> consisting of the wheels rotated at the last iteration. Before the first iteration, set <b>S</b> contains only the starting wheel. The following algorithm is executed then repeatedly:

</p><p><ul><li>If set <b>S</b> is empty, stop the process.
</li><li>Rotate each wheel in set <b>S</b> 90 degrees clockwise.
</li><li>Assign color <b>C</b> to each wheel in set <b>S</b>.
</li><li>Form set <b>Q</b> consisting of wheels which have at least one matching wheel in set <b>S</b>.
</li><li>Replace set <b>S</b> with set <b>Q</b> and clear set <b>Q</b>.</li></ul>

<br /></p><p>It's possible to prove that this process will definitely stop. Note that a wheel may get rotated more than once during the move.

</p><p>Your task is to win the game. More precisely, for each grid configuration given in input you should either output a winning sequence of moves (no longer than 1000 moves) or output -1 meaning that you'd like to skip this test case (it's essentially the same as outputting a configuration with 1001 moves).

</p><p><b>Note.</b> This might help (though the rules are <b>not</b> exactly the same): <a href="http://www.cesmes.fi/#boxSpin">http://www.cesmes.fi/#boxSpin</a>.

<h3>Input</h3>
</p><p>The first line of the input file contains an integer <b>T</b> -- the number of test cases. Then <b>T</b> test cases follow. The first line of each test case contains an integer <b>N</b>. The following <b>N</b> lines contain <b>N</b> integers (between 1 and 4, inclusive) each, giving the initial positions of the wheels in the corresponding cells. The following <b>N</b> give the information about the starting colors (each color between 1 and 5, inclusive) in the same format.

</p><p><b>Note.</b> The constraints are listed in the 'Test Case Generation' part of the problem statement.

<h3>Output</h3>
</p><p>For each test case output <b>-1</b> if you would like to skip this test case. Otherwise, output a line containing just one integer <b>K</b> (0 &lt;= <b>K</b> &lt;= 1000) and then <b>K</b> lines each containing a pair of integers <b>r c</b>, describing the corresponding move (1 &lt;= <b>r</b>, <b>c</b> &lt;= <b>N</b>; <b>r</b> is the row ID, <b>c</b> is the column ID).

<h3>Scoring</h3>
</p><p>If at least one of the constraints in the 'Output' section is broken, you'll get 'Wrong Answer'. If at least one of your sequences of moves doesn't lead to winning in the corresponding test case (not all wheels are of the same color after performing all the moves), you'll get 'Wrong Answer'. Otherwise, for each test case you'll get a score of 1001 if you output <b>-1</b>, and a score of <b>K</b> if you output a valid sequence of moves. Your score for the input file is the sum of your scores for the particular test cases. Finally, there are 10 input files in this problem, and your overall score is the average of your scores on the input files. Of course, your goal is to minimize your overall score.

</p><p><b>Important! You must solve at least one test case in each file, otherwise you'll get 'Wrong Answer'.</b>

<h3>Example</h3>

<pre>
<b>Input:</b>
2
3
1 1 1
4 2 4
1 4 2
3 3 2
3 2 1
4 5 4
4
2 2 2 3
1 4 4 3
3 1 3 1
3 2 3 1
3 4 2 3
4 2 1 1
4 3 2 3
4 4 2 2

<b>Output:</b>
3
3 3
2 1
1 3
-1

<b>Explanation:</b>
</pre>
</p><p>Your score for this input file is 3+1001 = 1004.

</p><p>Let's see what happens in the first test case if we apply the rotations from the output. The first two rotations change the state of only one wheel each, as no wheel matches the chosen one after the rotation:

</p><p><div align="center">
<img src="http://www.codechef.com/download/SPIN2.png" />   
</div>

<br /></p><p>The third rotation starts a process consisting of 14 iterations, as shown below (if we look at the pictures from left to right, from top to bottom; the rotated wheels at each iteration are highlighted):

</p><p><div align="center">
<img src="http://www.codechef.com/download/SPIN3.png" />   
</div>

<br /></p><p>Now all wheels are of the same color, so we've achieved our goal.

<h3>Test Case Generation</h3>
</p><p>There are 10 official input files. Each input file contains exactly 19 test cases. The values of <b>N</b> in the corresponding test cases are listed in the table below:
<table><tr><td>Test case</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td></tr>
<tr><td><b>N</b></td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td><td>15</td><td>20</td><td>25</td><td>30</td><td>35</td><td>40</td><td>45</td><td>50</td></tr></table>

<br /></p><p>The initial positions and colors of the wheels are chosen randomly and uniformly in the corresponding ranges.</p>