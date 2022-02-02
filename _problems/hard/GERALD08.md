---
{"category_name":"hard","problem_code":"GERALD08","problem_name":"Chef and Tree Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"gerald","problem_tester":"white_king","date_added":"13-03-2014","tags":{"0":"april14","1":"gerald","2":"hackenbush","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/GERALD08","time":{"view_start_date":1397468591,"submit_start_date":1397468591,"visible_start_date":1397467741,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/mandarin/GERALD08.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/russian/GERALD08.pdf">Russian</a>.</h3>
<p> </p>
<p>Chef has a rooted tree <b>G</b>, consisting of <b>N</b> vertices. Each edge of the tree has a color black or white.</p>
<p>Once Chef's friend Ksen offered Chef to play a game on the tree <b>G</b>. The game has very simple rule:</p>
<ul>
<li>The players make moves in the game alternately.</li>
<li>On his move Chef deletes a single undeleted black edge. On her move Ksen deletes a single undeleted white edge.</li>
<li>When some edge has been deleted, all the edges that now aren't connected (directly or indirectly) to the root will be deleted too.</li>
<li>One who cannot move lose the game.</li>
</ul>

<p>Chef really likes the game. The only problem is that Ksen knows the game very well. So she always plays optimally. That's why Chef has decided to choose the order of moves. Help Chef: tell him who will win the game if he moves first, and also who will win the game if Ksen moves first. Consider that Chef plays optimally too.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each testcase contains a single integer <b>N</b>. Then <b>N - 1</b> lines follows. Each contains three integers <b>U<sub>i</sub></b>, <b>V<sub>i</sub></b>, <b>C<sub>i</sub></b>. These integers denotes the current edge of the tree: the first two numbers means the numbers of vertices connected by the edge, the last number denotes the color of the edge (zero means black, one means white). Consider all vertices of the tree <b>G</b> are numbered from <b>1</b> to <b>N</b>. The root has number <b>1</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing two strings: the name of the winner if Chef moves first, and the name of the winner if Chef moves second.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>U<sub>i</sub></b>, <b>V<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>0</b> ≤ <b>C<sub>i</sub></b> ≤ <b>1</b></li>
<li>It's guaranteed that the sum of <b>N</b> values for all tests doesn't exceed 100000.</li>
</ul>
<p><br /></p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1
2
1 2 0
2
1 2 1
3
1 2 0
1 3 1
3
1 2 0
2 3 1

<b>Output:</b>
Ksen Chef
Chef Chef
Ksen Ksen
Ksen Chef
Chef Chef
</pre><p> </p>
