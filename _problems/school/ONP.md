---
{"category_name":"school","problem_code":"ONP","problem_name":"Transform the Expression","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLPS","8":"CPP 4.3.2","9":"CPP 4.9.2","10":"CPP14","11":"CS2","12":"D","13":"ERL","14":"FORT","15":"GO","16":"HASK","17":"ICK","18":"ICON","19":"JAVA","20":"JS","21":"LISP clisp","22":"LISP sbcl","23":"LUA","24":"NEM","25":"NICE","26":"NODEJS","27":"PAS fpc","28":"PAS gpc","29":"PERL","30":"PHP","31":"PIKE","32":"PRLG","33":"PYTH","34":"PYTH 3.4","35":"RUBY","36":"SCALA","37":"SCM guile","38":"SCM qobi","39":"ST","40":"TEXT","41":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"1-12-2008","tags":{"0":"admin"},"time":{"view_start_date":1232460231,"submit_start_date":1232460231,"visible_start_date":1232460231,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p align="justify"></p>
Reverse Polish Notation (RPN) is a mathematical notation where every operator follows all of its operands. For instance, to add three and four, one would write "3 4 +" rather than "3 + 4". If there are multiple operations, the operator is given immediately after its second operand; so the expression written "3 − 4 + 5" would be written "3 4 − 5 +" first subtract 4 from 3, then add 5 to that.</p>

<p>
Transform the algebraic expression with brackets into RPN form. 
</p>
<p>
You can assume that for the test cases below only single letters will be used, brackets [] will not be used and each expression has only one RPN form (no expressions like a*b*c)

</p>
<h3>Input</h3>

<p align="left">
The first line contains t, the number of test cases (less then 100).
</p>
<p>
Followed by t lines, containing an expression to be translated to RPN form, where the length of the expression is less then 400.
</p>

<h3>Output</h3>
<PRE>
The <em>expression</em>s in RPN form, one per line.
</pre>
<h3>Example</h3>

<PRE>
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