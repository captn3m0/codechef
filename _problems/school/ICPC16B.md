---
{"category_name":"school","problem_code":"ICPC16B","problem_name":"Beautiful Arrays","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"18-10-2016","tags":{"0":"admin3"},"time":{"view_start_date":1477153800,"submit_start_date":1477153800,"visible_start_date":1477153800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>An array <b>a</b> is called <i>beautiful</i> if for every pair of numbers <b>a<sub>i</sub>, a<sub>j</sub></b>, (<b>i ≠ j</b>), there exists an <b>a<sub>k</sub></b> such that <b>a<sub>k</sub> = a<sub>i</sub> * a<sub>j</sub></b>. Note that <b>k</b> can be equal to <b>i</b> or <b>j</b> too. </b>

<p>Find out whether the given array <b>a</b> is <i>beautiful</i> or not!</p>

<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> denoting the number of test cases. <b>T</b> test cases follow.</p>
<p>First line of each test case contains an integer <b>n</b> denoting number of elements in <b>a</b>.</p>
<p>Next line contains <b>n</b> space separated integers denoting the array <b>a</b>.</p>


<h3>Output</h3>
<p>For each test case, output a single line containing "yes" or "no" (without quotes) corresponding to the answer of the problem.</p>


<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10<sup>6</sup></b></li>
<li><b>1 ≤ n ≤ 10<sup>5</sup></b></li>
<li>Sum of <b>n</b> over all the test cases ≤ <b>10<sup>6</sup></b></li>
<li><b>-10<sup>9</sup> ≤ a<sub>i</sub> ≤ 10<sup>9</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input</b>
3
2
0 1
2
1 2
2
5 6

<b>Output:</b>
yes
yes
no
</pre>

<h3>Explanation</h3>
<p><b>Test case 1.</b> If you multiply 0 with 1, you get 0, we see that <b>a<sub>0</sub> = 0</b>. So, the array is <i>beautiful</i>.</p>
<p><b>Test case 3.</b> If you multiply 5 with 6, you get 30, there does not exist an <b>k</b> such that <b>a<sub>k</sub> = 30</b>. So, the array is not <i>beautiful</i>.</p>
