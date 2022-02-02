---
{"languages_supported":{"0":"NA"},"title":"POST","category":"NA","old_version":true,"problem_code":"POST","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>It's the 1st of the month again, which means it's time for Dave to pay his bills. Dave needs to go to the post office to mail his rent cheque, and wants to take the shortest route possible.  Dave wonders how many different shortest routes he can take.</p>
<p>Dave lives at the southwest corner of town (0,0) and the post office is at the northeast corner of town (W,H). It takes Dave exactly one minute to move from (x, y) to (x, y+1), (x, y-1), (x+1, y) or (x-1, y). Dave cannot move further south or west than his house, nor can he move further north or east than the post office  (that is, Dave's x coordinate must stay between 0 and W, and his y coordinate must stay between 0 and H at all times). Additionally, there are N intersections that are being worked on by construction crews, and Dave must avoid these intersections.</p>
<p>The number of shortest routes may be very large, so print the result modulo 1000000037. If it is impossible for Dave to reach the post office, the answer is 0.</p>
<h3>Input:</h3>
<p>Input begins with an integer T, the number of test cases. Each test case begins with 3 integers W, H, N. N lines follow, each containing 2 integers (x<sub>i</sub>, y<sub>i</sub>), the coordinates of an intersection being worked on by a construction crew. Intersections are guaranteed to be unique, and neither (0,0) nor (W,H) will be under construction. A blank line separates each test case.</p>
<h3>Output:</h3>
<p>For each test case, output a line containing the number of shortest paths to the post office, modulo 1000000037.</p>
<h3>Sample input:</h3>
<pre>3

2 2 1
1 1

1 1 2
0 1
1 0

7 1 2
1 0
4 1
</pre>
<h3>Sample output:</h3>
<pre>2
0
6
</pre>
<h3>Constraints</h3>
<p>1&lt;=T&lt;=30<br /> 1&lt;=W,H&lt;=10<sup>7</sup><br /> 0&lt;=x<sub>i</sub>&lt;=W<br /> 0&lt;=y<sub>i</sub>&lt;=H<br /> 0&lt;=N&lt;=max(100,min(W,H,1000))</p>
<p></p>    