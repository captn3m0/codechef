---
{"languages_supported":{"0":"NA"},"title":"TARPRACT","category":"NA","old_version":true,"problem_code":"TARPRACT","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Chef has recently taken up marksmanship, but he's not very good at it.
Chef has set up a number of targets in a line.
When Chef shoots at a target, he may hit the target, but he may instead hit
the target to the left, or the target to the right
(or if there is no such target, miss completely).
Chef knows the probability of his shot going straight, left, or right,
and wants to hit each target at least once using as few shots as possible.</p>
<p>Help Chef determine the expected number of shots required, provided an optimal strategy is followed.
Note that Chef may only shoot at targets, but may shoot at a target that's already been hit.</p>

<h3>Input</h3>
<p>Input will begin with an integer T, the number of test cases.
Each test case will consist of 4 integers:
N, the number of targets,
L, the probability of the shot veering to the left,
S, the probability of the shot going straight,
and R, the probability of the shot veering to the right.
L, S, and R are given as percents.
</p>

<h3>Output</h3>
<p>For each test case, output the expected number of shots to hit all targets, rounded to 6 decimal places.
</p>

<h3>Sample Input</h3>
<pre>4
3 25 50 25
3 10 10 80
5 25 50 25
8 30 35 35
</pre>

<h3>Sample Output</h3>
<pre>4.666667
10.361111
7.541667
13.107725

</pre>

<p>In the first example, Chef shoots at the center target until any 2 targets have been hit,
then he shoots at the remaining target.</p>

<h3>Constraints</h3>
<ul>
<li>T≤30</li>
<li>1≤N≤18</li>
<li>0&lt;L,S,R</li>
<li>L+S+R=100</li>
</ul>    