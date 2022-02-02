---
{"category_name":"easy","problem_code":"DONUTS","problem_name":"Chain of Doughnuts","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"m0stik","problem_tester":"kevinsogo","date_added":"30-04-2015","tags":{"0":"easy","1":"greedy","2":"m0stik","3":"sept15","4":"sorting"},"editorial_url":"http://discuss.codechef.com/problems/DONUTS","time":{"view_start_date":1442223000,"submit_start_date":1442223000,"visible_start_date":1442223000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT15/mandarin/DONUTS.pdf">Mandarin</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT15/russian/DONUTS.pdf">Russian</a>. Translations in Vietnamese to be uploaded soon.</h3>
<p>There is new delicious item in Chef's menu - a doughnut chain. Doughnuts connected successively in line forming a chain.</p>
<p><center><br />
<img src="https://s3.amazonaws.com/codechef_shared/download/SEPT15/DONUT1.jpg" /></center></p>
<p><i>Chain of 3 doughnuts</i></p>
<p></p>
<p>Chef has received an urgent order for making a chain of <b>N</b> doughnuts. He noticed that there are exactly <b>N</b> cooked doughnuts in the kitchen, some of which are already connected in chains. The only thing he needs to do is connect them in one chain.</p>
<p>He can cut one doughnut (from any position in a chain) into two halves and then use this cut doughnut to link two different chains.<br />
Help Chef determine the minimum number of cuts needed to complete the order.
</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</li>
<li>The first line of each test case contains two integer <b>N</b> and <b>M</b> denoting the size of order and number of cooked chains respectively.</li>
<li>The second line contains <b>M</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>M</sub></b> denoting the size of the chains.</li>
</ul>
<p><em>It is guaranteed that <b>N</b> is equal to the sum of all <b>A<sub>i</sub></b>'s over <b>1&lt;=<em>i</em>&lt;=M</b>.</em></p>
<h3>Output</h3>
<p>For each test case, output a single line containing an integer corresponding to the number of cuts needed Chef to make the order.</p>
<h3>Constraints and Subtasks</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>200</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>2*10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<p><b>Subtask 1: 10 points</b></p>
<ul>
<li><b>1</b> ≤ <b>M</b> ≤ <b>2*10<sup>4</sup></b></li>
<li><b>A<sub>i</sub> = 1</b></li>
</ul>
<p><b>Subtask 2: 30 points</b></p>
<ul>
<li><b>1</b> ≤ <b>M</b> ≤ <b>100</b></li>
</ul>
<p><b>Subtask 3: 60 points</b></p>
<ul>
<li><b>1</b> ≤ <b>M</b> ≤ <b>2*10<sup>4</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
11 3
4 3 4
6 3
3 2 1

<b>Output:</b>
2
1

</pre><h3>Explanation</h3>
<p><b>Example 1:</b> We could cut 2 doughnut from any "chain" and use them to connect chains to the one. <br/> For example, let's cut it from the first chain. After this we will have chains of sizes 2, 3, 4 and two doughnuts that have been cut. So we could connect the first chain with second and second with third using these two doughnuts.</br/></p>
<p><b>Example 2:</b> We cut doughnut from the last "chain" and connect the first two chains.</p>
<p><img src="https://s3.amazonaws.com/codechef_shared/download/SEPT15/DONUT2.png" /></p>
<p><i>Image for second example. Yellow doughnut has been cut.</i></p>
