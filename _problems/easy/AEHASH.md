---
{"languages_supported":{"0":"NA"},"title":"AEHASH","category":"NA","old_version":true,"problem_code":"AEHASH","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Chef Ash and Chef Elsh invented a new hash function! Their hash function will map a binary string consisting of characters 'A' and 'E' into an integer called the hash value of the string.</p>

<p>The pseudocode of the hash function is as below. hash(S) is the hash value of a binary string S. |S| denotes the length of S.</p>
<p>
<pre>function hash(S):
	result = number of characters 'A' in S
	if |S| &gt; 1:
		(S1, S2) = split(S)
		result = result + max(hash(S1), hash(S2))
	end if
	return result
end function</pre>
</p>

<p>The function split in the above pseudocode takes a binary string S as the parameter and returns a pair of binary strings (S1, S2) such that:</p>
<p>
<ul>
<li>|S1| &lt;= |S2|.</li>
<li>The difference of |S1| and |S2| is at most 1.</li>
<li>The concatenation of S1 and S2 (in that order) is S.</li>
</ul>
</p>
<p>For example, split("AAAEE") returns ("AA", "AEE"), whereas split("AEAEAE") returns ("AEA", "EAE").</p>

<p>You doubt that this hash function have good distribution of different hash values. So, you wonder how many different binary strings consisting of A 'A' characters and E 'E' characters that have hash value of V.</p>

<h3>Input</h3>
<p>The first line contains a single integer T, the number of test cases. T test cases follow. Each testcase consists of a single line consisting of three integers A, E, and V.</p>

<h3>Output</h3>
<p>For each test case, output a single line consisting the number of different binary strings satisfying the rule, modulo 1000000007.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ T ≤ 1000</li>
<li>0 ≤ A ≤ 50</li>
<li>0 ≤ E ≤ 50</li>
<li>0 ≤ V ≤ 1000</li>
</ul>

<h3>Example</h3>

<pre>
<b>Input:</b>
4
0 0 0
1 0 1
3 2 6
4 2 8

<b>Output:</b>
1
1
3
4
</pre>

<h3>Explanation</h3>
For the last test case, the solutions are:
<ul>
<li>AAEAAE</li>
<li>AEAAAE</li>
<li>AAEAEA</li>
<li>AEAAEA</li>
</ul>    