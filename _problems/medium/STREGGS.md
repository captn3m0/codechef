---
{"languages_supported":{"0":"NA"},"title":"STREGGS","category":"NA","old_version":true,"problem_code":"STREGGS","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Chef Ciel has <strong>N</strong> strange eggs. The <strong>i</strong>-th egg is broken by tapping exactly <strong>A<sub>i</sub></strong> times. Ciel needs to break <strong>K</strong> eggs as soon as possible for cooking a rice omelet. However she has been put in an uncomfortable situation. Someone shuffled the eggs! Ciel knows the values <strong>A<sub>i</sub></strong>, however she doesn't know which egg is which. She'd like to minimize the worst-case number of taps. What is the minimal number?</p>
<h3>Input</h3>
<p>The first line contains an integer <strong>T</strong>, the number of test cases. Then <strong>T</strong> test cases follow. The first line for each test case has 2 integers <strong>N</strong> and <strong>K</strong>. Then next line has <strong>N</strong> integers <strong>A</strong><sub>1</sub>, <strong>A</strong><sub>2</sub>, ..., <strong>A<sub>N</sub></strong>.</p>
<h3>Output</h3>
<p>For each test case, print the minimal number of taps for the worst-case.</p>
<h3>Constraints</h3>
<p>1 &lt;= <strong>T</strong> &lt;= 10<br /> 1 &lt;= <strong>K</strong> &lt;= <strong>N</strong> &lt;= 500<br /> 1 &lt;= <strong>A<sub>i</sub></strong> &lt;= 1000000 (10<sup>6</sup>)</p>
<h3>Sample Input</h3>
<pre>3
2 1
5 8
2 1
5 58
3 2
1 2 3</pre>
<h3>Sample Output</h3>
<pre>8
10
5</pre>
<h3>Output details</h3>
<p>In the first case, if a egg isn't broken after 5 taps, she should continue to tap the same egg.</p>
<p>In the second case, if a egg isn't broken after 5 taps, she should tap another egg 5 times.</p>
<p></p>    