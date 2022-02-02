---
{"category_name":"easy","problem_code":"QABC","problem_name":"Chef and Operations","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"11-10-2018","tags":{"0":"mgch","1":"observations","2":"simple","3":"snckql19","4":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/QABC","time":{"view_start_date":1539698400,"submit_start_date":1539698400,"visible_start_date":1539698400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/S19QLTST/hindi/QABC.pdf) ,[Mandarin chinese](http://www.codechef.com/download/translated/S19QLTST/mandarin/QABC.pdf) , [Russian](http://www.codechef.com/download/translated/S19QLTST/russian/QABC.pdf), [Vietnamese](http://www.codechef.com/download/translated/S19QLTST/vietnamese/QABC.pdf) and [Bengali](http://www.codechef.com/download/translated/S19QLTST/bengali/QABC.pdf) as well.

Chef has two sequences $A$ and $B$, each with length $N$. He can apply the following magic operation an arbitrary number of times (including zero): choose an index $i$ ($1 \le i \le N-2$) and add $1$ to $A_i$, $2$ to $A_{i+1}$ and $3$ to $A_{i+2}$, i.e. change $A_i$ to $A_i+1$, $A_{i+1}$ to $A_{i+1}+2$ and $A_{i+2}$ to $A_{i+2}+3$.

Chef asks you to tell him if it is possible to obtain sequence $B$ from sequence $A$ this way. Help him!

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$. 
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.
- The third line contains $N$ space-separated integers $B_1, B_2, \dots, B_N$.

### Output
For each test case, print a single line containing the string `"TAK"` if it is possible to reach sequence $B$ or `"NIE"` otherwise.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $0 \le A_i \le 10^8$ for each valid $i$
- $0 \le B_i \le 10^8$ for each valid $i$
- the sum of $N$ for all test cases does not exceed $5 \cdot 10^5$

### Example Input
```
2
5
0 0 0 0 0 
1 2 4 2 3
5
0 0 0 0 0 
1 2 4 2 4
```

### Example Output
```
TAK
NIE
```

### Explanation
**Example case 1:** Chef can apply the operation at index $i = 3$ and get the sequence $(0,0,1,2,3)$. Afterwards, he can apply that operation at index $i = 1$ and get the sequence $(1,2,4,2,3) = B$.

**Example case 2:** It is impossible to reach sequence $B$.
