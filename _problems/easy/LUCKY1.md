---
{"languages_supported":{"0":"NA"},"title":"LUCKY1","category":"NA","old_version":true,"problem_code":"LUCKY1","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p> Chef loves lucky numbers. Everybody knows that lucky numbers are positive integers whose decimal representation contains only the lucky digits <b>4</b> and <b>7</b>. For example, numbers <b>47</b>, <b>744</b>, <b>4</b> are lucky and <b>5</b>, <b>17</b>, <b>467</b> are not.

</p><p> Let <b>F<sub>d</sub>(x)</b> equals to the number of digits <b>d</b> in decimal representation of the positive integer <b>x</b>. Chef interests only in functions <b>F<sub>4</sub>(x)</b> and <b>F<sub>7</sub>(x)</b>. For the given positive integer <b>N</b> he wants to know the total number of different pairs <b>(L; R)</b> such that <b> F<sub>4</sub>(L) + F<sub>4</sub>(L + 1) + ... + F<sub>4</sub>(R)</b> equals to <b> F<sub>7</sub>(L) + F<sub>7</sub>(L + 1) + ... + F<sub>7</sub>(R)</b> and <b>1 ≤  L ≤ R ≤ N</b>.

<h3>Input</h3>
</p><p> The first line contains a single positive integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains a positive integer <b>N </b>.

<h3>Output</h3>
</p><p> For each test case, output a single line containing the answer for the corresponding test case.

<h3>Constraints</h3>
</p><p>
1 ≤ <b>T</b> ≤ 100000
</p><p>
1 ≤ <b>N</b> ≤ 100000

<h3>Example</h3>

<pre>
<b>Input:</b>
3
3
10
100

<b>Output:</b>
6
31
1266
</pre></p>    