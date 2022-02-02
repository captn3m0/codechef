---
{"languages_supported":{"0":"NA"},"title":"ONP","category":"NA","old_version":true,"problem_code":"ONP","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>
<p align="justify"></p>
<p>Reverse Polish Notation (RPN) is a mathematical notation where every operator follows all of its operands. For instance, to add three and four, one would write "3 4 +" rather than "3 + 4". If there are multiple operations, the operator is given immediately after its second operand; so the expression written "3 &#8722; 4 + 5" would be written "3 4 &#8722; 5 +" first subtract 4 from 3, then add 5 to that.</p>
<p>
Transform the algebraic expression with brackets into RPN form.
</p>
<p>
You can assume that for the test cases below only single letters will be used, brackets [] will not be used and each expression has only one RPN form (no expressions like a*b*c)</p>
<h3>Input</h3>
<p align="left">
The first line contains t, the number of test cases (less then 100).
</p>
<p>
Followed by t lines, containing an expression to be translated to RPN form, where the length of the expression is less then 400.
</p>
<h3>Output</h3>
<pre>
The <em>expression</em>s in RPN form, one per line.
</pre>
<h3>Example</h3>

<pre>
Input:
3
(a+(b*c))
((a+b)*(z+x))
((a+t)*((b+(a+c))^(c+d)))

Output:
abc*+
ab+zx+*
at+bac++cd+^*
</pre>    