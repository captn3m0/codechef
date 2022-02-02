---
{"category_name":"easy","problem_code":"CHEFSTON","problem_name":"Chef and Stones","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"shiplu","date_added":"1-11-2014","tags":{"0":"basic","1":"berezin","2":"cakewalk","3":"jan15"},"editorial_url":"http://discuss.codechef.com/problems/CHEFSTON","time":{"view_start_date":1421055000,"submit_start_date":1421055000,"visible_start_date":1421055000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/mandarin/CHEFSTON.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/russian/CHEFSTON.pdf">Russian</a>.</h3>
<p>Chef is playing a game. Currently in the game, he is at a field full of stones. There are total <b>N</b> kinds of<br />
stones. There is unlimited supply of each kind of stone.
</p>
<p>Chef knows that one stone of kind <b>i</b> needs <b>A<sub>i</sub></b> minutes to pick it from the ground and it will give Chef a profit of<br />
<b>B<sub>i</sub></b> Rs. </p>
<p>Chef has <b>K</b> minutes of free time. During this free time, Chef want to pick stones so as to maximize his profit.<br />
But he can not pick stones of different kinds, he has to pick stones of a single kind.</p>
<p>Please help Chef to find the maximal possible profit. </p>
<h3>Input</h3>
<ul>
<li>First line contains single integer <b>T</b> denoting the number of test cases. </li>
<li>First line of each test case contains two integers <b>N</b> and <b>K</b>. </li>
<li>Next line contains <b>N</b> integers <b>A<sub>i</sub></b> denoting the time needed to pick one stone of kind <b>i</b>. </li>
<li>Next line contains <b>N</b> integers <b>B<sub>i</sub></b> denoting the profit due to picking <b>i</b><sup>th</sup>th stone. </li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, print a single line containing maximal possible profit. </li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub>, B<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask <b>N</b> ≤ <b>5</b>, <b>T</b> ≤ <b>2</b> Points: 30 </li>
<li>Subtask <b>N</b> ≤ <b>10<sup>5</sup></b>, <b>T</b> ≤ <b>5</b> Points: 70 </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
3 10
3 4 5
4 4 5

<b>Output:</b>
12
</pre><h3>Explanation</h3>
<p>
If Chef picks stones of first kind he can pick <b>3</b> stones, he will get a profit of <b>3*4 = 12</b> Rs. <br />
If Chef picks stones of second kind he can pick <b>2</b> stones, he will get a profit of <b>2*4 = 8</b> Rs. <br />
If Chef picks stones of third kind he can pick <b>2</b> stones, he will get a profit of <b>2*5 = 10</b> Rs.
</p>
<p>
So the maximum possible profit is 12.
</p>
