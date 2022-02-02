---
{"languages_supported":{"0":"NA"},"title":"VOTING","category":"NA","old_version":true,"problem_code":"VOTING","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
You have just begun his job with Educated Guessing Pollsters. An election is only weeks away and the company would like to get a general idea of how the voters feel about 
the candidates. They asked a (probably not) random subset of N voters to submit a ranking of the M candidates.
Say the candidates are numbered from 1 to M. 
A ranking is then a permutation of the set {1,2,...,M} listed as:
</p><p>
c_1 c_2 ... c_M
</p><p>
The list is such that the voter prefers candidate c_i to candidate c_j if i &gt; j. Your task is to determine a ranking R = r_1, r_2, ..., r_M such that the total number of disagreements with all voters who were polled is minimized.

</p><p>
More precisely, for a voter V we say the distance d(V,R) between voter V and ranking R is precisely the number of pairs (i,j) with 1 &lt;= i &lt; j &lt;= M such that V actually prefers candidate r_i over candidate r_j. Say there are N voters labeled V_1, V_2, ..., V_n. The task is then to find a ranking R such that the sum
</p><p>
d(V_1, R) + d(V_2, R) + ... + d(V_n, R) 
</p><p>
is minimized.

<h3>Input:</h3>
The first line of input consists of a single integer T     25 indicating the number of test cases to follow.

</p><p></p><p>
Each test case begins with two integers N and M on a single line where N represents the number of voters and M represents the number of candidates. The following N lines contain th
e rankings of the voters, one per line.

</p><p>
Each ranking is given as a permutation c_1, c_2, ..., c_M of the numbers 1,2,...,M where consecutive numbers are separated by a space. In this ranking, c_i is preferred over c_j by precisely when i &gt; j.

</p><p>
A blank line appears between test cases (including a blank line just before the first test case).

</p><p>
The bounds are 1 &lt;= N &lt;= 1000 and 1 &lt;= M &lt;= 15.

<h3>Output:</h3>
Each test case has a single line of output of the following form:

</p><p></p><p>
D: r_1 r_2 ... r_M

</p><p>
Where D is the sum of the distances between the optimum ranking and the input rankings and r_1, r_2, ..., r_M is a ranking of the same form as the input rankings that achieves this
 minimum distance. If there are multiple such orderings, then output the one that minimizes r_M. Among those that minimize r_M, you should output the one that minimizes r_{M-1} and  so on.

<h3>Example:</h3>
<h3>Input:</h3>
<pre>
2

2 3
1 2 3
1 2 3

4 3
1 2 3
2 1 3
1 2 3
3 2 1
</pre>

<h3>Output:</h3>
<pre>
0: 1 2 3
4: 2 1 3
</pre>

</p><p></p><p>
(note that in the second case that the ranking 1 2 3 also has total distance 4, but 2 1 3 is output based on the rules outlined in the output specification)</p>    