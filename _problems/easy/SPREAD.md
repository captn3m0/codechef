---
{"languages_supported":{"0":"NA"},"title":"SPREAD","category":"NA","old_version":true,"problem_code":"SPREAD","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Bob has n heap(s) of gravel (initially there are exactly c piece(s) in each). He wants to do m operation(s) with that heaps, each maybe:
<ul>
<li>adding pieces of gravel onto the heaps from u to v, exactly k pieces for each,</li>
<li>or querying "how many pieces of gravel are there in the heap p now?".</li>
</ul>
</p>

<h3>Request</h3>
<p>Help Bob do operations of the second type.</p>

<h3>Input</h3>
<p>
<ul>
<li>The first line contains the integers n,m,c, respectively.</li>
<li>m following lines, each forms:
<ul>
<li><b>S u v k</b> to describe an operation of the first type.</li>
<li><b>Q p</b> to describe an operation of the second type.</li>
</ul>
</li><br />
<b><em>(Each integer on a same line, or between the characters S, Q and the integers is separated by at least one space character)</em></b>
</ul></p>


<h3>Output</h3>
<p>For each operation of the second type, output (on a single line) an integer answering to the respective query (follows the respective Input order).</p>

<h3>Example</h3>

<b>Input:</b>
<pre>
7 5 0
Q 7
S 1 7 1
Q 3
S 1 3 1
Q 3
</pre>

<b>Output:</b>
<pre>
0
1
2
</pre>

<h3>Limitations</h3>
<ul>
<li>0&lt;n≤10<sup>6</sup></li>
<li>0&lt;m≤250 000</li>
<li>0&lt;u≤v≤n</li>
<li>0≤c,k≤10<sup>9</sup></li>
<li>0&lt;p≤n</li></ul>    