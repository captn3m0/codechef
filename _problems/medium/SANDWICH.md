---
{"category_name":"medium","problem_code":"SANDWICH","problem_name":"Long Sandwich ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"17-03-2017","tags":{"0":"kingofnumbers"},"time":{"view_start_date":1495099800,"submit_start_date":1495099800,"visible_start_date":1495099800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY17/mandarin/SANDWICH.pdf">mandarin chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MAY17/russian/SANDWICH.pdf">russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY17/vietnamese/SANDWICH.pdf">vietnamese</a> as well.</h3>


<p>Chef has finally entered Guinness world records as a maker of longest sandwich in the world by breaking the previous record by making a sandwich of length <b>N</b> meters.</p>

<p>Celebrating this achievement, Chef decided to have a sandwich party with his friends, and of course no need to make more sandwiches, he will just cut his sandwich of length <b>N</b> meters into parts such that each part has positive integer length, and that too of at most <b>K</b> meters, otherwise it will be too long and it will be hard to be finished. </p>

<p>Help Chef by telling him what's the minimum number of sandwiches (since he does not have many friends) the big sandwich has to be cut into, and in how many ways this can be done. Since the number of ways can be large output it modulo <b>M</b></p>

<p>Two ways are said to be different if the positions of the cuts of first way is different from the positions of cuts of the second way.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follow.</p>
<p>Each line of the next <b>T</b> describes a test-case and contains three integers <b>N</b>, <b>K</b> and <b>M</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing two space separated integers, minimum number of sandwiches and number of ways to cut the large sandwich into minimum number of sandwiches modulo <b>M</b>.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 5</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>18</sup></li>
<li>1 ≤ <b>K</b> ≤ 10<sup>18</sup></li>
<li>2 ≤ <b>M</b> ≤ 10<sup>6</sup></li>
</ul>

<h3>Subtasks</h3>
<ul>
  <li><b>Subtask #1 (10 points)</b> 1 ≤ <b>N, K</b> ≤ 50 </li>
  <li><b>Subtask #2 (20 points)</b> 1 ≤ <b>N, K</b> ≤ 1,000,000</li>
  <li><b>Subtask #3 (20 points)</b> <b>M</b> is prime</li>
  <li><b>Subtask #4 (50 points)</b> original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
7 3 500
10 2 1000

<b>Output:</b>
3 6
5 1
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> The minimum number of sandwiches is 3, and there are 6 ways to make 2 cuts:</p>

<ol>
<li>positions: 1 4</li>
<li>positions: 3 4</li>
<li>positions: 3 6</li>
<li>positions: 2 4</li>
<li>positions: 2 5</li>
<li>positions: 3 5</li>
</ol>
</p>

<p><b>Example case 2.</b> The minimum number of sandwiches is 5, and the only way is to make all the 5 sandwiches have length 2
</p>