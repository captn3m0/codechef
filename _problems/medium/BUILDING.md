---
{"languages_supported":{"0":"NA"},"title":"BUILDING","category":"NA","old_version":true,"problem_code":"BUILDING","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>CodeChef Inc. owns a rectangular piece of land sized w×h.  Its edges are parallel to the axes, with the bottom-left corner at (0,0) and top-right corner at (w,h).  They intend to build a new head office within this land.  The new office will be a square whose center is located at a point with integer coordinates, and whose diagonals are parallel to the axes and have length 2*d.</p>
<p>Unfortunately, there are n barricades on the land, some of which may need to be removed in order for the office to be built.  The (i)th barricade is located at (X<sub>i</sub>, Y<sub>i</sub>) and will cost C<sub>i</sub> to remove.  The office may only be built once all points it covers (including the boundaries) are free of barricades.</p>
<h3>Request</h3>
<p>Help them find the minimum total cost of barricade removal.</p>
<h3>Input</h3>
<p> </p>
<ul>
<li>The first line contains the integers w,h,d,n, respectively.</li>
<li>Within following n lines, the i-th line contains the integers X<sub>i</sub>,Y<sub>i</sub>,C<sub>i</sub> respectively.</li>
</ul>
<p> </p>
<p> </p>
<h3>Output</h3>
<p>Output on a single line an integer which is the minimum cost found.</p>
<h3>Example</h3>
<p><b>Input:</b></p>
<pre>4 3 1 4<br />1 3 5<br />3 3 4<br />2 2 1<br />2 1 2<br /></pre>
<p><b>Output:</b></p>
<pre>2<br /></pre>
<h3>Limitations</h3>
<p> </p>
<ul>
<li>2   &lt;= w,h   &lt;= 1 000</li>
<li>0 &lt;=  n   &lt;= 200 000</li>
<li>2   &lt;=2d   &lt;= min(w,h)</li>
<li>0 &lt; C<sub>i</sub> &lt;= 10 000</li>
<li>All the listed barricades are inside or on the boundaries of the CodeChef   s land.</li>
<li>There is at most one barricade at each point.</li>
<p> </p></ul>    