---
{"category_name":"hard","problem_code":"BINOMSUM","problem_name":"Day Schedule","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"CPP 4.3.2","9":"CPP 6.3","10":"CPP14","11":"CS2","12":"D","13":"ERL","14":"FORT","15":"FS","16":"GO","17":"HASK","18":"ICK","19":"ICON","20":"JAVA","21":"JS","22":"kotlin","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"rust","41":"SCALA","42":"SCM chicken","43":"SCM guile","44":"SCM qobi","45":"ST","46":"swift","47":"TCL","48":"TEXT","49":"WSPC"},"max_timelimit":6,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":null,"date_added":"23-08-2017","tags":{"0":"chemthan","1":"combinatorics","2":"fft","3":"hard","4":"nov17"},"time":{"view_start_date":1510579800,"submit_start_date":1510579800,"visible_start_date":1510579800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/mandarin/BINOMSUM.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/russian/BINOMSUM.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/vietnamese/BINOMSUM.pdf">Vietnamese</a> as well.</h3>


<p>In Chef's world, a single day lasts <b>K</b> hours. There is only one restaurant near Chef's home, and he always eats there. Chef always has his breakfast in the first hour of the day, and it takes him exactly 1 hour to have it. He always has <b>L</b> different dishes for breakfast. Through the rest of the day, Chef has some other smaller meals. Each small meal consists of only a single dish and he finishes eating it in exactly one hour. Each of the remaining hours, he does some activities. There are <b>A</b> different activities that Chef can do (play games, watch TV,... or even sleep). And each of those activities takes exactly one hour.</p>

<p>Chef never eats twice in a row in a day, but he can do the same activity consecutively. Note that, he might eat on the last hour of a day, and then eat in the first hour of the next day, because they are on different days.</p>

<p>Assume that on the first day, the restaurant has <b>D</b> different dishes for Chef to choose from. Each of the next days, a new dish is added to their menu. The Chef wants to plan his schedule for each of the <b>T</b> days, starting from the first day. That is, he wants to decide what dishes he's going to have for breakfast, when and what he'll have for his small meals, and what activities he'll do. Help him calculate sum of the number of different plans he can make for each day. That is, you need to find (the number of different plans possible for day 1) +  (the number of different plans possible for day 2) + ... + (the number of different plans possible for day <b>T</b>). Of course, the answer maybe large, so print only the remainder modulo <b>P</b>.</p>


<h3>Input</h3>
<ul>
<li>The first line contains four space-separated integers <b>K, A, P, Q</b>, where <b>Q</b> denotes the number of queries.</li>
<li>Then <b>Q</b> lines follow, each line containing three space-separated integers: <b>L, D, T</b>.</li>
</ul>

<h3>Output</h3>
<p>Each query, output the answer on a new line.</p>

<h3>Constraints</h3>
<ul>
<li>2 ≤ <b>K</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>A</b> ≤ 10<sup>9</sup></li>
<li>10<sup>8</sup> + 7 ≤ <b>P</b> ≤ 10<sup>9</sup> + 7, <b>P</b> is a prime.</li>
<li>1 ≤ <b>Q</b> ≤ 500</li>
<li>1 ≤ <b>L</b> ≤ <b>D</b> ≤ <b>D</b> + <b>T</b> - 1 ≤ 10<sup>7</sup></li>
</ul>

<h3>Subtasks:</h3>
<ul>
<li>Subtask #1 (5 points): <b>L</b> ≤ <b>D</b> ≤ <b>D</b> + <b>T</b> - 1 ≤ 10<sup>5</sup></li>
<li>Subtask #2 (10 points): <b>K</b> = 2</li>
<li>Subtask #3 (25 points): <b>K</b> ≤ 1000</li>
<li>Subtask #4 (60 points): Original constrains</li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
3 2 1000000007 1
1 1 2

<b>Output:</b>
22
</pre>

<h3>Explanations:</h3>
<p>There are 3 hours in a day, and 2 activities to choose from. Let the activities be A<sub>1</sub> and A<sub>2</sub>. Let the dishes be D<sub>1</sub> and D<sub>2</sub>. On Day 1, only D<sub>1</sub> is available. We will denote a plan for the day by a triplet (X, Y, Z). For example (D<sub>1</sub>, A<sub>1</sub>, A<sub>2</sub>) means that on the first hour, the Chef eats dish D<sub>1</sub> (which is his breakfast), then the next hour he does the first activity and on the last hour of the day he does the second activity.</p>

<p>All possible plans for the first day are as follows:</p>
<ul>
<li>(D<sub>1</sub>, A<sub>1</sub>, A<sub>1</sub>)</li>
<li>(D<sub>1</sub>, A<sub>1</sub>, A<sub>2</sub>)</li>
<li>(D<sub>1</sub>, A<sub>1</sub>, D<sub>1</sub>)</li>
<li>(D<sub>1</sub>, A<sub>2</sub>, A<sub>1</sub>)</li>
<li>(D<sub>1</sub>, A<sub>2</sub>, A<sub>2</sub>)</li>
<li>(D<sub>1</sub>, A<sub>2</sub>, D<sub>1</sub>)</li>
</ul>
<p>So there are total of 6 possible plans for Day 1.</p>

<p>On the second day, the only difference is that D<sub>2</sub> is also available at the restaurant. All possible plans for the second day are as follows:</p>
<ul>
<li>(D<sub>1</sub>, A<sub>1</sub>, A<sub>1</sub>)</li>
<li>(D<sub>1</sub>, A<sub>1</sub>, A<sub>2</sub>)</li>
<li>(D<sub>1</sub>, A<sub>1</sub>, D<sub>1</sub>)</li>
<li>(D<sub>1</sub>, A<sub>1</sub>, D<sub>2</sub>)</li>
<li>(D<sub>1</sub>, A<sub>2</sub>, A<sub>1</sub>)</li>
<li>(D<sub>1</sub>, A<sub>2</sub>, A<sub>2</sub>)</li>
<li>(D<sub>1</sub>, A<sub>2</sub>, D<sub>1</sub>)</li>
<li>(D<sub>1</sub>, A<sub>2</sub>, D<sub>2</sub>)</li>
<li>(D<sub>2</sub>, A<sub>1</sub>, A<sub>1</sub>)</li>
<li>(D<sub>2</sub>, A<sub>1</sub>, A<sub>2</sub>)</li>
<li>(D<sub>2</sub>, A<sub>1</sub>, D<sub>1</sub>)</li>
<li>(D<sub>2</sub>, A<sub>1</sub>, D<sub>2</sub>)</li>
<li>(D<sub>2</sub>, A<sub>2</sub>, A<sub>1</sub>)</li>
<li>(D<sub>2</sub>, A<sub>2</sub>, A<sub>2</sub>)</li>
<li>(D<sub>2</sub>, A<sub>2</sub>, D<sub>1</sub>)</li>
<li>(D<sub>2</sub>, A<sub>2</sub>, D<sub>2</sub>)</li>
</ul>
<p>So, there are 16 possible plans for Day 2. So, the answer is the sum of these two, which is 6 + 16 = 22. Hence that's the output.</p>