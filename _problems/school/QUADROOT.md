---
{"category_name":"school","problem_code":"QUADROOT","problem_name":"Roots of a Quadratic Equation","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tanmay28","problem_tester":null,"date_added":"1-06-2018","tags":{"0":"tanmay28"},"time":{"view_start_date":1527923700,"submit_start_date":1527923700,"visible_start_date":1527923700,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Write a program to take the values for A, B, C of a quadratic equation $A * X^2 + B * X + C = 0$ and then find all the roots of the equation. It is guaranteed that A $\neq$ 0 and that the equation has at least one real root.

$x1= \frac{-b + \sqrt{(b^2 - 4ac)}}{2a}$

$x2= \frac{-b - \sqrt{(b^2 - 4ac)}}{2a}$

###Input:

- First line will contain the value of $A$
- Second line will contain the value of $B$
- Third line will contain the value of $C$


###Output:
Output two lines. First line contains the value of root 1 (x1) and second line contains the value of root 2 (x2). Your output will be considered to be correct if the difference between your output and the actual answer is not more than $10^{-6}$.


###Constraints 
- $-1000 \leq A \leq 1000$
- $-1000 \leq B \leq 1000$
- $-1000 \leq C \leq 1000$

###Sample Input:
	1
	-8
	15

###Sample Output:
	5
	3