---
{"category_name":"easy","problem_code":"PROTEPOI","problem_name":"Protecting The Poison","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"kingofnumbers","date_added":"18-05-2017","tags":{"0":"admin3","1":"easy","2":"geometry","3":"greedy","4":"snackdown","5":"snckpa17","6":"sorting"},"editorial_url":"https://discuss.codechef.com/problems/PROTEPOI","time":{"view_start_date":1495992600,"submit_start_date":1495992600,"visible_start_date":1495992600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPA17/mandarin/PROTEPOI.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPA17/russian/PROTEPOI.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPA17/vietnamese/PROTEPOI.pdf">Vietnamese</a> as well.</h3>

<p>
The kingdom of the snakes is an <b>N</b>x<b>N</b> grid. Their most-valued possession is a huge collection of poison, which is stored in the central <b>K</b>x<b>K</b> grid. It is guaranteed that both <b>N</b> and <b>K</b> are odd. What we mean by 'central' is this: suppose in the <b>N</b>x<b>N</b> grid, (i, j) refers to the cell in the i-th row and j-th column and (1,1) refers to the top-left corner and (N,N) refers to the bottom-right corner. Then the poison is stored in the <b>K</b>x<b>K</b> square whose top-left corner is <b>( (N - K)/2 + 1, (N - K)/2 + 1 )</b>.
</p>

<p>
But there are thieves who want to steal the poison. They cannot enter the <b>N</b>x<b>N</b> grid, but they can shoot arrows from outside. These arrows travel across a row (from left to right, or right to left), or across a column (top to bottom or bottom to top) in a straight line. If the arrow enters the <b>K</b>x<b>K</b> grid, some of the poison will stick to the arrow, and if it exits the <b>N</b>x<b>N</b> grid after that, the thieves will have successfully stolen some of the poison.</p>

<p>As the King of the snakes, you want to thwart these attempts. You know that the arrows will break and stop if they hit a snake's scaly skin, but won't hurt the snakes. There are some snakes already guarding the poison. Each snake occupies some consecutive cells in a straight line inside the <b>N</b>x<b>N</b> grid. That is, they are either part of a row, or part of a column. Note that there can be intersections between the snakes.  A configuration of snakes is 'safe', if the thieves cannot steal poison. That is, no matter which row or column they shoot arrows from, either the arrow should hit a snake and stop (this can happen even after it has entered and exited the <b>K</b>x<b>K</b> grid), or it shouldn't ever enter the <b>K</b>x<b>K</b> grid.</p>

<p>The King has other duties for the snakes, and hence wants to remove as many snakes as possible from this configuration, such that the remaining configuration is still 'safe'. Help him find the minimum number of snakes he needs to leave behind to protect the poison.</p>


<h3>Input</h3>
<ul>
<li>The first line contains a single integer, <b>T</b>, the number of testcases.</li>
<li>The first line of each testcase contains three integers: <b>N, K</b> and <b>M</b>, where <b>N</b> is the size of the entire square grid, <b>K</b> is the size of the square containing the poison, and <b>M</b> is the number of initial snakes.</li>
<li><b>M</b> lines follow, the i-th of which contains four integers: <b>HX<sub>i</sub>, HY<sub>i</sub>, TX<sub>i</sub>, TY<sub>i</sub></b>. (<b>HX<sub>i</sub>, HY<sub>i</sub></b>) is the cell which contains the head of the i-th snake. (<b>TX<sub>i</sub>, TY<sub>i</sub></b>) is the cell which contains the tail of the i-th snake. It is guaranteed that both these cells will either lie in the same row, or same column. And hence the cells in between them, including these two cells, represents the i-th snake.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each testcase, output a single integer in a new line: The minimum number of the snakes that the king can keep and still protect the poison. If it is not possible to protect the poison even with all the snakes, output -1.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 4</li>
<li>3 ≤ <b>N</b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>K</b> ≤ <b>N</b>-2</li>
<li>Both <b>N</b> and <b>K</b> will be odd integers</li>
<li>1 ≤ <b>M</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>HX<sub>i</sub>, HY<sub>i</sub>, TX<sub>i</sub>, TY<sub>i</sub></b> ≤ <b>N</b></li>
<li>It is guaranteed that at least one of (<b>HX<sub>i</sub> = TX<sub>i</sub></b>), and (<b>HY<sub>i</sub> = TY<sub>i</sub></b>) will be true for all i</li>
<li>None of the cells in the <b>K</b>x<b>K</b> grid will be occupied by any snake</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
7 3 7
1 1 6 1
1 2 3 2
5 2 5 2
2 4 2 6
6 2 6 4
5 6 5 7
7 1 7 4
7 3 7
1 1 6 1
1 2 3 2
5 2 5 2
2 6 2 6
6 2 6 4
5 6 5 7
7 1 7 4

<b>Output:</b>
3
-1
</pre>

<h3>Explanation</h3>
<p>The first example corresponds to:</p>
<p></p>
<img src="https://puu.sh/vUwp7/33aaeb020d.png" height="250"/>
<p></p>
<p>Note that the top-left corner cell of the <b>N</b>x<b>N</b> grid is by definition, (1,1). The inner square contains the poison, and the seven snakes are shown in different colours. The green snake is the 1st snake in the input.</p>
<p>We can remove all but 3 snakes and protect the poison. One such configuration is this:</p>
<p></p>
<img src="https://puu.sh/vUwkv/da691c5f2f.png" height="250"/>
<p></p>
<p>You can check that no arrow can enter the inner poison square and exit the outer square without hitting a snake. Hence is it safe. Also, you cannot do this with fewer snakes. Hence 3 is the answer.</p>

<p>The second testcase corresponds to:</p>
<p></p>
<img src="https://puu.sh/vUwHJ/092f78c0b3.png" height="250"/>
<p></p>
<p>You can check that even with all the snakes, this is not a safe configuration, because the thieves can shoot an arrow down the 5th column, and they can steal poison. Hence, the answer is -1.</p>