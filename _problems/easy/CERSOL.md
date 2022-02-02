---
{"category_name":"easy","problem_code":"CERSOL","problem_name":"Cersei and her Soldiers","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"aashu_k","problem_tester":null,"date_added":"27-03-2019","tags":{"0":"aashu_k"},"time":{"view_start_date":1554669000,"submit_start_date":1554669000,"visible_start_date":1554669000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>**Cersei** wants to be the queen of seven kingdoms.  
For this to happen, she needs to address the soldiers in her army. There are $n$ soldiers in her army (numbered $1$ through $n$). Cersei passes on the message to the **first soldier (soldier 1)**.   

This message needs to reach **every soldier in the army**. For this, the soldiers communicate among themselves by one soldier passing the message to another soldier through some communication links. It is known that the **message could reach every soldier** using the given links.

Now, each soldier will receive the **message from exactly one soldier or Cersei** and could **pass on the message to atmost two soldiers**. That is each soldier (except soldier 1) has only **one incoming link** and every soldier (including soldier 1) has atmost **two outgoing links**.  
 
Now, the High Sparrow feels that Cersei is planning to kill his people first. Hence, for the sake of his people, he decided to appoint some sparrows to overhear every conversation between the soldiers (**The conversation between Cersei and the first soldier needn't be overheard** due to the fear of Ser Gregor Clegane).   

To overhear a conversation between soldiers $A$ and $B$, there needs to be a sparrow either at soldier $A$ or soldier $B$ or both.

Also, by his research, the High Sparrow has found that the **soldiers are partitioned into some classes ($1$ to $k$).** That is, every soldier belongs to exactly one class. He then demands the presence of **atleast one sparrow with each class** he knows ($1$ to $k$).

Find the minimum number of sparrows the High Sparrow needs to recruit for the job or tell that he couldn't.

###Input:
- The first line of the input contains the number of test cases $t$.
- The first line of each test case gives the number of soldiers $n$ in the army, the number of communication links $m$ between the soldiers and the number of classes $k$ in soldiers.
- The next line of the test case consists of $n$ integers $A_1,A_2....A_n$ each denoting the class of the $i^{th}$ soldier.
- The next $m$ lines of the test case contain two integers $u$ and $v$, which denotes that soldier $u$ can pass a message to soldier $v$ ($u \neq v$).

###Output:
For each test case, print in a single line the minimum number of sparrows required for the above task or print $-1$ if no such way is possible.

###Constraints 
- $1 \leq t \leq 500$
- $1 \leq n \leq 2500$
- $m = n - 1$
- $1 \leq k \leq 10$
- $1 \leq a_i \leq k$
- The sum of $n$ over all test cases is $\leq 2500$.

###Sample Input:
	1
	5 4 3
	1 1 2 2 3
	1 2
	1 3
	2 4
	2 5

###Sample Output:
	3
	
###EXPLANATION:
	Selecting soldiers 1,4,5 would satisfy all the conditions.

###Sample Input:
	1
	5 4 5
	1 1 2 2 3
	1 2
	1 3
	2 4
	2 5

###Sample Output:
	-1

###EXPLANATION:
	Classes 4 and 5 are not present. So, there is no way possible.