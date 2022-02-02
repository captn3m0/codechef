---
{"category_name":"easy","problem_code":"READCOST","problem_name":"What is the Cost of Reading","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"20-12-2018","tags":{"0":"admin3"},"time":{"view_start_date":1545503400,"submit_start_date":1545503400,"visible_start_date":1545503400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>There is a universal library, where there is a big waiting room with seating capacity for maximum $m$ people, each of whom completes reading $n$ books sequentially. Reading each book requires one unit of time. 

Unfortunately, reading service is provided sequentially. After all of the $m$ people enter the library, the entrance gate is closed. There is only one reading table. So when someone reads, others have to wait in the waiting room. 

At first everybody chooses $n$ books they want to read. It takes $x$ amount of time. People can choose books simultaneously. Then they enter the waiting room. After reading $n$ books the person leaves the library immediately. 

As nothing is free, the cost of reading is also not free. If a person stays in the library $t$ units of time then the cost of reading is $\left \lfloor \frac{t-n}{m} \right \rfloor$ units of money. So, the $i^{th}$ person pays for time $x$ he needs to choose books and the time $(i-1)*n$ he needs to wait for all the persons before him to complete reading.

Note: $\left \lfloor a \right \rfloor$ denotes the floor($a$).

###Input
- Each case contains three space-separated positive integers $n$, $m$ and $x$ where $n, x \leq 1000$ and $m \leq 10^{15}$. 
- End of input is determined by three zeros. 
- There are no more than 1000 test cases.
 
###Output
- For each case, output in a single line the total unit of money the library gets in that day.

###Sample Input 
```
1 100 9
11 2 10
12 2 11
0 0 0
```

###Sample Output
```
9
15
16
```

###Explanation:
**Testcase 2**: Here, $n=11$, $m=2$, $x=10$.

For 1st person, 
$t=21$ and he/she gives $\left \lfloor \frac{21-11}{2} \right \rfloor = 5$ units of money.

For 2nd person,
$t=32$ and he/she gives $\left \lfloor \frac{32-11}{2} \right \rfloor= 10$ units of money.

So, total units of money $= 5+10 = 15$