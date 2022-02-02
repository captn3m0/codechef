---
{"languages_supported":{"0":"NA"},"title":"MARCHA4","category":"NA","old_version":true,"problem_code":"MARCHA4","tags":{"0":"NA"},"layout":"problem"}
---

<p><strong>The following problem appeared in the <a href="http://www.codechef.com/MARCH09/">CodeChef March '09 Challenge.</a></strong></p>
<p>
Johnny was asked by his math teacher to compute <i>n</i><sup><i>n</i></sup> (<i>n</i> to the power of <i>n</i>, where <i>n</i> is an integer), and has to read his answer out loud. This is a bit of a tiring task, since the result is probably an extremely large number, and would certainly keep Johnny occupied for a while if he were to do it honestly. But Johnny knows that the teacher will certainly get bored when listening to his answer, and will sleep through most of it! So, Johnny feels he will get away with reading only the first <i>k</i> digits of the result before the teacher falls asleep, and then the last <i>k</i> digits when the teacher wakes up.
</p>
<p>Write a program to help Johnny to compute the digits he will need to read out.</p>

<h3>Input</h3>
<p>The first line contains <em>t</em>, the number of test cases (about 30000). Then <em>t</em> test cases follow.</p>
<p>Each test case consists of one line containing two numbers <i>n</i> and <i>k</i> (1 &#8804; <i>n</i> &#8804; 10<sup>9</sup>, 1 &#8804; k &#8804; 9). It is guaranteed that <i>k</i> is not more than the number of digits of <i>n<sup>n</sup></i>.</p>
<h3>Output</h3>
<p>For each test case, print out one line containing two numbers, separated by a space, which are the first and the last <i>k</i> digits of <i>n<sup>n</sup></i>.</p>
<h3>Example</h3>
<pre>
<b>Input</b>
2
4 2
9 3

<b>Output</b>
25 56
387 489
</pre>    