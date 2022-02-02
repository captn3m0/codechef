---
{"languages_supported":{"0":"NA"},"title":"SEEDS","category":"NA","old_version":true,"problem_code":"SEEDS","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>The Chef has decided to take a break from the restaurant. Rather than sitting on some boring tropical beach for hours on end, he has decided to join an archaeological dig. His latest discovery is an ancient tablet containing a list of numbers that seem to fit some pattern. At the top of the list are d numbers a<sub>0</sub>, ..., a<sub>d-1</sub>, each of which is either 0 or 1. The rest of the list is only partially readable, but it seems to contain an extremely long list of 0/1 numbers x<sub>0</sub>, x<sub>1</sub>, ...</p>
<p>Only some of the x<sub>i</sub> values are readable and the rest are too damaged to make out. The Chef conjectures that these numbers fit the following pattern. For any number n ≥ 0, the Chef conjectures that x<sub>n+d</sub> = a<sub>0</sub>x<sub>n</sub> + ... + a<sub>d-1</sub>x<sub>n+d-1</sub>. Because of the nature of this pattern, he is calling the first d integers x<sub>0</sub>, ..., x<sub>d-1</sub> the "seeds". Finally, this ancient civilization appears to be only concerned about whether a number is odd or even. Because of this, his conjecture is that the numbers fit the previous pattern when all results are reduced modulo 2.</p>
<p>Your job is to help the Chef determine the validitiy of his conjecture. Specifically, you are to determine if there is a way to assign either a 0 or a 1 to all unreadable x<sub>i</sub> entries so that the pattern holds. If so, you must determine if there is more than one way to do this or if there is exactly one way to do this. If there is exactly one way, you must specify the values of the "seeds".</p>
<h3>Input</h3>
<p>The first line contains a single integer indicating the number of test cases to follow (at most 50). Each test case begins with two integers d and k. The next line contains the d values a<sub>0</sub>, ..., a<sub>d-1</sub> that are written at the top of the tablet. Finally, k lines follow where the j'th line contains two integers i(j) and x<sub>(j)</sub>. This specifies the value of the readable number x<sub>i(j)</sub>. The i<sub>j</sub> values will appear in strictly increasing order.</p>
<p>Bounds: Both d and k are between 1 and 20. All values a<sub>i</sub> and x<sub>i(j)</sub> are either 0 or 1. Finally, each index i(j) is between 0 and 2<sup>31</sup>-1.</p>
<h3>Output</h3>
<p>The output for each test case is a single line containing one of three messages. If there is no way to fill in the missing values x<sub>i</sub> so that the pattern holds, then you should output "no solutions". If there are multiple ways to assign values to the missing x<sub>i</sub> so that the pattern holds, then output "multiple solutions".</p>
<p>Finally, if there is only one way to assign values to the missing x<sub>i</sub> values, then you should output a line containing the d values x<sub>0</sub>, ..., x<sub>d-1</sub> with a single space between consecutive numbers. Since these values are calculated modulo 2, then they are either 0 or 1.</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 2
1 1
0 0
2 1
2 2
1 1
0 0
3 0
2 2
1 0
0 0
2 1

<b>Output:</b>
0 1
multiple solutions
no solution

</pre>
<p></p>    