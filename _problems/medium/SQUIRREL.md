---
{"languages_supported":{"0":"NA"},"title":"SQUIRREL","category":"NA","old_version":true,"problem_code":"SQUIRREL","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>There are n squirrel(s) waiting below the feet of m chestnut tree(s). The first chestnut of the i-th tree will fall right after T<sub>i</sub> second(s), and one more every P<sub>i</sub> second(s) after that. The “big mama” of squirrels wants them to bring their nest no less than k chestnuts to avoid the big storm coming, as fast as possible! So they are discussing to wait below which trees to take enough chestnuts in the shortest time. Time to move to the positions is zero, and the squirrels move nowhere after that.</p>
<h3>Request</h3>
<p>Calculate the shortest time (how many seconds more) the squirrels can take enough chestnuts.</p>
<h3>Input</h3>
<p> </p>
<ul>
<li>The first line contains an integer t, the number of test cases, for each:   
<ul>
<li>The first line contains the integers m,n,k, respectively.</li>
<li>The second line contains the integers T<sub>i</sub> (i=1..m), respectively.</li>
<li>The third line contains the integers P<sub>i</sub> (i=1..m), respectively.</li>
</ul>
</li>
<b><i>(Each integer on a same line is separated by at least one space character, there is no added line between test cases)</i></b> 
</ul>
<p> </p>
<h3>Output</h3>
<p>For each test cases, output in a single line an integer which is the shortest time calculated.</p>
<h3>Example</h3>
<p><b>Input:</b></p>
<pre>2
3 2 5
5 1 2
1 2 1
3 2 5
5 1 2
1 1 1
</pre>
<p><b>Output:</b></p>
<pre>4
3
</pre>
<p><i>* Explain (case #1): 2 squirrels waiting below the trees 2 and 3.</i></p>
<h3>Limitations</h3>
<ul>
<li>0&lt;t≤20</li>
<li>0&lt;m,n≤10,000</li>
<li>0&lt;k≤10<sup>7</sup></li>
<li>0&lt;T<sub>i</sub>,P<sub>i</sub>≤100</li>
</ul>
<p></p>    