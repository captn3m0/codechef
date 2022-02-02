---
{"languages_supported":{"0":"NA"},"title":"RSRECIPE","category":"NA","old_version":true,"problem_code":"RSRECIPE","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Chef has had a recipe. He had written it as a sequence of <b>N</b> integer numbers <b>A[1], A[2], ..., A[N]</b>. To be on the safe side, he decided to write out <b>M</b> triples of numbers, where <b>i</b>-th triple is composed of three numbers <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> and <b>Z<sub>i</sub></b>. It means that the sum of numbers in the recipe from <b>X<sub>i</sub></b>-th to <b>Y<sub>i</sub></b>-th is equal to <b>Z<sub>i</sub></b>. In other words, <b>A[X<sub>i</sub>] +  A[X<sub>i</sub> + 1] + ... + A[Y<sub>i</sub>] = Z<sub>i</sub></b>. Unfortunately, the recipe has been recently lost. So Chef needs to restore his recipe using these <b>M</b> triples. Your task is to help him.

<h3>Input</h3>
</p><p>The first line contains two space separated integer numbers <b>N</b> and <b>M</b>.<br />
Then <b>M</b> lines follow. Each line contains three space separated integer numbers <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> and <b>Z<sub>i</sub></b>. It means that the sum of numbers in the recipe from <b>X<sub>i</sub></b>-th to <b>Y<sub>i</sub></b>-th is equal to <b>Z<sub>i</sub></b>.

<h3>Output</h3>
</p><p>If there is a solution output <b>N</b> space separated integer numbers - the sequence that you have restored. If there are several solutions you can output any of them. However, any number in the output should be no more than 10<sup>14</sup> by its absolute value. If it is impossible to restore the sequence output "-1" without quotes.

<h3>Constraints</h3>
<ul>
<li>2 ≤ <b>N</b> ≤ 65536<br /></li>
<li>1 ≤ <b>M</b> ≤ 200000<br /></li>
<li>1 ≤ <b>X<sub>i</sub></b> ≤ <b>Y<sub>i</sub></b> ≤ <b>N</b><br /></li>
<li>|<b>Z<sub>i</sub></b>| ≤ 1000000000 (10<sup>9</sup>)</li>
<li>If It is possible to restore the sequence then there is way to do this such that every number in the restored sequence is in range [-10000; 10000]</li><br />
</ul>

<h3>Example</h3>

<pre>
<b>Input 1:</b>
4 4
1 2 3
2 3 1
3 4 -2
1 4 1                                                                            

<b>Output 1:</b>
1 2 -1 -1

<b>Input 2:</b>
5 3
1 3 4
4 5 6
1 5 9 

<b>Output 2:</b>
-1
</pre>

<h3>Explanation</h3>
In the first test case the answer is not unique. Possible answers are also <b>{0, 3, -2, 0}</b>, <b>{2, 1, 0, -2}</b> and many others.
<br /><br />
In the second test case first two conditions imply <b>A[1] + A[2] + A[3] = 4</b> and <b>A[4] + A[5] = 6</b> and hence <b>A[1] + A[2] + A[3] + A[4] + A[5] = (A[1] + A[2] + A[3]) + (A[4] + A[5]) = 4 + 6 = 10</b>. And it contradicts to the third condition. Hence it is impossible to restore the recipe.</p>    