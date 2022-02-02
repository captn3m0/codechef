---
{"category_name":"medium","problem_code":"CHEFGAME","problem_name":"ChefGame","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"laycurse","date_added":"10-12-2012","tags":{"0":"Rubanenko","1":"april13","2":"medium","3":"mst","4":"prim"},"editorial_url":"http://discuss.codechef.com/problems/CHEFGAME","time":{"view_start_date":1366018200,"submit_start_date":1366018200,"visible_start_date":1366018200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Everyone knows that ChefLand is the best country in the world and all of its people are the happiest. However, nobody knows their secret of being happy.</p>
<p>Suraj is an Indian scientist and his goal is to research the life of ChefLandian people. He has already arrived in ChefTown, the capital of ChefLand, and met Chef. He promised to reveal their secret to Suraj if he gets maximal score in a special ChefLandian game. The game has following rules:</p>
<ul>
<li>In <b>D</b>-dimensional Euclidean space, <b>N</b> lattice points are given. Every pair of points are not connected initially. The points are <b>not</b> guaranteed to be distinct.
</li><li>Let <b>(A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>D</sub>)</b> and <b>(B<sub>1</sub>, B<sub>2</sub>, ..., B<sub>D</sub>)</b> be the coordinates of the points <b>A</b> and <b>B</b> respectively, then the distance between <b>A</b> and <b>B</b> is defined as <b>( (A<sub>1</sub>−B<sub>1</sub>)<sup>2</sup> + (A<sub>2</sub>−B<sub>2</sub>)<sup>2</sup> + ... + (A<sub>D</sub>−B<sub>D</sub>)<sup>2</sup> )<sup>1/2</sup></b>.
</li><li>The initial Suraj's score is <b>1</b>.
</li><li>Suraj is allowed to take as many turns as he wants.
</li><li>In every turn, Suraj can connect an unconnected pair of two given points, if this new connection does not form a cycle. That is, Suraj cannot connect the pair of points <b>A</b> and <b>B</b>, if there exist points <b>X<sub>1</sub>, X<sub>2</sub>, ..., X<sub>k</sub></b> such that <b>A</b> connected to <b>X<sub>1</sub></b>, <b>X<sub>1</sub></b> connected to <b>X<sub>2</sub></b>, <b>X<sub>2</sub></b> connected to <b>X<sub>3</sub></b>,..., and <b>X<sub>k</sub></b> connected to <b>B</b>.
</li><li>In every time Suraj connects some points, his score is multiplied by the square of the distance between them.
</li></ul>
<p>Now Suraj wonders what is the maximal score he can get. Write a program that will find this score. Since this number can be huge you should output it modulo <b>747474747</b>.</p>
<h3>Input</h3>
<p>The first line of input contains <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases follow.</p>
<p>The first line of each test case contains two space-separated-integers <b>N</b> and <b>D</b>. The next <b>N</b> lines contain <b>D</b> space-separated integers, denoting the coordinates of the given lattice points.</p>
<h3>Output</h3>
<p>For each test case, output the maximal score modulo <b>747474747</b>.</p>
<h3>Constrains</h3>
<ul>
<li><b>1 ≤ T ≤ 6666</b></li>
<li><b>1 ≤ N ≤ 6666</b></li>
<li><b>1 ≤ D ≤ 5</b></li>
<li>The absolute value of any integer given in the input does not exceed <b>100000000 (10<sup>8</sup>)</b>.</li>
<li>The sum of <b>N</b> in one input file does not exceed <b>6666</b>.</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
3 2
0 0
-1 -1
1 -1

<b>Output:</b>
8
</pre><h3>Explanation</h3>
<p>The distance between the first point and the second point is <b>((0−(−1))<sup>2</sup>+(0−(−1))<sup>2</sup>)<sup>1/2</sup> = 2<sup>1/2</sup></b>.<br />The distance between the first point and the third point is <b>((0−1)<sup>2</sup>+(0−(−1))<sup>2</sup>)<sup>1/2</sup> = 2<sup>1/2</sup></b>.<br />The distance between the second point and the third point is <b>(((−1)−1)<sup>2</sup>+((−1)−(−1))<sup>2</sup>)<sup>1/2</sup> = 2</b>.<br /></p>
<p>One of the optimal ways is that Suraj connects the third and the second points, and then connects the first and the second points. The maximum score is <b>2<sup>2</sup> * (2<sup>1/2</sup>)<sup>2</sup> = 8</b>.</p>
