---
{"category_name":"easy","problem_code":"IPCTRAIN","problem_name":"IPC Trainers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"5-07-2017","tags":{"0":"admin2","1":"easy","2":"greedy","3":"heap","4":"july17","5":"stl"},"editorial_url":"https://discuss.codechef.com/problems/IPCTRAIN","time":{"view_start_date":1500283800,"submit_start_date":1500283800,"visible_start_date":1500283800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY17/mandarin/IPCTRAIN.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/russian/IPCTRAIN.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/vietnamese/IPCTRAIN.pdf">Vietnamese</a> as well.</h3>


<p>During the Indian Programming Camp (IPC), there are <b>N</b> trainers. The camp runs for <b>D</b> days. Each day, there can be at most one lecture. The i-th trainer arrives on day <b>D</b><sub>i</sub> and then stays till the end of the camp. He also wants to teach exactly <b>T</b></sub>i</sub> lectures. For each lecture that a trainer was not able to teach, he will feel sad and his sadness level will be increased by <b>S<sub>i</sub></b>.</p>

<p>You are the main organizer of the contest. You want to find minimum total sadness of the trainers.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of testcases.</p>
<p>For each test case, the first line contains two space separated integers, <b>N, D</b>.</p>
<p>The i-th of the next <b>N</b> lines will contain three space separated integers: <b>D</b><sub>i</sub></b>, <b>T</b><sub>i</sub></b>, <b>S</b><sub>i</sub></b> respectively.</p>

<h3>Output</h3>
<p>For each test case, output a single integer corresponding to the minimum total sadness of the trainers achievable.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N, D</b> ≤ 10<sup>5</sup></li>
<li>1 ≤  <b>D</b><sub>i</sub></b>,  <b>T</b><sub>i</sub></b> ≤ D</li>
<li>1 ≤  <b>S</b><sub>i</sub></b> ≤ 10<sup>5</sup></li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (40 points)</b>
</p>
<p>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N, D</b> ≤ 10<sup>3</sup></li>
<li>1 ≤  <b>D</b><sub>i</sub></b>,  <b>T</b><sub>i</sub></b> ≤ D</li>
<li>1 ≤  <b>S</b><sub>i</sub></b> ≤ 10<sup>3</sup></li>
</ul>
</p>

<p><b>Subtask #2 (60 points)</b></p>
<ul>
<li>Original constraints</li>
</ul>


<h3>Example</h3>
<pre>
<b>Input</b>
3
2 3
1 2 300
2 2 100
2 3
1 1 100
2 2 300
2 3
3 2 150
1 1 200

<b>Output</b>
100
0
150
</pre>

<h3>Explanation</h3>
<p><b>Example case 1</b>. Both the first and second trainer want to take exactly two lectures. The first trainer arrives on the 1st day and the second trainer arrives on the 2nd day. Consider a schedule where the first trainer takes the first two lectures, and the second trainer takes the last lecture on the day 3. This way the second trainer will take only one lecture but wanted to take two. Thus, his sadness will be 100. The first trainer took all the lectures that he wanted to take (ie. two lectures). Thus the total sadness is 100 + 0 = 100. You can check that no other way of assigning trainers to the days will give a better answer than this.</p>

<p><b>Example case 2</b>. In this case, the trainers can all take all their ideal number of lectures.</p>

<p><b>Example case 3</b>. In this case, the first trainer arrives on day 3 and wants to take two lectures. This is not possible as he can take at most one lecture on day 3 and the camp ends on day 3. The second trainer wants to take only one lecture which he can take on any one of the 1st or 2nd days. You can see that in one of the first or second days, no lecture will be held.</p>
