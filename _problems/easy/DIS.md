---
{"category_name":"easy","problem_code":"DIS","problem_name":"Distances","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"watcher","problem_tester":null,"date_added":"20-01-2019","tags":{"0":"constructive","1":"graphs","2":"ltime68","3":"watcher"},"editorial_url":"https://discuss.codechef.com/problems/DIS","time":{"view_start_date":1548522002,"submit_start_date":1548522002,"visible_start_date":1548522002,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME68/mandarin/DIS.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME68/bengali/DIS.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME68/hindi/DIS.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME68/russian/DIS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME68/vietnamese/DIS.pdf) as well.

Arya and Aryan live in a country called Nadaca. Nadaca consists of $N$ cities numbered $1$ through $N$, which are connected by some bidirectional roads. Each road has a positive (not necessarily integer) length. Arya lives in city $1$ and Aryan lives in city $N$.

Arya claims that for each city $v$, the shortest path from city $1$ to city $v$ has length $a_v$. Aryan does not disagree, but claims that for each city $v$, the shortest path from city $N$ to city $v$ has length $b_v$. You are the wisest person they know, so they asked you to tell them if it is possible for their claims to be true, i.e. if a road network which fully satisfies their claims exists. Help them!

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.
- The third line contains $N$ space-separated integers $b_1, b_2, \ldots, b_N$.

### Output
For each test case, print a single line containing the string `"Yes"` if Arya's and Aryan's claims can be true or `"No"` otherwise.

### Constraints 
- $1 \le T \le 10^3$
- $2 \le N \le 10^6$
- $0 \le a_i, b_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):** the sum of $N$ over all test cases does not exceed $10^3$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
3
0 1 1
1 1 0
3
0 1 5
5 1 0
```

### Example Output
```
Yes
No
```
