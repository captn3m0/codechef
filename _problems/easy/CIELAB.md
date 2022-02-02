---
{"languages_supported":{"0":"NA"},"title":"CIELAB","category":"NA","old_version":true,"problem_code":"CIELAB","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
In Ciel's restaurant, a waiter is training.
Since the waiter isn't good at arithmetic, sometimes he gives guests wrong change.
Ciel gives him a simple problem.
What is <strong>A</strong>-<strong>B</strong> (<strong>A</strong> minus <strong>B</strong>) ?
</p>

<p>
Surprisingly, his answer is wrong.
To be more precise, his answer has exactly one wrong digit.
Can you imagine this?
Can you make the same mistake in this problem?
</p>

<h3>Input</h3>
<p>
An input contains 2 integers <strong>A</strong> and <strong>B</strong>.
</p>

<h3>Output</h3>
<p>
Print a wrong answer of <strong>A</strong>-<strong>B</strong>.
Your answer must be a <em>positive</em> integer containing the same number of digits as the correct answer, and exactly one digit must differ from the correct answer.
Leading zeros are not allowed.
If there are multiple answers satisfying the above conditions, anyone will do.
</p>

<h3>Constraints</h3>
<p>
1 ≤ <strong>B</strong> &lt; <strong>A</strong> ≤ 10000
</p>

<h3>Sample Input</h3>
<pre>5858 1234</pre>

<h3>Sample Output</h3>
<pre>1624</pre>

<h3>Output details</h3>
<p>
The correct answer of 5858-1234 is 4624.
So, for instance, 2624, 4324, 4623, 4604 and 4629 will be accepted, but 0624, 624, 5858, 4624 and 04624 will be rejected.
</p>

<h3>Notes</h3>
<p>
The problem setter is also not good at arithmetic.
</p>    