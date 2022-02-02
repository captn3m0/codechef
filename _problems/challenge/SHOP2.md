---
{"category_name":"challenge","problem_code":"SHOP2","problem_name":"Optimal Shopping II","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"kevinsogo","date_added":"29-03-2016","tags":{"0":"challenge","1":"may16","2":"travel","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/SHOP2","time":{"view_start_date":1463391000,"submit_start_date":1463391000,"visible_start_date":1463391000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/mandarin/SHOP2.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/russian/SHOP2.pdf">Russian</a> as well.</h3>
<p>There are <b>N</b> junctions and <b>M</b> bidirectional roads, connecting these junctions. The junctions are numbered from <b>1</b> to <b>N</b> inclusive. For each road the time required to pass it is known.</p>
<p>There's a shop in every junction. Each shop contains some of <b>K</b> types of goods. In <b>i</b>-th shop, the goods of the <b>j</b>-th type cost <b>A<sub>i,j</sub></b> rubles.
</p>
<p>Any item of the <b>i</b><sup>th</sup> type of goods weighs for <b>W<sub>i</sub></b> grams.</p>
<p>Initially, you are standing at the junction 1. You want to get to the junction <b>N</b> and buy <b>exactly</b> one unit of each of the goods so that your total budget does not exceed <b>F</b> rubles and the penalty is minimized (see next section for its details). Please note that buying goods take negligible time, so buying goods and switching roads can be considered instantaneous. Also, passing through junctions and roads multiple times is allowed. Also, note that you are also allowed to pass through junction <b>N</b> also, as long as in the end, you end up at this junction.</p>
<p>The penalty is defined as the sum of <b>T<sub>i</sub> * W<sub>i</sub></b> over all types of goods, where <b>T<sub>i</sub></b> denotes the time between the moment of the purchase of the item of the goods of the <b>i</b><sup>th</sup> type and the finish moment. Intuitively, penalty is the cost you have to pay in carrying the goods.</p>
<h3>Input</h3>
<p>The first line contain four space-separated integer numbers <b>N, M, K, F</b> denoting the number of junctions, the number of roads, the number of types of goods and the budget respectively.</p>
<p>Each of the following <b>K</b> lines (say, the <b>i</b><sup>th</sup>) start with a pair of integer numbers <b>P<sub>i</sub></b> and <b>W<sub>i</sub></b> followed with <b>P<sub>i</sub></b> pairs of integers <b>B<sub>i, j</sub></b>, <b>A<sub>i, j</sub></b>, where <b>B<sub>i, j</sub></b> denotes a shop containing <b>i</b><sup>th</sup> good, the shop is located at junction <b>B<sub>i, j</sub></b> and the cost of <b>i</b><sup>th</sup> good at this junction will be <b>A<sub>i, j</sub></b>.
</p>
<p>Each of the following <b>M</b> lines (say, the <b>k</b><sup>th</sup>) contains three space-separated integer numbers <b>X<sub>k</sub>, Y<sub>k</sub>, Z<sub>k</sub></b>, which denotes that there is a road whose two endpoint junctions are given by <b>X<sub>k</sub>, Y<sub>k</sub></b> and the time required to pass this junction is given by <b>Z<sub>k</sub></b>.</p>
<h3>Output</h3>
<p>The first line of the output should contain an integer number <b>D</b>, denoting the number of commands.</p>
<p>The following line should contain <b>D</b> integer numbers, denoting the commands in the following format: Let the number outputted in some command is <b>d</b>.</p>
<ul>
<li> If <b>d</b> is positive, then it represents a move from the current junction to the adjacent junction numbered <b>d</b>.</li>
<li> If <b>d</b> is  negative, that it represents buying of the goods of  type <b>-d</b> in the current shop.</li>
</ul>
<p>In the beginning, the current junction is always the first junction.</p>
<p>You will get a wrong answer verdict when:</p>
<ul>
<li>You try to move to the junction that is not adjacent to the current one.</li>
<li>You don't finish at the junction <b>N</b>.</li>
<li>You spend more than <b>F</b> rubles.</li>
<li>You try to buy some goods in some shop where they're unavailable.</li>
<li>You try to buy goods of same type twice or some.</li>
<li>You don't buy all the goods by the time you finish.</li>
<li>The number of commands exceeds <b>2000000</b>.</li>
</ul>

<h3>Constraints</h3>
<p>In order to ensure that the answer will always exist, the value of the sum of the minimal costs over all goods will not exceed <b>F</b>.</p>
<ul>
<li>It is possible to get from any junction to any other junction via the given roads.</li>
<li><b>1</b> ≤ <b>Z<sub>k</sub></b> ≤ <b>10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>W<sub>i</sub></b> ≤ <b>10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>F</b> ≤ <b>10<sup>7</sup></b></li>
<li>A shop can contain at most one good of a particular type, Hence for each junction <b>i</b>, <b>B<sub>i, j</sub></b>'s will be distinct.</li>
</ul>
<p>Group 1:</p>
<ul>
<li><b>40</b> ≤ <b>N</b> ≤ <b>50</b></li>
<li><b>80</b> ≤ <b>M</b> ≤ <b>100</b></li>
<li><b>20</b> ≤ <b>K</b> ≤ <b>40</b></li>
<li><b>10</b> ≤ <b>A<sub>i, j</sub></b> ≤ <b>30</b></li>
</ul>

<p>Group 2:</p>
<ul>
<li><b>40</b> ≤ <b>N</b> ≤ <b>50</b></li>
<li><b>80</b> ≤ <b>M</b> ≤ <b>100</b></li>
<li><b>20</b> ≤ <b>K</b> ≤ <b>40</b></li>
<li><b>10000</b> ≤ <b>A<sub>i, j</sub></b> ≤ <b>50000</b></li>
</ul>

<p>Group 3:</p>
<ul>
<li><b>900</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>1000</b> ≤ <b>M</b> ≤ <b>10000</b></li>
<li><b>100</b> ≤ <b>K</b> ≤ <b>500</b></li>
<li><b>10</b> ≤ <b>A<sub>i, j</sub></b> ≤ <b>30</b></li>
</ul>

<p>Group 4:</p>
<ul>
<li><b>900</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>1000</b> ≤ <b>M</b> ≤ <b>10000</b></li>
<li><b>100</b> ≤ <b>K</b> ≤ <b>500</b></li>
<li><b>10000</b> ≤ <b>A<sub>i, j</sub></b> ≤ <b>50000</b></li>
</ul>

<h3>Test data generation</h3>
<p>Each of the four groups will contain five test cases. During the contest, you will only see the score on the set of four test cases - one from each group.
</p><p>The junction-road network structure will be random. The values of <b>N, M, K</b> will be picked from the given intervals randomly and independently.</p>
<p>For the distribution of the goods between shops, there will be picked a non-random interval <b>[L; R]</b>, which is common for all goods within a test case. Each of the goods will go to <b>P</b> random shops, where <b>P</b> is picked randomly from the segment <b>[L; R]</b>.</p>
<p>For each of the goods, the weight is picked randomly from the segment <b>[1; 10<sup>4</sup>]</b>.</p>
<p>Then, the sum <b>S</b> of minimal costs over all goods is calculated. The value of <b>F</b> will be equal to <b>S</b> multiplied by some random number within range <b>[1.0; 1.1]</b> (and rounded).</p>
<h3>Scoring</h3>
<p>Your score for a single test case will be calculated as a square root of the value of the penalty function, described in the statement.</p>
<p>Your score for the problem will be calculated as a sum of individual scores for each test case.</p>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>4 6 2 28
3 50 2 13 4 17 3 15
2 91 3 19 2 15
2 1 34
1 3 46
3 4 18
1 4 54
2 4 90
3 2 38</tt>
    
<b>Output:</b>
<tt>5
2 -1 -2 3 4</tt>
</pre><h3>Explanation</h3>
<h3>Input</h3>
<p>There are <b>4</b> junctions, <b>6</b> roads and <b>2</b> types of goods. The total budget is <b>28</b>.</p>
<p>The goods of the first type does weigh <b>50</b> and are sold in the shops at the junctions <b>2, 4, 3</b> with costs <b>13, 17, 15</b> respectively.</p>
<p>The goods of the second type does weigh <b>91</b> and are sold in the junctions <b>3, 2</b> with costs <b>19, 15</b> respectively.</p>
<h3>Output</h3>
<p>Let's perform the outputted commands:</p>
<ul>
<li>Command <b>2</b> means to move to junction 2. There is such a road, so the command is correct.</li>
<li>Command <b>-1</b> means to buy goods of the type <b>1</b>. So we buy goods of the type <b>1</b>, and spend <b>13</b> rubles.</li>
<li>Command <b>-2</b> means to buy goods of the type <b>2</b>. So we buy goods of the type <b>2</b> and spend <b>15</b> burles. Now we've spent <b>28</b> burles in total, which is OK, since we didn't exceed the budget of <b>28</b> burles.</li>
<li>Command <b>3</b> means to move to the third junction. Meanwhile, the penalty becomes equal to <b>(50 + 91) * 38 = 5358</b>.</li>
<li>Command <b>4</b> means to move to the fourth junction. The penalty function becomes equal to <b>(50 + 91) * (38 + 18) = 7896</b>. We can finish now, since all goods are bought and we've reached the final junction.</li>
</ul>

