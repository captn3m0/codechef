---
{"languages_supported":{"0":"NA"},"title":"ECODE","category":"NA","old_version":true,"problem_code":"ECODE","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Professor X got lost in a maze of an ancient tomb in Egypt. While he was finding the way to escape, he got a message of the tomb builders on the old walls:</p>
<p> </p>
<ul>
<li>The code to open the exit door is the sequence C of n digits formed c<sub>1</sub>..c<sub>n</sub> (c<sub>i</sub>∈[0,9] ). </li>
<li>For every sequence C, combining with the given integers A,B, call:<br /> 
<ul>
<li>h<sub>0</sub>=0</li>
<li>h<sub>i</sub>=(h<sub>i-1</sub>×A+c<sub>i</sub>)  mod B</li>
</ul>
</li>
<li>The smallest sequence C (in lexicological order) satisfying h<sub>n</sub>=G (where G is a given integer) is the exit code which professor X needs.     
<ul>
<li>1≤n≤12</li>
<li>10≤A,B≤10<sup>15</sup></li>
<li>0≤G&lt;B</li>
<li>The input satisfies that the answer always exist.</li>
</ul>
<ul>
</ul>
</li>
<h3>Request</h3>
Give the integers n,A,B,G, help professor X find out the exit code!
<h3>Input</h3>
<p>One and only line contains the integers n,A,B,G, respectively, each of them is separated with at least one space character.</p>
<h3>Output</h3>
<p>Output in a single line the exit code found.</p>
<h3>Example</h3>
<b>Input:</b>
<pre>3 11 111 92
</pre>
<b>Output:</b>
<pre>084
</pre>
<h3>Limitations</h3>
<div>
<div>* 1&lt;=n&lt;=12</div>
<div>* 10&lt;=A,B&lt;=1015</div>
<div>* 0&lt;=G&lt;B</div>
<div>* The input satisfies that the answer always exist.<br /><br /><br /></div>
<div></div>
</div>
</ul>    