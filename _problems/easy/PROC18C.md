---
{"category_name":"easy","problem_code":"PROC18C","problem_name":"Awkward Pairs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"meetsid20","problem_tester":null,"date_added":"8-08-2018","tags":{"0":"meetsid20"},"time":{"view_start_date":1534442400,"submit_start_date":1534442400,"visible_start_date":1534442400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Aayush has recently started teaching Latin Dance. Today, he will be teaching Salsa. For this, he needs to divide the people attending his dance class into pairs. Usually in Salsa, the dance pairs consist of one girl and one boy. But Aayush doesn't find this convention very interesting. He is rather more concerned about the IQ of people who are members of the same pair. Precisely, if the sums of digits of the IQ score of the two people forming a pair are co-prime, then the pair will be $\text{awkward}$ according to Aayush. For example IQ scores 12 (1+2=3) and 22 (2+2=4) form an awkward pair.

The IQ scores of all the people attending the Salsa class are pairwise distinct. The lowest IQ is $\text{L}$ and the largest IQ is $\text{R}$. Moreover, there are exactly $\text{R-L+1}$ people attending the Salsa class. Aayush wants to know the number of ways in which an awkward pair can be formed modulo $10^9+7$. Two ways are different if at least one of the members in the pairs formed is different.

###Input
The first line contains a single interger $\text{T}$ - the number of testcases.

Each of the following $\text{T}$ lines contains two space separated integers $\text{L}$ and $\text{R}$, as described in the problem.

###Output
For every test case, print an integer answer modulo $10^9+7$.

###Constraints 
$1 \leq \text{T} \leq 10$

$1 \leq \text{L, R} \leq 10^{18}$

###Sample Input
	2
	5 8
	7 10

###Sample Output
	5
	6
	