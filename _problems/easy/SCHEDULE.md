---
{"category_name":"easy","problem_code":"SCHEDULE","problem_name":"Cooking Schedule","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"1 - 2","source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"xcwgf666","date_added":"30-03-2016","tags":{"0":"binary","1":"easy","2":"kingofnumbers","3":"march17"},"editorial_url":"https://discuss.codechef.com/problems/SCHEDULE","time":{"view_start_date":1489397400,"submit_start_date":1489397400,"visible_start_date":1489397400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/mandarin/SCHEDULE.pdf?v=1">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/russian/SCHEDULE.pdf?v=1">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/vietnamese/SCHEDULE.pdf?v=1">Vietnamese</a> as well.</h3>

<p>Chef is a well-known chef, and everyone wishes to taste his dishes.</p>

<p>
As you might know, cooking is not an easy job at all and cooking everyday makes the chef very tired. So, Chef has decided to give himself some days off.</p>

<p>
Chef has made a schedule for the next <b>N</b> days: On <b>i</b>-th day if <b>A</b><sub>i</sub> is equal to <b>1</b> then Chef is going to cook a delicious dish on that day, if <b>A</b><sub>i</sub> is equal to <b>0</b> then Chef is going to rest on that day.</p>

<p>
After Chef made his schedule he discovered that it's not the best schedule, because there are some big blocks of consecutive days where Chef will cook which means it's still tiring for Chef, and some big blocks of consecutive days where Chef is going to rest which means chef will be bored doing nothing during these days.</p>

<p>
Which is why Chef has decided to make changes to this schedule, but since he doesn't want to change it a lot, he will flip the status of at most <b>K</b> days. So for each day which Chef chooses, he will make it <b>1</b> if it was <b>0</b> or he will make it <b>0</b> if it was <b>1</b>.</p>

<p>
Help Chef by writing a program which flips the status of at most <b>K</b> days so that the size of the maximum consecutive block of days of the same status is minimized.
</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>

<p>
The first line of each test case contains two integers: <b>N</b> denoting the number of days and <b>K</b> denoting maximum number of days to change.</p>

<p>
The second line contains a string of length <b>N</b> , of which the <b>i</b>-th character is <b>0</b> if chef is going to rest on that day, or <b>1</b> if chef is going to work on that day
</p>


<h3>Output</h3>
<p>For each test case, output a single line containing a single integer, which is the minimum possible size of maximum block of consecutive days of the same status achievable.</p>


<h3>Constraints</h3>

<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>11,000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b></li>
<li>The sum of <b>N</b> in all test-cases won't exceed <b>10<sup>6</sup></b>.</li>
<li><b>0</b> ≤ <b>K</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>1</b></li>

</ul>

<h3>Subtasks</h3>

<ul>
<li>Subtask #1 (20 points): <b>N</b> ≤ 10</li>
<li>Subtask #2 (80 points): Original Constraints </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>
2
9 2
110001111
4 1
1001
</tt>

<b>Output:</b>
<tt>
2
2
</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> The answer is 2 because we can change the string to: 110101011</p>
<p><b>Example case 2:</b> If we don't change the input string at all, the answer will be 2. It is the best value we can achieve under the given conditions.</p>