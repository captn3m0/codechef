---
{"category_name":"medium","problem_code":"MAZE","problem_name":"Maze","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"wwwwodddd","problem_tester":"kevinsogo","date_added":"14-05-2016","tags":{"0":"bfs","1":"cook70","2":"dfs","3":"dual","4":"easy","5":"union","6":"wwwwodddd"},"editorial_url":"http://discuss.codechef.com/problems/MAZE","time":{"view_start_date":1463941800,"submit_start_date":1463941800,"visible_start_date":1463941800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK70/mandarin/MAZE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK70/russian/MAZE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK70/vietnamese/MAZE.pdf">Vietnamese</a> as well.</h3>
<p>A brutal war in Chefland has just ended. Chefland is of rectangular grid shape of dimensions <b>R * C</b>, where <b>R</b> denotes the number of rows and <b>C</b> the number of columns. At each cell of the grid, there is a house. Enemy has planted parts a big nuclear bomb in each house of the Chefland. Enemy has just been defeated and might activate the bomb as a last resort. Enemy can only activate the nuclear bomb if all the parts of the bomb can send signals to each other. A part of bomb at a house can send signals to a part of bomb in its adjacent house only (i.e. the houses which share a wall with it). Note that there are walls between any two adjacent houses. Also, on all the houses, which lie on the boundary, there are walls on the boundary also. In simple terms, there are walls surrounding each house.
</p>
<p>
Now when bomb diffusion squad of Chefland learned about the plans of the enemy, they were devastated. Hurriedly they started coating walls of the houses with anti-nuclear material, so that no signal could be sent across the coated walls. They have already coated some walls with anti-nuclear material. Soon, they realized that they should ask some scientist to help them in coating the walls, so they asked our Chef to help them by coating minimum number of walls with anti-nuclear material such that bomb is disposed.
</p>
<p>
Please hurry up to help Chef in finding out the minimum number of walls he should coat to dispose the nuclear bomb. Enemy might activate the bomb any time soon. It might be impossible for Chef to coat the walls in order to dispose the bomb. In that case, Chefland is doomed.
</p>
<h3>Input</h3>
<p>First line of input contains a single integer <b>T</b> denoting the number of test cases.</p>
<p>For each test case, first line contains three space separated integers <b>R, C, W</b> denoting number of rows in Chefland, number of columns and the number of walls already coated by bomb diffusion squad, respectively.</p>
<p>Each of the next <b>W</b> lines, contains four space separated integers <b>i<sub>1</sub>, j<sub>1</sub>, i<sub>2</sub>, j<sub>2</sub></b>, denoting the wall between the house (<b>i<sub>1</sub>, j<sub>1</sub></b>) and (<b>i<sub>2</sub>, j<sub>2</sub></b>) has been coated.</p>
<h3>Output</h3>
<p>For each test case, output either "Chefland is doomed" (without quotes), or a single integer denoting the minimum number of walls Chef should coat.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>2×10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>R, C</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>i<sub>1</sub></b> ≤ <b>i<sub>2</sub></b> ≤ <b>R</b></li>
<li><b>1</b> ≤ <b>j<sub>1</sub></b> ≤ <b>j<sub>2</sub></b> ≤ <b>C</b></li>
<li>(<b>i<sub>1</sub>, j<sub>1</sub></b>) and (<b>i<sub>2</sub>, j<sub>2</sub></b>) are adjacent.</li>
<li>Sum of <b>W</b> over all test cases in a single test file does not exceed <b>2×10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
4 4 2
1 2 1 3
2 1 3 1
4 4 4
1 2 1 3
2 1 3 1
2 2 2 3
2 2 3 2
<b>Output:</b>
2
0
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b></p>
<p>
<img src="https://s3.amazonaws.com/codechef_shared/download/upload/COOK70/example_1_city_before.png" height="150" /><br />
<img src="https://s3.amazonaws.com/codechef_shared/download/upload/COOK70/example_1_city_after.png" height="150" />
</p>
<p>
First image shows the situation at the time Chef was invited to coat the walls. There were two walls coated with anti-active element (shown in red).<br />
Second image shows the situation after Chef coated two additional walls (between houses (2, 2) and (2, 3) and another between houses (2, 2) and (3, 2)).<br />
Note that, after this, bomb will be defused as bomb parts at (1, 1) won't be send signal to bomb part say (4, 4).
</p>
<p><b>Example case 2.</b><br />
These situation is same as second image in the above example. Bomb is already defused. Chef doesn't need to coat any more walls.</p>
