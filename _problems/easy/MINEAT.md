---
{"category_name":"easy","problem_code":"MINEAT","problem_name":"Minion Chef and Bananas","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"28-02-2018","tags":{"0":"admin2","1":"binary","2":"easy","3":"march18"},"editorial_url":"https://discuss.codechef.com/problems/MINEAT","time":{"view_start_date":1520847000,"submit_start_date":1520847000,"visible_start_date":1520847000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/mandarin/MINEAT.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/russian/MINEAT.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/vietnamese/MINEAT.pdf">Vietnamese</a> as well.</h3>

<p>Minion Chef likes to eat bananas a lot. There are <b>N</b> piles of bananas in front of Chef; for each <b>i</b> (1 ≤ <b>i</b> ≤ <b>N</b>), the <b>i</b>-th pile contains <b>A<sub>i</sub></b> bananas.</p>

<p>Chef's mother wants her to eat the bananas and be healthy. She has gone to the office right now and will come back in <b>H</b> hours. Chef would like to make sure that she can finish eating all bananas by that time.</p>

<p>Suppose Chef has an <i>eating speed</i> of <b>K</b> bananas per hour. Each hour, she will choose some pile of bananas. If this pile contains at least <b>K</b> bananas, then she will eat <b>K</b> bananas from it. Otherwise, she will simply eat the whole pile (and won't eat any more bananas during this hour).</p>

<p>Chef likes to eat slowly, but still wants to finish eating all the bananas on time. Therefore, she would like to choose the minimum <b>K</b> such that she is able to eat all the bananas in <b>H</b> hours. Help Chef find that value of <b>K</b>.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>H</b> denoting the number of piles and the number of hours after which Chef's mom will come home.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the minimum possible value of <b>K</b>.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li><b>N</b> ≤ <b>H</b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>A<sub>i</sub></b></b> ≤ 10<sup>9</sup> for each valid <b>i</b></li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (30 points):</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 100</li>
<li><b>A<sub>i</sub></b></b> ≤ 10<sup>3</sup> for each valid <b>i</b></li>
</ul>
</p>

<p><b>Subtask #2 (70 points):</b> original constraints</p>

<h3>Example</h3>
<pre><b>Input:</b>

3
3 3
1 2 3
3 4
1 2 3
4 5
4 3 2 7

<b>Output:</b>

3
2
4
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> With a speed of <b>K</b> = 3 bananas per hour, Chef can finish eating all the bananas in 3 hours. It's the minimum possible speed with which she can eat all the bananas in 3 hours. With a speed of 2 bananas per hour, she would take at least 4 hours and with a speed of 1 banana per hour, she would take at least 6 hours.</p>
