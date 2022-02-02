---
{"category_name":"hard","problem_code":"CLOWAY","problem_name":"Future of draughts","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"2 - 10","source_sizelimit":50000,"problem_author":"kaizer","problem_tester":"laycurse","date_added":"12-07-2015","tags":{"0":"algebra","1":"aug15","2":"fourier","3":"graph","4":"kaizer","5":"linear","6":"spectral","7":"super"},"editorial_url":"http://discuss.codechef.com/problems/CLOWAY","time":{"view_start_date":1439803800,"submit_start_date":1439803800,"visible_start_date":1439803800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG15/mandarin/CLOWAY.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG15/russian/CLOWAY.pdf">Russian</a>.</h3>
<p><b>2367. The Earth. </b> <br />
The world we know doesn't exist anymore. All has been changed during the inevitable evolution, but only Chef retains his former self.
</p>
<p>Peoples don’t play ordinary draughts we know, mankind has enhanced it. Present games are held on an undirected graph, instead of the board. Before a game starts, one player chooses a vertex of the graph and puts a checker (called the <i>game checker</i>) on it. Then the players take turns alternately. In a single turn, a player moves the game checker from its current vertex, say <b>v</b>, to some neighbour (see note) of <b>v</b>. The game goes on until one of the players surrenders. The player who moves last is considered as the winner. This game may seems to you confusing. Strange even, and imperfect, but don’t bother about it.
</p>
<p>Chef would like to become the best in this game so he needs training. During training, Chef plays by himself. Being very tired, all of his moves are absolutely random as well as his choice for the initial position of the game checker. He has <b>T</b> game-graphs (indexed <b>1</b> to <b>T</b>), and a very tiresome trainer who forces him to train again and again. For the <b>i</b><sup>th</sup> training session, the trainer gives 3 numbers to Chef: <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b>, and <b>K<sub>i</sub></b>. Chef has to carry out a few simultaneous games against himself on game-graphs indexed between <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b> (both included).<br />
<br />
Specifically, after the trainer gives him such an order, for each game-graph in range <b>L<sub>i</sub></b> … <b>R<sub>i</sub></b> Chef <b>randomly</b> sets initial position of the game checker. Further, for each of the following steps, he should choose a <b>random non-empty subset</b> of the set of allowed game-graphs. Then he <b>randomly</b> moves one checker in <b>all</b> of these chosen game-graphs. The whole training ends after finite number of steps if the set of current positions after last step is the same as the set of initial positions. Note that Chef must make at least one move during this training.
</p>
<p>The trainer wants <b>Q</b> training sessions, as described above, and for each one of them Chef would like to know how many ways of his play lead to the whole training ending within <b>K<sub>i</sub></b> steps or less. Since the answer could be very large, print it modulo <b>1000000007</b>.
</p>
<h3>Input</h3>
<p>The first line of the input contains a single integer <b>T</b> denoting the number of graphs. The description of <b>T</b> graphs follows.<br />
The first line of each graph description contains two integers <b>N<sub>k</sub></b>, <b>M<sub>k</sub></b> denoting the number of vertices and the number of edges in the <b>k</b>-th graph. Next <b>M<sub>k</sub></b> lines contain two space separated integers - 1-indexed indices of vertex pairs linked with an edge.<br />
It is guaranteed that there are no multiple edges (two or more edges incident on the same two vertices) or loops (an edge connecting a vertex to itself).
</p>
<p>After graph descriptions, a single line contains an integer <b>Q</b>, denoting the number of training sessions. Each of the next <b>Q</b> lines contain three space-separated integers, with the <b>i</b><sup>th</sup> line containing the integers <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b>, <b>K<sub>i</sub></b>, respectively, describing the <b>i</b><sup>th</sup> training session.
</p>
<h3>Output</h3>
<p>
For each query, print a single integer - the number Chef would like to find out modulo <b>1000000007</b> (<b>10<sup>9</sup>+7</b>).
</p>
<h3>Constraints and Subtasks</h3>
<ul>
<li><b>1</b> ≤ <b>T</b>, <b>N<sub>k</sub></b> ≤ <b>50</b></li>
<li><b>0</b> ≤ <b>M<sub>k</sub></b> ≤ <b>N<sub>k</sub>×(N<sub>k</sub>−1)/2</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>2×10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b> ≤ <b>R<sub>i</sub></b> ≤ <b>T</b></li>
<li><b>1</b> ≤ <b>K<sub>i</sub></b> ≤ <b>10<sup>4</sup></b></li>
</ul>
<p><b>Subtask 1: (10 points)</b></p>
<ul>
<li><b>L<sub>i</sub></b> = <b>R<sub>i</sub></b></li>
<li><b>1</b> ≤ <b>K<sub>i</sub></b> ≤ <b>100</b></li>
<li>Time Limit is <b>2</b> seconds</li>
</ul>
<p><b>Subtask 2: (25 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>K<sub>i</sub></b> ≤ <b>100</b></li>
<li>Time Limit is <b>2</b> seconds</li>
</ul>
<p><b>Subtask 3: (25 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>K<sub>i</sub></b> ≤ <b>2×10<sup>3</sup></b></li>
<li><b>1</b> ≤ <b>N<sub>k</sub></b> ≤ <b>15</b></li>
<li>Time Limit is <b>8</b> seconds</li>
</ul>
<p><b>Subtask 4: (40 points)</b></p>
<ul>
<li> <b>1</b> ≤ <b>T</b> ≤ <b>20</b> </li>
<li>Time Limit is <b>10</b> seconds</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
3 3
1 2
2 3
1 3
3
1 1 1
1 1 3
1 1 4

<b>Output:</b>
0
12
30

<b>Input:</b>
2
3 2
1 2
2 3
2 1
1 2
3
1 1 6
1 2 2
1 2 10

<b>Output:</b>
28
22
915822
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b><br />
Starts from: (ways of play with length in range [1, 4]) <br />
<b>1: </b> (1,2,1), (1,3,1), (1,2,3,1), (1,3,2,1), (1,2,3,2,1), <br />(1,3,2,3,1), (1,2,1,3,1),(1,3,1,2,1),(1,2,1,2,1),(1,3,1,3,1) <br />
<b>2, 3: </b> similar to 1. <br />
So, the number of ways of play with length at most 3 equals <b>4×3</b> = <b>12</b>. <br />
And, the number of ways of play with length at most 4 equals to <b>10×3</b> = <b>30</b>.
</p>
<p><b>Example case 2.</b><br />
Starts from: (ways of play with length = 2)<br />
<b> (1,1):</b> ((1,1), (2,1), (1,1)), ((1,1), (1,2), (1,1)), ((1,1), (2,2), (1,1)) <br />
<b> (2,1):</b> ((2,1), (1,1), (2,1)), ((2,1), (2,2), (2,1)), ((2,1), (3,1),(2,1)),<br />
((2,1), (1,2),(2,1)),((2,1),(3,2),(2,1))<br />
<b> (3,1):</b> similar to (1,1) <br />
So, the according to symmetry of second graph number of ways equals to <b>(3×2+5)×2</b> = <b>22</b>.
</p>
<h3>Note</h3>
<p>In an undirected graph, a vertex <b>u</b> is called a neighbour of vertex <b>v</b>, if <b>u</b> and <b>v</b> are connected via an edge.</p>
