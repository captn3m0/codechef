---
{"languages_supported":{"0":"NA"},"title":"SINSUMQ","category":"NA","old_version":true,"problem_code":"SINSUMQ","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p> You are given a sequence of integers <b>A<sub>0</sub>, A<sub>1</sub>, ..., A<sub>N-1</sub></b>. Initially <b>A<sub>i</sub>=i</b> for all <b>i</b>. You need to perform some strange queries with it. Each query has the form <b>"L R D"</b> where <b>0 &lt;= L &lt;= R &lt; N</b> and <b>D</b> is an integer. If <b>D=0</b> then you need to find the sum of sines of the numbers <b>A<sub>L</sub>, A<sub>L+1</sub>, ..., A<sub>R</sub></b> that is <b>sin A<sub>L</sub> + ... + sin A<sub>R</sub></b>. Otherwise you need to add <b>D</b> to the numbers <b>A<sub>L</sub>, A<sub>L+1</sub>, ..., A<sub>R</sub></b>. </p> 

<h3>Input</h3>

<p> The first line contains two positive integers <b>N</b> and <b>Q</b>. Here, <b>N &lt;= 10<sup>9</sup></b> is the length of the initial sequence and <b>Q &lt;= 100000</b> is the number of queries you need to perform with it. The next <b>Q</b> lines describe queries, one per line. The <b>i</b>'th such line contains three integers <b>L</b>, <b>R</b> and <b>D</b>. Here <b>0 &lt;= L &lt;= R &lt; N</b> and <b>-10000 &lt;= D &lt;= 10000</b>. </p>

<h3>Output</h3>

<p> The output consists of answers for all queries where <b>D=0</b>. For each such query you must produce a line with the corresponding sines sum. Answers within an absolute error of  <b>10<sup>-6</sup></b> will be accepted. </p>

<h3>Example</h3>

<pre>
<b>Input:</b>
5 6
0 4 0
0 2 1
3 4 2
0 4 0
2 3 -1
1 4 0

<b>Output:</b>
1.1350859
0.65354865
0.782376860

</pre>    