---
{"category_name":"easy","problem_code":"STDDEV","problem_name":"Obtain Desired Standard Deviation","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"30-10-2017","tags":{"0":"acmind17","1":"ad","2":"admin2","3":"simple"},"time":{"view_start_date":1509900600,"submit_start_date":1509900600,"visible_start_date":1509900600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Given two integers <b>N</b> and <b>σ</b>, find any array <b>a</b> with length <b>N</b> such that the standard deviation of the elements of the array is equal to <b>σ</b>. The standard deviation is given by the following formula:

<img height="100"  src="https://codechef_shared.s3.amazonaws.com/download/upload/ACMIND17/sd_compressed.jpg"/>
</p>

<p>For each <b>1 ≤ i ≤ N</b>, <b>a<sub>i</sub></b> may be any real number with <b>|a<sub>i</sub>| ≤ 10<sup>8</sup></b>.</p>

<p>If there is more than one possible answer, you may output any one of them. If there is no such array, output -1 instead.</p>

<p>Please note that the denominator only contains <b>N</b>. (In the usual formula for standard deviation, <b>N-1</b> is used. That's not the definition we're using here.)</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of the test cases follows.</p>
<p>The first and only line of each test case contains two space separated integers <b>N, σ</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing <b>N</b> space-separated real numbers denoting the elements of the array <b>a</b>.</p>

<p>If it is not possible to construct such an array, output -1 instead. If there is more than one possible solution, you may output any one.</p>

<p>Your answer will be considered correct if the standard deviation of the printed array doesn't differ from σ by more than 10<sup>-2</sup> in absolute value.</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ N ≤ 10<sup>5</sup></b></li>
<li><b>0 ≤ σ ≤ 10<sup>5</sup></b></li>
<li>Sum of <b>N</b> over all test cases won't exceed <b>10<sup>6</sup></b></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
3
2 2
3 3
4 0

<b>Output</b>
2 6
3.5 2 8.979967
3 3 3 3
</pre>