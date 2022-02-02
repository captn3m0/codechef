---
{"languages_supported":{"0":"NA"},"title":"MENU","category":"NA","old_version":true,"problem_code":"MENU","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Alfred wants to plan what to cook in the next days. He can cook various dishes. For each dish the costs of the ingredients and the benefit value is known. If a dish is cooked the second time in a row, the benefit value for the second time is 50 percent of the benefit value of first time, if it is prepared for the third or higher time in a row, the benefit value is 0. For example cooking a dish with benefit value v three times in a row leads to a total benefit value of 1.5*v.<br />
Help him to build the menu which maximizes the benefit value under the constraint that his budget is not exceeded.</p>
<h3>Input</h3>
<p>The input consists of several test cases. Each test case begins with 3 integers in a line: The number of days <i>k</i> (<i>1 &#8804; k &#8804; 21</i>) Alfred wants to plan for, the number of dishes <i>n</i> (<i>1 &#8804; n &#8804; 50</i>) he can cook and his budget <i>m</i> (<i>0 &#8804; m &#8804; 100</i>).
The following <i>n</i> lines describe the dishes Alfred can cook. The i-th line contains two integers: the costs <i>c</i> (<i>1 &#8804; c &#8804; 50</i>) and the benefit value <i>v</i> (<i>1 &#8804; v &#8804; 10000</i>) of the i-th dish.<br />
The end of the input is signaled by a test case with <i>k = n = m = 0</i>. You don't need to process this test case.</p>
<h3>Output</h3>
<p>For each output, print the maximum benefit value reachable with 1 digit after the decimal point. Then print k integers with i-th integer being the number of the dish to cook on day i. Dishes are numbered from 1 to n. Print at least one space or new line character after each integer.<br />
If there are several possible menus reaching the maximum benefit value, select the one with minimum costs, if there are several with minimum costs, you can print any of them.<br />
If every menu exceeds the budget, print only the benefit value of 0.</p>
<h3>Example</h3>

<pre>
<b>Input:</b>
2 1 5
3 5
3 5 20
2 5
18 6
1 1
3 3
2 3
0 0 0

<b>Output:</b>
0.0

13.0
1 5 1 
</pre>    