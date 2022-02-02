---
{"category_name":"challenge","problem_code":"ALICGARD","problem_name":"Alice and her garden","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"10-02-2017","tags":{"0":"admin2"},"time":{"view_start_date":1487496600,"submit_start_date":1487496600,"visible_start_date":1487496600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Alice loves nature a lot. She owns her own large beautiful garden. Her garden is very neatly organized in a square shape of <b>n × n</b> cells. The cell at <b>i</b>-th row and <b>j</b>-th column is denoted by cell <b>(i, j)</b>. At each cell, she has a small portion for growing a plant of flowers. Also, she knows very well the number of flowers that will grow on a plant at a particular cell. In particular, this information is given you by two dimensional array <b>flowers</b>, where <b>flowers<sub>i, j</sub></b>, which denotes the number of flowers that grow on the plant at the <b>(i, j)</b>-th cell. If you pluck flowers of a plant, they will regrow after <b>regrow<sub>i, j</sub></b> hours.</p>

<p>Alice wants to wander in her garden a lot, and to collect as many flowers as possible. She starts her journey from cell <b>(x, y)</b>. She has to make a move at the end of each hour. In that single hour, she will pluck the flowers at the plant at her cell if the flowers are grown on the plant. At the end of the hour, she can move to adjacent cell of the current cell. Two cells are said to be adjacent to each other if they share an edge or corner with each other, i.e. in general a cell can have at most 8 adjacent cells. She can also decide to stay at the same cell too.</p>

<p>There is a limit on number of times that she can visit a particular cell, as the flower plants are very sensitive to touch by humans. This limit is provided you by a two dimensional array <b>limit</b>, where <b>limit<sub>i, j</sub></b> denotes the maximum number of times she can be at <b>(i, j)</b>-th cell during her entire journey. Note that if Alice decides to stay on the same cell, then this will also be counted towards visiting a particular cell. You are not allowed to visit <b>(i, j)</b>-th cell more than <b>limit<sub>i, j</sub></b> times.</p>

<p>Her father manages this large garden. Sometimes he feels the need of protecting some plants from the pollen of other flowers. For this, he can choose a sub-matrix of plants (rectangular section/sub-matrix of cells) and decide to build a fence around them. She is not allowed to cross the fence without paying a penalty. With each crossing of fence, she has to pay a penalty of <b>penalty</b> Rs.</p>


<p>The information about the fences will be provided you as follows. There are <b>F</b> fences of rectangular shape, which will be denoted by coordinates of its top left and bottom right coordinates. Each pair of fences is disjoint (more than this the fences don't even touch other, i.e. no two cells of different fences are adjacent to each other). The generation algorithm of the fences is provided in the next sections. </p>

<p>Alice wants to maximize her profit by selling the flowers she can collect during her journey. Cost of each of the fruit is fixed at 1 Rs. You will be playing this game on the behalf of Alice.  Can you please help her in achieving that?</p>

<p>You are allowed to make as many moves as you want respecting the conditions on the limit for each of the cells. If at some point, you decide to exit the game, you can output "EXIT" to stop the game. </p>

<p>
So, in summary, you can make any of the below given two moves. From current cell <b>(x, y)</b>, your each move can be one of the following types.

<ol>
<li><b>EXIT</b>: After this move, no further moves are allowed. Your final score will be your score achieved till now.</li>
<li><b>MOVE <b>X, Y</b></b>: It will mean that Alice is moving from cell <b>(x, y)</b> to cell adjacent cell <b>(X, Y)</b>, or she can decide to stay at the same cell <b>(x, y)</b> too.</li>
</ol>
</p>

<p>Possible reasons for your program getting a WA verdict:
<ul>
<li>You visit a cell more than the corresponding limit.</li>
<li>In <b>MOVE</b> move, <b>(X, Y)</b> is not valid, i.e. it is neither adjacent to <b>(x, y)</b>, nor it is equal to <b>(x, y)</b>. The cell <b>(X, Y)</b> will be invalid if it is outside the cells of garden.</li> 
<li>You don't make a EXIT move at the end.</li>
</ul>

<h3>Input</h3>
<p>First line of the input will contain four space separated integers <b>n, F, x, y, penalty</b>, where <b>n</b> denotes the height/width of the garden, <b>F</b> denotes number of fences, <b>x, y</b> denotes the <b>(x, y)</b>-th cell of the garden where Alice starts her journey, <b>penalty</b> denotes the penalty for crossing the fence.</p>
<p>Each of the next <b>n</b> lines, each line contains <b>n</b> space separated integers. The <b>j</b>-th integer in the <b>i</b>-th of the line will denote the value of <b>flowers<sub>i, j</sub></b>.</p>
<p>Each of the next <b>n</b> lines, each line contains <b>n</b> space separated integers. The <b>j</b>-th integer in the <b>i</b>-th of the line will denote the value of <b>limit<sub>i, j</sub></b>.</p>
<p>Each of the next <b>n</b> lines, each line contains <b>n</b> space separated integers. The <b>j</b>-th integer in the <b>i</b>-th of the line will denote the value of <b>regrow<sub>i, j</sub></b>.</p>
<p>Each of the next <b>F</b> lines, each line contains <b>4</b> space separated integers denoting <b>x1<sub>i</sub></b>, <b>y1<sub>i</sub></b>, <b>x2<sub>i</sub></b>, <b>y2<sub>i</sub></b>, denoting the top left coordinates and bottom right coordinates of the region enclosed by the <b>i</b>-th fence.</p>

<h3>Example Input & Output</h3>

<pre>
<b>Input</b>
2 1 1 1 1
1 2
1 4
2 2
2 2
1 2
2 3
2 2 2 2

<b>Output</b>
MOVE 1 2
MOVE 1 1
MOVE 1 2
MOVE 2 2
MOVE 2 1
MOVE 2 2
EXIT
</pre>

<h3>Explanation</h3>
<p>The garden is of dimensions <b>2 × 2</b>. Alice can visit each cell at max 2 times. She starts the journey from cell <b>(1, 1)</b>.</p>

<p>Initially, she will pluck the 1 flower at the cell <b>(1, 1)</b>. After that in the first move, she moves to cell <b>(1, 2)</b> and collects <b>2</b> flowers. After that, she moves cell <b>(1, 1)</b> back, and collects 1 more flower. After that she goes back to cell <b>(1, 2)</b> again collecting another <b>2</b> flowers. Till now, she has collected 6 flowers.</p>

<p>After this she decided to enter into the fence by moving to cell <b>(2, 2)</b>. She has to pay a penalty of <b>1</b> Rs for it. She however plucks <b>4</b> flowers at this cell. After that she goes to cell <b>(2, 1)</b>. For making this move, she has to again pay a penalty of <b>1</b> Rs. She gets the 1 flower at cell <b>(2, 1)</b> too. After this, she moves to cell <b>(2, 2)</b> by paying a penalty of <b>1</b> Rs. But this time she won't be able to gain any flower as the flowers have not regrown at this cell yet. After this, she exists the game. </p>

<p>You can see that she collected total 11 flowers and paid a penalty of 3 Rs. So, she got a gain of <b>8</b> Rs.</p>

<p>Note this answer may not be optimal. There are ways in which she can get a better score, though. </p>

<h3>Constraints and test generation</h3>
<h4>Generation of fence:</h4>
<p>
Let <b>W = sqrt(n)</b>. We will divide the rectangle into <b>W * W</b> regions symmetrically (It can be thought as of drawing <b>W - 1</b> equally spaced horizontal and vertical lines.). In each of these regions created, we will be building a fence whose height and width will be uniformly randomly between <b>1, W - 1</b>.</p>

<h4>Type 1</h4>
<ul>
<li><b>n = 100</b></li>
<li><b>1 ≤ x, y ≤ n</b>, generated uniformly randomly</li>
<li><b>penalty = 25 * 50000</b></li>
<li><b>1 ≤ flowers<sub>i, j</sub> ≤ 10<sup>5</sup></b>, generated uniformly randomly</li>
<li><b>5 ≤ limit<sub>i, j</sub> ≤ 15</b> , generated uniformly randomly</li>
<li><b>1 ≤ regrow<sub>i, j</sub> ≤ 10</b>, generated uniformly randomly</li>
</ul>

<h4>Type 2</h4>
<ul>
<li><b>n = 100</b></li>
<li><b>1 ≤ x, y ≤ n</b>, generated uniformly randomly</li>
<li><b>penalty = 15	* 50000</b></li>
<li><b>1 ≤ flowers<sub>i, j</sub> ≤ 10<sup>5</sup></b>, generated uniformly randomly</li>
<li><b>5 ≤ limit<sub>i, j</sub> ≤ 15</b> , generated uniformly randomly</li>
<li><b>1 ≤ regrow<sub>i, j</sub> ≤ 100</b>, generated uniformly randomly</li>
</ul>

<h4>Type 3</h4>
<ul>
<li><b>n = 196</b></li>
<li><b>1 ≤ x, y ≤ n</b>, generated uniformly randomly</li>
<li><b>penalty = 50 * 50000</b></li>
<li><b>1 ≤ flowers<sub>i, j</sub> ≤ 10<sup>5</sup></b>, generated uniformly randomly</li>
<li><b>5 ≤ limit<sub>i, j</sub> ≤ 15</b> , generated uniformly randomly</li>
<li><b>1 ≤ regrow<sub>i, j</sub> ≤ 20</b>, generated uniformly randomly</li>
</ul>

<h4>Type 4</h4>
<ul>
<li><b>n = 196</b></li>
<li><b>1 ≤ x, y ≤ n</b>, generated uniformly randomly</li>
<li><b>penalty = 40 * 50000</b></li>
<li><b>1 ≤ flowers<sub>i, j</sub> ≤ 10<sup>5</sup></b>, generated uniformly randomly</li>
<li><b>5 ≤ limit<sub>i, j</sub> ≤ 15</b> , generated uniformly randomly</li>
<li><b>1 ≤ regrow<sub>i, j</sub> ≤ 200</b>, generated uniformly randomly</li>
</ul>

<h3>Score</h3>
<p>There will be total 20 test files, 5 for each of the types of the tests described above. During the contest your solution will be judged on all the test files, but the score shown will only be for 20% of the test files (i.e. 1 of each test type). However, if you solution gets non-AC verdict on any of the test files, you will get zero score and will be notified about it with the corresponding non-AC verdict for the entire problem. Your score for each test file will be total number of flowers collected divided by <b>n * n</b>. For example, the score for sample example will be 8/(2 * 2) = 2. The overall score of the problem will be sum of scores of each of the test files. Again to remind, the score shown during the contest will be the score only on the 20% of the test files. </p>
