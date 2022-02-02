---
{"category_name":"challenge","problem_code":"SEABIL","problem_name":"(CH) Serejs and Billiards","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":null,"date_added":"7-10-2016","tags":{"0":"april17","1":"challenge","2":"sereja"},"time":{"view_start_date":1492421400,"submit_start_date":1492421400,"visible_start_date":1492421400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/mandarin/SEABIL.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/russian/SEABIL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/vietnamese/SEABIL.pdf">Vietnamese</a> as well.</h3>

Sereja likes to play billiards. Here is simplified version of it.
<p> </p>
Initially there is a table of size <b>N*N</b>. The table is divided by <b>N+1</b> horizontal and <b>N+1</b> vertical lines. The lines are numbered from <b>0</b>  to <b>N</b> from left to the right and in the same way from <b>0</b> in the top to <b>N</b> in the bottom. The intersection of the horizontal Line <b>i</b> and the vertical Line <b>j</b> is a point which will be denoted by <b>(i,j)</b>. The points <b>(0,0), (0, N), (N, 0), (N, N)</b> are the corners of the table. Initially, there are <b>M</b> balls on the table, at the points <b>(X<sub>i</sub>, Y<sub>i</sub>) (0 ≤ X<sub>i</sub>, Y<sub>i</sub> ≤ N)</b>. Each ball has its cost <b>Z<sub>i</sub></b>. 
<p></p>
In one move, Sereja can hit any one ball by giving it a velocity <b>(V<sub>x</sub>, V<sub>y</sub>)</b>, (<b>V<sub>x</sub></b> and <b>V<sub>y</sub></b> should belong to the set {-1, 0, 1}) and a starting energy <b>E (1 ≤ E ≤ 4 * N)</b>. After this there will be <b>E</b> actions:
<ul>
<li>At the beginning of each action, the ball will be moving from the old point <b>(X, Y)</b> to a new point <b>(X', Y')</b>. We initially set <b>X' = X+V<sub>x</sub></b> and <b>Y' = Y+V<sub>y</sub></b>.</li>
<li>But if the new point becomes equal to <b>(-1, -1)</b> or <b>(-1, N + 1)</b> or <b>(N + 1, -1)</b> or <b>(N + 1, N + 1)</b> then it is counted as the ball being pocketed, and hence the cost of the ball is added to the total score. The ball is then removed from the table, and no more actions are produced. This move ends.</li>
<li>If <b>X'</b> becomes equal to <b>-1</b>, we replace <b>X'</b> by <b>1</b> and <b>V<sub>x</sub></b> by <b>1</b>.</li>
<li>If <b>X'</b> becomes equal to <b>N + 1</b>, we replace <b>X'</b> by <b>N-1</b> and <b>V<sub>x</sub></b> by <b>-1</b>.</li>
<li>If <b>Y'</b> becomes equal to <b>-1</b>, we replace <b>Y'</b> by <b>1</b> and <b>V<sub>y</sub></b> by <b>1</b>.</li>
<li>If <b>Y'</b> becomes equal to <b>N + 1</b>, we replace <b>Y'</b> by <b>N-1</b> and <b>V<sub>y</sub></b> by <b>-1</b>.</li>
<li>If the new point already contains another ball we remove the old ball and the new ball will have a new cost which is the sum of both the balls. The process will be continued with the new ball, with whatever velocity it already had.</li>
</ul>
Sereja wants to make at most <b>4*M</b> moves. Each move also decreases the total score by <b>1</b>. Your task is to play the game so as to maximize the total score.
<p> </p>



<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</li>
<li>The first line of each test case contains two integers <b>N,M</b>.</li>
<li>The next <b>M</b> lines of the test case contains three numbers <b>X<sub>i</sub>, Y<sub>i</sub>, Z<sub>i</sub></b> each.</li>
</ul>
<p> </p>

<h3>Output</h3>
<ul>
<li>For each test case, the first line should be an integer <b>K</b> - the number of moves you want to make.</li>
<li>The next <b>K</b> lines should contain five numbers <b>X, Y, V<sub>x</sub>, V<sub>y</sub>, E</b>. You should ensure that the point <b>(X, Y)</b> contains some ball at that moment. Otherwise, your solution will be marked as WA.</li>
</ul> 
<p> </p>

<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>1000</b></li>
<li><b>0</b> ≤ <b> X<sub>i</sub>, Y<sub>i</sub> </b> ≤ <b>N</b></li>
<li><b>-100</b> ≤ <b> Z<sub>i</sub> </b> ≤ <b>100</b></li>
<li>Initially, no two balls will be at the same point.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 3
1 1 2
2 2 2
3 0 2
100 1
99 99 15
100 2
60 70 0
90 15 -100

<b>Output:</b>
2
2 2 -1 -1 4
3 0 -1 1 4
1
99 99 1 1 50
0


</pre>

<h3>Explanation</h3>

<p><b>Test case 2.</b> The grid size is <b>N</b> = 100. To get points for the only ball, we should give it velocity (1, 1) and the starting energy at least 2, so it could reach the point (101, 101). The starting energy is 50 in the provided output, what is also allowed and will lead to the ball reaching the point (101, 101) after 2 units of time and giving us 15 points. But because we have made 1 move, the total score reduces by 1, and hence the final total score is 15 - 1 = 14.</p> 

<p><b>Test case 3.</b> There are two balls, both with non-positive score (cost). Please note that it's allowed to not make moves at all, as you can see in the provided output.</p>

<h3>Scoring</h3>
Your judge score for each test case will be calculated as <b>max(total_score, 1)</b>, where <b>total_score</b> is the total score described in the statement. 
If <b>S</b> is your total judge score over all the tests, and if <b>W</b> is the maximum total judge score among all participants, then your displayed score will be equal to <b>S/W</b>.
<p></p>
<h3>Test generation</h3>
Each test will contain <b>T=10</b> and <b>N = 100</b>. <b>M</b> will be generated randomly in range [500, 1000]. All balls positions will be generated randomly. There will be four types of tests:
<ul>
<li>Each Z<sub>i</sub> is a random value in the range [1, 3]</li>
<li>Each Z<sub>i</sub> is a random value in the range [-3, 3]</li>
<li>Each Z<sub>i</sub> is a random value in the range [1, 100]</li>
<li>Each Z<sub>i</sub> is a random value in the range [-100, 100]</li>
</ul>
<p></p>