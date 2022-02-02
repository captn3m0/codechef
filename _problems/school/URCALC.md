---
{"category_name":"school","problem_code":"URCALC","problem_name":"Program Your Own CALCULATOR","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tanmay28","problem_tester":null,"date_added":"2-06-2018","tags":{"0":"tanmay28"},"time":{"view_start_date":1521136800,"submit_start_date":1521136800,"visible_start_date":1521136800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Write a program to obtain 2 numbers $($ $A$ $and$ $B$ $)$ and an arithmetic operator $(C)$ and then design a $calculator$ depending upon the operator entered by the user.

So for example if C="+", you have to sum the two numbers.

If C="-", you have to subtract the two numbers.

If C=" * ", you have to print the product.

If C=" / ", you have to divide the two numbers.


###Input:

- First line will contain the first number $A$.
- Second line will contain the second number $B$.
- Third line will contain the operator $C$, that is to be performed on A and B.

###Output:
Output a single line containing the answer, obtained by, performing the operator on the numbers. Your output will be considered to be correct if the difference between your output and the actual answer is not more than $10^{-6}$.

###Constraints 
- $-1000 \leq A \leq 1000$
- $-1000 \leq B \leq 1000$ $and$ $B \neq 0$
- $C$ $can$ $only$ $be$ $one$ $of$ $these$ $4$ $operators$ {" + ", " - ", " * ", " / "\}

###Sample Input:
	8
	2
	/

###Sample Output:
	4.0

###Sample Input:
	5
	3
	+

###Sample Output:
	8