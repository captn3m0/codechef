---
{"languages_supported":{"0":"NA"},"title":"HBEAR","category":"NA","old_version":true,"problem_code":"HBEAR","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Little Bear had just come back from school. He was very hungry that time and wanted at least K units of honey to satisfy his hunger. He immediately went to a rectangular field of size N x M to collect some honey. He wanted to collect honey only
in a special sub-rectangle which has size S x T where S&lt;=A and T&lt;=B, for some fixed A and B. He has Q queries, each query contains A, B. For each query, he wanted to know how many special sub-rectangles contain at least K units of honey. 
<h3>Input</h3>
</p><p>The first line of the input contains integers N, M  and K(1&lt;=N, M&lt;=300, 1&lt;=K&lt;=N*M). 
The next N lines contain M characters (either 'H' or '.'). 'H' means there is honey in that cell, while '.' means there is no honey in that cell.
The next line contains an integer Q (1&lt;=Q&lt;=100 000).
The next Q lines contain integers A and B (1&lt;=A&lt;=N , 1&lt;=B&lt;=M).


<h3>Output</h3>
</p><p>The output contains Q lines, each line contains the number of special sub-rectangles which satisfy the requirement. (The amount of honey is at least K inside the special sub-rectangle)

<h3>Example</h3>

<pre>
<b>Input:</b>
<code>
5 5 4
H.H..
..H..
H...H
HHHH.
HH..H
2
1 1
2 3
</code>
<b>Output:</b>

0
4

</pre>

<b>Explanation for 2nd query</b>
<pre>
<code>
#: means the chosen cell
The possibilities are:
1. Size 2 x 3
H.H..
..H..
###.H
###H.
HH..H

2. Size 2 x 3
H.H..
..H..
H...H
###H.
###.H

3. Size 2 x 3
H.H..
..H..
H...H
H###.
H###H

4. Size 2 x 2
H.H..
..H..
H...H
##HH.
##..H
</code>
</pre>
Note that in 2nd query, the possible special sub-rectangles are of size 1x1, 1x2, 1x3, 2x1, 2x2, 2x3. Also note that 2x3 is different from 3x2</p>    