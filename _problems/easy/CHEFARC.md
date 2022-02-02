---
{"category_name":"easy","problem_code":"CHEFARC","problem_name":"Chef and Robots Competition","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"lexman","problem_tester":"mugurelionut","date_added":"29-05-2016","tags":{"0":"bfs","1":"easy","2":"july16","3":"lexman"},"editorial_url":"http://discuss.codechef.com/problems/CHEFARC","time":{"view_start_date":1468402200,"submit_start_date":1468402200,"visible_start_date":1468402200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/mandarin/CHEFARC.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/russian/CHEFARC.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/vietnamese/CHEFARC.pdf">Vietnamese</a> as well.</h3>
<p>In Chefland, there is a monthly robots competition. In the competition, a grid table of <b>N</b> rows and <b>M</b> columns will be used to place robots. A cell at row <b>i</b> and column <b>j</b> in the table is called cell <b>(i, j)</b>. To join this competition, each player will bring two robots to compete and each robot will be placed at a cell in the grid table. Both robots will move at the same time from one cell to another until they meet at the same cell in the table. Of course they can not move outside the table. Each robot has a movable range. If a robot has movable range <b>K</b>, then in a single move, it can move from cell <b>(x, y)</b> to cell <b>(i, j)</b> provided <b>(|i-x| + |j-y| &lt;= K)</b>. However, there are some cells in the table that the robots can not stand at, and because of that, they can not move to these cells. The two robots with the minimum number of moves to be at the same cell will win the competition.
</p>
<p>
Chef plans to join the competition and has two robots with the movable range <b>K1</b> and <b>K2</b>, respectively. Chef does not know which cells in the table will be used to placed his 2 robots, but he knows that there are 2 cells <b>(1, 1)</b> and <b>(1, M)</b> that robots always can stand at. Therefore, he assumes that the first robot is at cell <b>(1, 1)</b> and the other is at cell <b>(1, M)</b>. Chef wants you to help him to find the minimum number of moves that his two robots needed to be at the same cell and promises to give you a gift if he wins the competition.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<ul>
<li> The first line of each test case contains <b>4</b> space-separated integers <b>N M K1 K2</b> denoting the number of rows and columns in the table and the movable ranges of the first and second robot of Chef.</li>
<li> The next <b>N</b> lines, each line contains <b>M</b> space-separated numbers either <b>0</b> or <b>1</b> denoting whether the robots can move to this cell or not (<b>0</b> means robots can move to this cell, <b>1</b> otherwise). It makes sure that values in cell <b>(1, 1)</b> and cell <b>(1, M)</b> are <b>0</b>.</li>
</ul>
<h3>Output</h3>
<p>For each test case, output a single line containing the minimum number of moves that Chef’s 2 robots needed to be at the same cell. If they can not be at the same cell, print <b>-1</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>100</b></li>
<li><b>0</b> ≤ <b>K1, K2</b> ≤ <b>10</b></li>
</ul>
<h3> Subtasks </h3>
<p><b> Subtask #1 : (25 points) </b></p>
<ul>
<li><b> K1 = K2 = 1 </b></li>
</ul>

<p><b> Subtask # 2 : (75 points) </b></p>
<ul>
Original Constraints
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
4 4 1 1
0 1 1 0
0 1 1 0
0 1 1 0
0 0 0 0
4 4 1 1
0 1 1 0
0 1 1 0
0 1 1 0
1 0 0 1

<b>Output:</b>
5
-1
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Robot 1 can move (1, 1) -> (2, 1) -> (3, 1) -> (4, 1) -> (4, 2) -> (4, 3), and robot 2 can move (1, 4) -> (2, 4) -> (3, 4) -> (4, 4) -> (4, 3) -> (4, 3), they meet at cell (4, 3) after 5 moves.</p>
<p><b>Example case 2.</b> Because the movable range of both robots is 1, robot 1 can not move from (3, 1) to (4, 2), and robot 2 can not move from (3, 4) to (4, 3. Hence, they can not meet each other.</p>
