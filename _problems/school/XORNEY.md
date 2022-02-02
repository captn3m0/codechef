---
{"category_name":"school","problem_code":"XORNEY","problem_name":"XOR! Wait for it","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tds115","problem_tester":null,"date_added":"24-12-2018","tags":{"0":"cakewalk","1":"pelt2019","2":"tds115","3":"tds115"},"time":{"view_start_date":1547476200,"submit_start_date":1547476200,"visible_start_date":1547476200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>"I have only one rule, never submit partially correct code" -Barney Stinson

The religious act which Barney and his friends hold most sacred, XORING the natural numbers in the given range. This time Barney is a bit busy with picking up some girls, so he asked you to help him. He gave you two numbers $L$ and $R$, you have to find if XOR of all the numbers in range L to R (L,R both inclusive) is odd or even.

Warning!! Large Input-Output. Please use Fast IO.

###Input:

- The first line will contain $T$, number of testcases. 
- Each testcase contains a single line of input, two integers $L, R$. 

###Output:
For each testcase, in the new line print "Odd" if the XOR in the range is odd, else print "Even".

###Constraints 
- $1 \leq T \leq 10^6$
- $1 \leq L \leq  R \leq 10$<sup>$18$</sup>

###Sample Input:
        4 
        1 4
        2 6
        3 3
        2 3

###Sample Output:
        Even
        Even
        Odd
        Odd
	
###EXPLANATION:
Test case -1 ->  XOR (1,2,3,4) =4

Test case -2 ->  XOR (2,3,4,5,6) =6

Test case -3 ->  XOR (3) =3

Test case -4 ->  XOR (2,3) =1
