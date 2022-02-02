---
{"languages_supported":{"0":"NA"},"title":"BOMBING","category":"NA","old_version":true,"problem_code":"BOMBING","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>There are n+1 (0 &lt; n &lt;= 10<sup>9</sup>, indexed 0..n) houses lying on a straight street. One day, they are bombed by an enemy. CodeChef is designing defence systems to protect the street from bombing. Each defense system can protect all houses in some interval, and a house can be protected by more than one system. A defence system can be also moved at any time. By agents, CodeChef knows the bombing schedule of the enemy. Each time they bomb a house and CodeChef wants to know how many systems are protecting that house.</p>

<h3>Input</h3>
<ul>
<li>The first line contains two integers n, m (0 &lt; m &lt;= 250 000).</li>
<li>Each of the m following lines follows one of these:<br />
<ul>
<li>P u v: CodeChef adds a defence system protecting all houses from the u-th house to the v-th house (0 &lt;= u &lt;= v &lt;= n). All systems will be indexed by order of appearance in the input, starting from 1.</li>
<li>M i d: CodeChef moves the i-th system by d houses, d &lt; 0 means moving nearer the 0-th house, and d &gt; 0 means moving away (that is, if the i-th system covers houses u through v, it is moved to instead cover houses w=u+d through t=v+d). After being moved the system will protect from the w-th house to t-th house where 0 &lt;= w &lt;= t &lt;= n.</li>
<li>B x: The enemy bombs the x-th house.</li>
</ul>
</li>
</ul>

<h3>Output</h3>
<p>For each time of bombing by the enemy (by the appearance in the input), output on a single line a number of systems protecting that house.</p>

<h3>Example</h3>

<pre>
<b>Input:</b>
7 5
P 1 4
P 3 5
B 3
M 2 1
B 3

<b>Output:</b>
2
1
</pre>    