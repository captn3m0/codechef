---
{"languages_supported":{"0":"NA"},"title":"LUCKYDAY","category":"NA","old_version":true,"problem_code":"LUCKYDAY","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Chef Ciel defined a sequence <b>S</b> as follows:<br /> <b>S</b>[1] = <b>A</b><br /> <b>S</b>[2] = <b>B</b><br /> <b>S</b>[<b>i</b>] = (<b>X</b>*<b>S</b>[<b>i</b>-1] + <b>Y</b>*<b>S</b>[<b>i</b>-2] + <b>Z</b>) mod <b>P</b>, for <b>i</b> &gt;= 3</p>
<p>Ciel considers <b>C</b> is a lucky number, and the <b>i</b>-th day is a lucky day if and only if <b>S</b>[<b>i</b>] = <b>C</b>. Ciel's restaurant may have special events in a lucky day.</p>
<p>By the way, your work is calculating the numbers of lucky days in intervals. That is, for each <b>Q</b> intervals [<b>L</b>[<b>i</b>], <b>R</b>[<b>i</b>]],  you should calculate the number of the integers <b>k</b> which satisfy <b>L</b>[<b>i</b>] &lt;= <b>k</b> &lt;= <b>R</b>[<b>i</b>] and <b>S</b>[<b>k</b>] = <b>C</b>.</p>
<h3>Input</h3>
<p>The first line contains an integer <b>T</b>, the number of test cases. Then <b>T</b> test cases follow. The first line for each test case has 8 integers <b>A</b>, <b>B</b>, <b>X</b>, <b>Y</b>, <b>Z</b>, <b>P</b>, <b>C</b> and <b>Q</b>. The next <b>Q</b> lines have 2 integers <b>L</b>[<b>i</b>] and <b>R</b>[<b>i</b>].</p>
<h3>Output</h3>
<p>For each interval, print the number of lucky days in the interval.</p>
<h3>Constraints</h3>
<p>1 &lt;= <b>T</b> &lt;= 2<br /> 2 &lt;= <b>P</b> &lt;= 10007<br /> <b>P</b> is a prime.<br /> 0 &lt;= <b>A</b>, <b>B</b>, <b>X</b>, <b>Y</b>, <b>Z</b>, <b>C</b> &lt; <b>P</b><br /> 1 &lt;= <b>Q</b> &lt;= 20000 (2*10^4)<br /> 1 &lt;= <b>L</b>[<b>i</b>] &lt;= <b>R</b>[<b>i</b>] &lt;= 1000000000000000000 (10^18)</p>
<h3>Sample Input</h3>
<pre>2
1 1 1 1 0 2 0 6
1 1
2 2
3 3
4 4
5 5
6 6
1 2 4 5 3 17 4 3
5 8
5 58
58 5858</pre>
<h3>Sample Output</h3>
<pre>0
0
1
0
0
1
0
4
362</pre>
<h3>Output details</h3>
<p>In the first case:<br /> <b>S</b>[1] = <b>A</b> = 1<br /> <b>S</b>[2] = <b>B</b> = 1<br /> <b>S</b>[3] = (<b>S</b>[2] + <b>S</b>[1]) mod 2 = (1 + 1) mod 2 = 0<br /> <b>S</b>[4] = (<b>S</b>[3] + <b>S</b>[2]) mod 2 = (0 + 1) mod 2 = 1<br /> <b>S</b>[5] = (<b>S</b>[4] + <b>S</b>[3]) mod 2 = (1 + 0) mod 2 = 1<br /> <b>S</b>[6] = (<b>S</b>[5] + <b>S</b>[4]) mod 2 = (1 + 1) mod 2 = 0<br /> <b>S</b>[7] = (<b>S</b>[6] + <b>S</b>[5]) mod 2 = (0 + 1) mod 2 = 1</p>
<p></p>    