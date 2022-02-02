---
{"languages_supported":{"0":"NA"},"title":"SNCK02","category":"NA","old_version":true,"problem_code":"SNCK02","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><pre><b>[Problem Idea : Varun Jalan and Yu Yiu Ho]</b></pre>
<p>In a small world not so far away, there is an ongoing war between two nations, A and B.  There are n (3     n     20) strongholds in this world, with roads between some of them.  Two strongholds are neighbors if there is a road between them, all roads are bidirectional.  The Chef is at war and he recently came up with a scheme that will help his country to never lose the war.  He would like to select a set of powerful strongholds (defined below) of minimum size and conquer those strongholds to ensure that his country will never be defeated.  A set of powerful strongholds is a set of strongholds S, such that</p>
<p><b>1</b>.For every stronghold y which does not belong to S, there is a road leading to it from a stronghold x which belongs to S.  This way, any stronghold not in S is    threatened    by a stronghold in S.</p>
<p><b>2</b>.S can properly defend (defined next) any attack from strongholds outside of S.</p>
<p><b>The mechanism for attacking and defending S is defined as follows:</b></p>
<p><b>i</b>.In an attack, each single stronghold y not belonging to S will select one of its neighbor z belonging to S (if any) to attack.  In this case y is an attacker of z.</p>
<p><b>ii</b>.Given the attack routes of all y not belonging to S, each stronghold x belonging to S may decide to defend one of its neighbors, say z,  in which case x is a defender of z.  Alternatively, x may decide to defend itself, in which case x is a defender of x.</p>
<p><b>iii</b>.The attack can be properly defended if there exists a defend route such that at every stronghold z belonging to S, there are at least as many defenders of z as attackers of z.</p>
<p>The rationale is that once the Chef occupies the strongholds in S, any other stronghold is immediately within reach of S by a single road (rule 1), and S will never be overwhelmed by attacks from outside (rule 2), and thus the Chef will never lose a stronghold in S.  In order to make the task of occupying S easier, it is best if S is as small as possible.  The Chef has given you the task to identify the smallest set of powerful strongholds so that he can proceed with his plan.</p>
<p> </p>
<h3>Input:</h3>
<p>There will be multiple test cases.  Each test case is a specification of the strongholds and roads.  For each test case, there will be one line containing n (3 &lt;= n &lt;= 20), the number of strongholds, and r (0 &lt;= r &lt;= 190), the number of roads.  Then, the next r lines each contains two integers x and y giving a road between stronghold x and y.  The strongholds are numbered from 0 to n-1.  There is a blank line following each test case. The last test case is followed by a line containing two zeros (after the blank line).</p>
<h3>Output:</h3>
<p>For each test case, output a single line of integers.  The first integer is |S|, represents size of the smallest possible set of powerful strongholds.  The next |S| integers give one such possible set of strongholds.  If there are multiple possible answers for S, output the lexicographically smallest one.</p>
<h3>Sample Input:</h3>
<pre>3 2
0 1
1 2

6 6
0 1
1 2
2 3
3 4
4 5
5 0

5 10
0 1
0 2
0 3
0 4
1 2
1 3
1 4
2 3
2 4
3 4

0 0
</pre>
<h3>Sample Output:</h3>
<pre>2 0 1
4 0 1 2 3
3 0 1 2
<br /><br /></pre>
<p></p>    