---
{"category_name":"easy","problem_code":"PROC18D","problem_name":"Algebra Score","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"meetsid20","problem_tester":null,"date_added":"8-08-2018","tags":{"0":"meetsid20"},"time":{"view_start_date":1534442400,"submit_start_date":1534442400,"visible_start_date":1534442400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Pankhuri hates Algebra. Doesn't matter how hard she tries, she always fails to get good marks in her assessments. One of her marked assessments has been recently returned. She noticed that this time, the professor has only given per question marks and filled the total marks section with an expression consisting of +,- operations rather than a calculated number. For example - if there were 3 questions and she was awarded 10 marks in first question while 6 and 2 marks were deducted in second and third questions, then the professor would have written 10-6-2 in the total marks section.

Pankhuri might not be good at algebra but she is very smart. She came up with a brilliant idea. She plans to insert parentheses $($ or $)$ at some places in the expression to create a valid bracket expression which evaluates to the maximum possible value. For example in the above scenario, she could create the expression 10-(6-2) which evaluates to 6 unlike the original expression which evaluates to 4. But the expression given to her is very long and she is not able to figure out the maximum marks that she can get.

Given an expression of $\text{N}$ numbers and N-1 operators (either + or -) between them. We can enclose parts of the expression in parentheses to form any valid expression. What is the maximum value of the resulting expression? 

###Input

First line contains a single integer $\text{T}$ - the number of test cases.

For each testcase,

First line contains a single integer $\text{N}$. The second line contains the expression. 

The input format is of the following form.

$\text{N}$

a$_1$ o$_1$ a$_2$ o$_2$ a$_3$ o$_3$ .. o$_{n-1}$ a$_n$ 


###Output
For each testcase, print a line containing a single integer representing the maximum value of the expression. 


###Constraints 
$1 \leq \text{T} \leq 10$ 

$1\leq \text{N} \leq 200$ 

$1 \leq \mathbf{a_i} \leq 10^9$

o$_i$ is $+$ or $-$ 


###Sample Input
	3 
	3 
	8 - 1 - 25
	2
	38 + 20
	4
	40 - 8 - 1 + 25

###Sample Output
	32
	58
	58

###Explanation
Test 1: 8 - ( 1 - 25 ) = 32

Test 2: 38 + 20 = 58

Test 3: 40 - ( 8 - ( 1 + 25 ) ) = 58

