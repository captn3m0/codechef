---
{"languages_supported":{"0":"NA"},"title":"LUCKY5","category":"NA","old_version":true,"problem_code":"LUCKY5","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p> Chef loves lucky numbers. Everybody knows that lucky numbers are positive integers whose decimal representation contains only the lucky digits <b>4</b> and <b>7</b>. For example, numbers <b>47</b>, <b>744</b>, <b>4</b> are lucky and <b>5</b>, <b>17</b>, <b>467</b> are not.

</p><p> Chef has a positive integer <b>N</b>. He can apply any of the following operations as many times as he want in any order:

<ul>
<li> Add <b>1</b> to the number <b>N</b>.
</li><li> Take some digit of <b>N</b> and replace it by any non-zero digit.
</li><li> Add any non-zero leading digit to <b>N</b>.
</li></ul>

</p><p> Find the minimum number of operations that is needed for changing <b>N</b> to the lucky number.

<h3>Input</h3>
</p><p>The first line contains a single positive integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains a positive integer <b>N</b> without leading zeros. 

<h3>Output</h3>
</p><p>For each <b>T</b> test cases print one integer, the minimum number of operations that is needed for changing <b>N</b> to the lucky number.

<h3>Constraints</h3>
</p><p>
1 ≤ <b>T</b> ≤ 10
</p><p>
1 ≤ <b>N</b> &lt; 10<sup>100000</sup>

<h3>Example</h3>

<pre>
<b>Input:</b>
3
25
46
99

<b>Output:</b>
2
1
2

</pre></p>    