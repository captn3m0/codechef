---
{"category_name":"medium","problem_code":"ZUBWALLT","problem_name":"Organize The Wallet","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"zubaerkh","problem_tester":null,"date_added":"8-11-2017","tags":{"0":"dp","1":"gwr17rol","2":"medium","3":"zubaerkh"},"time":{"view_start_date":1516482000,"submit_start_date":1516482000,"visible_start_date":1516482000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Ranju has many currency notes in his wallet. There are notes of denominations <b>10, 20, 50, 100, 200, 500</b>, and <b>2000</b> rupees in his wallet right now, but the notes are all messed up. He wants to organize his wallet so that all the notes of each denomination are together. <b>The notes don't necessarily need to be in sorted order.</b>
</p>

<p>
In each step, Ranju can take a note and insert this note at any place among the remaining notes. Please determine the minimum number of steps he requires to achieve his goal. 
</p>

<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/ACM17GWR/ZUBWALLT.png" height="250"/>
</p>

<h3>Input</h3>
<p>
The first line of the input is the number of test cases, <b>T</b>. Description of each test case is given below.
</p>
<p>
The first line of each testcase contains a single integer, <b>N</b>, the number of notes in the wallet.</p>
<p>The next line contains <b>N</b> integers: <b>A<sub>1</sub>, A<sub>2</sub>, A<sub>3</sub>, ... , A<sub>N</sub></b> which represent the notes in the wallet at the initial state.
</p>

<h3>Output</h3>
<p>For each test case, print the minimum number of steps required to organize the wallet, in a new line.
</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 5 </b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b> 10<sup>5</sup> </b></li>
<li>Each of <b>A<sub>i</sub></b> will be from the set <b>{10, 20, 50, 100, 200, 500, 2000}</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
6
500 500 100 200 200 100
9
100 200 200 500 100 100 500 100 100
</tt>
<b>Output:</b>
<tt>1
2
</tt></pre>
<h3>Explanation</h3>
<p><b>Testcase 1</b>: We can move the last 100 rupee note and insert it to the right of 1<sup>st</sup> 100 rupee note. The result would be 500 500 100 100 200 200.
</p>

<p><b>Testcase 2</b>: One possible way would be the following:
<ul>
	<li>In the first step, we can move the first note, which has denomination 100 next to 7th note, which has denomination 500. The result will be : 200 200 500 100 100 500 100 100 100.</li>
	<li>In the second step, we can move the 6th note, which has denomination 500 to the right of the 3rd note, which has denomination 500. The result will be 200 200 500 500 100 100 100 100 100</li>
</ul>
</p>