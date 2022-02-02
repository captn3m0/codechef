---
{"category_name":"medium","problem_code":"SNDISCUS","problem_name":"Snakes and their Discussions","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"kingofnumbers","date_added":"31-05-2017","tags":{"0":"admin2","1":"basic","2":"greedy","3":"proof","4":"snckpb17"},"editorial_url":"https://discuss.codechef.com/problems/SNDISCUS","time":{"view_start_date":1496331000,"submit_start_date":1496331000,"visible_start_date":1496331000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPB17/mandarin/SNDISCUS.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPB17/russian/SNDISCUS.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPB17/vietnamese/SNDISCUS.pdf">Vietnamese</a> as well.</h3>

<p>There are <b>n</b> snakes in Snakeland. Each snake can be denoted by either a horizontal or a vertical segment in the 2-D grid.</p>

<p>The snakes want to hold a discussion over the benefits and limitations of capitalism. Two snakes can share their ideas with each other if they have at least one cell in common with each other. You want the snakes to have a proper discussion, i.e. each snake should be able to share their ideas with every other snake. In one second, you can move a snake horizontally or vertically by one unit. Also, you can move as many snakes simultaneously as you wish. Find the minimum number of seconds required to make this discussion possible.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting number of test cases. The description of the <b>T</b> test cases follows.</p>
<p>The first line of each test case contains an integer <b>n</b>.</p>
<p>Each of the next <b>n</b> lines contains four space separated integers <b>x<sub>1</sub></b>, <b>y<sub>1</sub></b>, and <b>x<sub>2</sub></b>, <b>y<sub>2</sub></b>, denoting that the head of the snake is at (<b>x<sub>1</sub></b>, <b>y<sub>1</sub></b>) and the tail is at (<b>x<sub>2</sub></b>, <b>y<sub>2</sub></b>). It is guaranteed that snake will be denoted by either a horizontal or vertical segment.</p>

<h3>Output</h3>
<p>For each test case output a single integer corresponding to the answer of the problem.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 50</li>
<li>1 ≤ <b>n</b> ≤ 50</li>
<li>1 ≤ <b>x<sub>1</sub></b>, <b>y<sub>1</sub></b>, <b>x<sub>2</sub></b>, <b>y<sub>2</sub></b> ≤ 50</li>

</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
3
2
1 1 1 3
1 1 3 1
2
1 1 1 3
2 1 3 1
3
1 1 1 3
2 1 3 1
2 2 2 2

<b>Output</b>
0
1
1
</pre>

<h3>Explanation</h3>
<p><b>Example 1</b>. The snakes have a common cell at coordinates (1, 1). So, they will be able to talk to each other. There is no need to move them.</p>

<p><b>Example 2</b>. Move the horizontal snake (i.e. 2, 1, 3, 1) to the left by 1 unit. It will now be (1, 1, 2, 1). Now, the first and second snakes will have at least one common cell and will be able to talk to each other.  Hence, because you spent one second, the answer is 1.</p>

<p><b>Example 3</b>. In the first second, move the first snake (i.e. 1, 1, 1, 3) to the right by 1 unit, it will be (2, 1, 2, 3). Also, simultaneously, move the second snake (2, 1, 3, 1) upwards by 1 unit. It will now be at (2, 2, 3, 2). So, after this one second, each pair of snakes have at least one common cell with each other and can talk and have a proper discussion.</p>