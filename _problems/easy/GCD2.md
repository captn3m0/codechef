---
{"languages_supported":{"0":"NA"},"title":"GCD2","category":"NA","old_version":true,"problem_code":"GCD2","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>

Frank explained its friend Felman the algorithm of Euclides to calculate the GCD 
of two numbers. Then Felman implements it algorithm 

<pre>
int gcd(int a, int b)
{
	if (b==0)
		return a;
	else
		return gcd(b,a%b);
}
</pre>
and it proposes to Frank that makes it 
but with a little integer and another integer that has up to 250 digits. </p><p>
Your task is to help Frank programming an efficient code for the challenge of Felman.


<h3>Input</h3>
</p><p>The first line of the input file contains a number representing the number of lines to follow.
Each line consists of two number A and B (0 &lt;= A &lt;= 40000 and A &lt;= B &lt; 10^250).

<h3>Output</h3>
</p><p>Print for each pair (A,B) in the input one integer representing the GCD of A and B.


<h3>Example</h3>

<pre>
<b>Input:</b>
2
2 6
10 11


<b>Output:</b>
2
1

</pre></p>    