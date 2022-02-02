---
{"category_name":"easy","problem_code":"ZUBAPCNT","problem_name":"A - Appearance Count","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"zubaerkh","problem_tester":null,"date_added":"13-11-2017","tags":{"0":"zubaerkh"},"time":{"view_start_date":1517085000,"submit_start_date":1517085000,"visible_start_date":1517085000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You will be given <b>m</b> strings. For each of those strings, you need to count the total number of appearances of that string as substrings in all possible strings of length <b>n</b> containing only lower case English letters. 
</p>
<p>
A string may appear in a string multiple times. Also, these appearances may overlap. All these must be counted separately. For example, <i>aa</i> appears thrice in the string <i>aaacaa</i>: <i><b>aa</b>acaa</i>, <i>a<b>aa</b>caa</i> and <i>aaac<b>aa</b></i>.
</p>


<h3>Input</h3>
<ul>
<li>The first line contains one integer, <b>T</b>, the number of test cases. The description of each test case follows:</li>

<li>The first line of each test case will contain two integers <b>n</b> and <b>m</b>.</li>

<li>The i<sup>th</sup> of the next <b>m</b> lines will have one string in each line. All the strings will consist only of lower case English letters.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, print <b>"Case x:"</b> (without quotes. <b>x</b> is the test case number, 1-indexed) in the first line.</li>

<li>Then print <b>m</b> lines. The i<sup>th</sup> line should contain the number of appearances of the i<sup>th</sup> string in all possible strings of length <b>n</b>. As the numbers can be very large, print the answers modulo <b>10<sup>9</sup>+7</b></li>.
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>n</b> ≤ 100000</li>
<li>1 ≤ <b>m</b> ≤ 1000 </li>
<li>1 ≤ Length of every string in input</li>
<li>1 ≤ Total length of all strings in one test case ≤ 5 * 10<sup>5</sup></li>
<li>1 ≤ Total length of all strings in one test file ≤ 5 * 10<sup>6</sup></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
2 1
aa
2 1
d
12 3
cdmn
qweewef
qs

<b>Output:</b>
Case 1:
1
Case 2:
52
Case 3:
443568031
71288256
41317270
</pre>

<h3>Explanation:</h3>
<p><b>Testcase 1</b>: <i>aa</i> is the only string of length 2 which contains <i>aa</i> as a substring. And it occurs only once. Hence the answer is 1.</p>
