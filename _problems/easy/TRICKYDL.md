---
{"category_name":"easy","problem_code":"TRICKYDL","problem_name":"The Tricky Deal","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"22-02-2019","tags":{"0":"cakewalk","1":"kingofnumbers","2":"ltime69"},"editorial_url":"https://discuss.codechef.com/problems/TRICKYDL","time":{"view_start_date":1550941202,"submit_start_date":1550941202,"visible_start_date":1550941202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME69/mandarin/TRICKYDL.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME69/bengali/TRICKYDL.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME69/hindi/TRICKYDL.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME69/russian/TRICKYDL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME69/vietnamese/TRICKYDL.pdf) as well.

One of Chef's friends offered him a deal: during $D$ days, they are going to exchange money. For each $i$ ($1 \le i \le D$), on the $i$-th day, Chef's friend would give Chef $A$ rupees, while Chef would give his friend $2^{i-1}$ rupees ($1$ rupee on day $1$, $2$ rupees on day $2$, $4$ rupees on day $3$, and so on). Chef's profit from the deal is the total number of rupees he received from his friend minus the total number of rupees he gave his friend.

Chef decided to ask for your advice before accepting the deal. You want to help him by telling him two numbers $D_1$ and $D_2$, where $D_1$ is the maximum value of $D$ such that Chef should accept the deal, i.e. his profit from the deal is positive if $D = D_1$, and $D_2$ is the value of $D$ that leads to the maximum possible profit for Chef. If there are multiple values of $D$ that lead to the maximum profit, $D_2$ is the smallest of these values.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $A$.

### Output
For each test case, print a single line containing two space-separated integers $D_1$ and $D_2$.

### Constraints 
- $1 \le T \le 100,000$
- $5 \le A \le 10^9$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
4
5
8
9
1000000000
```

### Example Output
```
4 3
5 3
5 4
35 30
```
