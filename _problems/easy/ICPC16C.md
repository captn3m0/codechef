---
{"category_name":"easy","problem_code":"ICPC16C","problem_name":"Watson and Digit Sums","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"18-10-2016","tags":{"0":"admin3"},"time":{"view_start_date":1477153800,"submit_start_date":1477153800,"visible_start_date":1477153800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Watson is going to play mind games with Sherlock. He gives an integer <b>d</b> to Sherlock.</p>
<p>Among all possible positive integers <b>N</b> having sum of digits <b>d</b>, consider the integer <b>N+1</b>, and find the minimum possible digit sum <b>N+1</b> can have.</p>

<p>
For example, if <b>d</b> = 9, then <b>N</b> could be 9, 18, 27, 36,711 and so on. However, if Sherlock chooses <b>N</b> = 9,  then sum of digits of <b>N + 1</b> <i>i.e.</i> 10 will be 1, which is the minimum possible.
</p>

<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b>, the number of test cases.</p>
<p>The only line of each test case consists of an integer <b>d</b>.</p>


<h3>Output</h3>
<p>For each test case output the required answer in one line.</p>


<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>d</b> ≤ <b>100000</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
5

<b>Output:</b>
6
</pre>

<h3>Explanation</h3>
<p>Possible value of <b>N</b> in given case are: 32,23,113,131 and so on, in each case digit sum of <b>(N+1)</b> would be <b>6</b>.</p>