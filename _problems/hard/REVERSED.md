---
{"languages_supported":{"0":"NA"},"title":"REVERSED","category":"NA","old_version":true,"problem_code":"REVERSED","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Given three numbers A, B and C all having N digits, little Johnny needs to write a program to permute the digits of the number C so that the new number is greater than both A and B.</p>
<p>This problem would be so easy if Johnny's teacher didn't require that Johnny's program must be correct in both the real world and <i>the reversed world</i>. What happens once the world is reversed? One thing Johnny knows for sure is that all the numbers are also reversed. The second thing, the "greater than"  relation becomes the 
"smaller than" relation. 
</p><p>For the sake of clarity, we will use a<sup>R</sup> to denote the number a in the reversed world (for instance, 113<sup>R</sup> = 311).
</p><p>Thus Johnny task is now permute the digits of C so that the new number is greater than both A and B. In additional, the reverse of the new number should be smaller than both A<sup>R</sup> and B<sup>R</sup>. If there are multiple possible solutions, Johnny needs to find the smallest one.</p>
<p>As usual, please help Little Johnny with his task!

</p><p>

<h3>Input</h3>
</p><p>The first line contains a number T (about 10) which is the number of the test cases. Each test case has the following form.
</p><p>The first line contains N (1 &lt;= N &lt;= 1000000).
</p><p>The second line contains the number A.
</p><p>The third line contains the number B.
</p><p>The fourth line contains the number C.
</p><p>Each test case's input is separated by a blank line.</p>

<h3>Output</h3>
<p>For each test case, print the solution in a single line. If there is no solution, print the number -1.

<h3>Example</h3>

<pre>
<b>Input:</b>
2

2
12
23
32

3
124
324
335

<b>Output:</b>
-1
353
</pre></p>    