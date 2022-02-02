---
{"languages_supported":{"0":"NA"},"title":"DCE03","category":"NA","old_version":true,"problem_code":"DCE03","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>The captain of TITANIC is a mathematics freak. He has recently been given a problem that he is unable to solve. And he has asked your help to solve it.<br />

There are n numbers in a given expression.<br />

X1 X2 X3 ....  Xn<br />

What is the number of ways to put parenthesis in the expression.<br />

For n=4, the different ways are <br />
<pre>
(((x1.x2).x3).x4)
((x1.x2).(x3.x4))
(x1.((x2.x3).x4))
(x1.(x2.(x3.x4)))
((x1.(x2.x3)).x4)
</pre>

Hence the required answer would be 5.<br />


<h3>Input</h3>
</p><p>The first line contains the number of test cases t &lt;=10.
Each of the next t lines contain single integers &lt;=1000 denoting n.


<h3>Output</h3>
</p><p>Display t lines containg the number of ways to put parenthesis in the expression of length n modulo 10000.

<h3>Example</h3>

<pre>
<b>Input:</b>
2
4
5


<b>Output:</b>
5
14
</pre></p>    