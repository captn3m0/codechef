---
{"category_name":"easy","problem_code":"PROC18B","problem_name":"Kill them with your success","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"meetsid20","problem_tester":null,"date_added":"8-08-2018","tags":{"0":"meetsid20"},"time":{"view_start_date":1534442400,"submit_start_date":1534442400,"visible_start_date":1534442400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Tanish is the president of the chemistry club at his school. He considers everyone who doesn't like chemistry as his enemy. After years of research, he has invented a lethal poison, which he named *success*. Now Tanish plans to kill all his enemies with his *success*. *Success* is extremely deadly and is untraceable in small concentrations.


Tanish has $\text{N}$ flasks lying on the shelf of his lab. All of these flasks contain the same volume of poison solution. The concentration of poison in the $\text{ith}$ flask is $\mathbf{a_i}$. In one move - Tanish picks up any two flasks, pours half of the contents of each of these flasks into a third initially empty flask, discards the two flasks and places the third flask (which now has the same volume of solution as all other flasks) on the shelf. He performs N-1 such moves to end up with only one flask of poison on the shelf. He wishes to perform these moves such that the concentration of poison in this flask is the minimum possible. What is the minimum concentration of poison that he can achieve?
###Input
First line of the input contains a single integer $\text{T}$ - the number of test cases. 

For each test case,

The first line contains a single integer $\text{N}$, the number of bottles. 

The second line contains N space-separated integers, the concentrations. 

###Output
For each test case, print one line containing the lowest final concentration. The output will be accepted if the absolute error is $\leq 10^{-6}$.

###Constraints
$1 \leq \text{T} \leq 10$
 
$2 \leq \text{N} \leq 10^4$

$0 \leq \mathbf{a_i} \leq 10^9$

###Sample Input
	2
	2
	9 3
	3
	3 2 9

###Sample Output
	6.00000000
	4.00000000

###Explanation
In test 1, Tanish mixes flasks 1 and 2. In test 2, he first mixes flasks 1 and 3 to get a flask of concentration 6 and then mixes this flask with flask 2 to get a flask of poison concentration 4.	

###Note
The concentration is given in the unit ppb i.e. parts per billion.

1 gram poison in $10^9$ ml solution is 1 ppb.

Concentration in ppb = (Number of grams of poison / Volume of solution in ml) x $10^9$