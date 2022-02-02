---
{"category_name":"easy","problem_code":"PIZPAR","problem_name":"Pizza Party","languages_supported":{"0":"C","1":"CPP 4.3.2","2":"CPP 6.3","3":"CPP14","4":"JAVA","5":"PYTH","6":"PYTH 3.5"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"yogesh01","problem_tester":null,"date_added":"9-11-2017","tags":{"0":"yogesh01"},"time":{"view_start_date":1510331400,"submit_start_date":1510331400,"visible_start_date":1510331400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef is planning a huge party for all of you and has ordered <b>M</b> pizzas. He wants to invite as many people to the party. However, he knows that everyone will have exactly one slice of a pizza (regardless of the size) and he wants to make sure that he has enough pizza slices. </p>
<p>Chef is very lazy and will only make a total of <b>N</b> straight cuts among all the pizzas. Each pizza is also of different size and to avoid the slices getting too small the chef can only make a max of A<sub>i</sub> cuts to the i<sup>th</sup> pizza. He wants to maximize the number of slices of pizza. Since chef is busy with preparing other aspects of the party he wants you to find out the maximum number of slices he can get following the constraints. </p>
<p>If a pizza is not cut at all then it is considered as 1 slice.  </p>

<h3>Input</h3>
<p>First line contains two integers M and N.
The second line of input contains the array A.</p>

<h3>Output</h3>
<p>Output a single integer - the maximum number of slices chef can get.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>M</b> ≤ <b>2*10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>N,A<sub>i</sub></b> ≤ <b>2*10<sup>5</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1: </b><b>1</b> ≤ <b>M,N</b> ≤ <b>100</b> - 10 points </li> 
<li><b>Subtask 2: </b><b>1</b> ≤ <b>N</b> ≤ <b>100</b>, 
<b>1</b> ≤ <b>M</b> ≤ <b>10<sup>5</sup></b> - 20 points</li>
<li><b>Subtask 3: </b>Original Constraints - 70 points</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
5 10
1 2 3 4 5
<b>Output:</b>
31
</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1. One of the optimal way to cut would be to do {0, 1,  0, 4, 5} cuts. 