---
{"languages_supported":{"0":"NA"},"title":"COOKOFF","category":"NA","old_version":true,"problem_code":"COOKOFF","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Dave is having trouble choosing problems for the upcoming cook-off.
The admins will be mad at him if he doesn't select problems with a gradually increasing level of difficulty.
To make his task easier, Dave has assigned a difficulty rating to each problem he has written.
A difficulty gap is defined as the absolute difference in difficulty rating between 2 problems,
where there is no other problem with a difficulty rating between them.
For example, if problems are chosen with difficulty ratings of 4, 7, 13, and 19, then the difficulty
gaps are 3, 6, and 6.
Dave has already chosen 2 problems for the cook-off,
and wants to choose the remaining problems in a way that minimizes the largest difficulty gap.
</p>

<h3>Input</h3>
<p>Input begins with an integer T, the number of test cases.
Each test case begins with 4 integers N M C<sub>1</sub> C<sub>2</sub> on a line.
N is the number of problems to choose from (not including the two already chosen problems).
M is the number of problems that must be chosen (in addition to the two that have already been chosen).
C<sub>1</sub> and C<sub>2</sub> are the difficulty ratings of the 2 problems that have already been chosen.
Following this is a line with exactly N integers, giving the difficulty ratings of the remaining problems.
Again, the 2 already chosen problems are not included in the values of N and M.
A blank line separates each test case, including a blank line after the number of test cases.
</p>

<h3>Output</h3>
<p>For each test case, output on a single line the minimum possible value of the largest difficulty gap.</p>

<h3>Sample Input:</h3>
<pre>3

3 1 0 100
16 45 61

5 0 50 80
20 40 60 80 100

6 3 0 100
21 64 34 55 64 89
</pre>

<h3>Sample Output:</h3>
<pre>55
30
34
</pre>

<h3>Contsraints</h3>
T≤250<br />
0≤M≤N≤1000<br />
All difficulty ratings are between 0 and 1000000, inclusive.<br />    