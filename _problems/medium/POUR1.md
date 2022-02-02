---
{"languages_supported":{"0":"NA"},"title":"POUR1","category":"NA","old_version":true,"problem_code":"POUR1","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>
<p></p><p align=justify><br />
Given two vessels, one of which can accommodate <i>a</i> liters of water and the other which can accommodate <i>b</i> liters of water, determine the number of steps required to obtain exactly <i>c</i> liters of water in one of the vessels.</p>
<p></p><p align=justify><br />
At the beginning both vessels are empty. The following operations are counted as 'steps':</p>
<div align=left>
<ul>
<li>emptying a vessel,
</li><li>filling a vessel,
</li><li>pouring water from one vessel to the other, without spilling, until one of the vessels is either full or empty.
</li></ul>
</div>

<p><h3>Input</h3>
</p><p></p><p align=justify><br />
An integer <i>t</i>, 1&lt;=<i>t</i>&lt;=100, denoting the number of test cases, followed by <i>t</i> sets of input data, each consisting of three positive integers a (the number of liters the first container can hold), b (the number of liters the second container can hold), and c (the final amount of liters of water one vessel should contain), not larger than 40000, given in separate lines.</p>
<p><h3>Output</h3>
</p><p></p><p align=justify><br />
For each set of input data, output the minimum number of steps required to obtain c liters, or -1 if this is impossible.
</p>
<p><h3>Example</h3>
<div align=left>
Sample input:</div></p>
<pre>2
5
2
3
2
3
4
</pre>
<p>Sample output:</p>
<pre>
2
-1
</pre>
    