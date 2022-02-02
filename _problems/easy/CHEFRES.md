---
{"category_name":"easy","problem_code":"CHEFRES","problem_name":"Chef Restaurant ","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"29-09-2018","tags":{"0":"binary","1":"easy","2":"kingofnumbers","3":"line","4":"ltime64","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/CHEFRES","time":{"view_start_date":1538240402,"submit_start_date":1538240402,"visible_start_date":1538240402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Bengali](http://www.codechef.com/download/translated/LTIME64/bengali/CHEFRES.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/LTIME64/mandarin/CHEFRES.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME64/russian/CHEFRES.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME64/vietnamese/CHEFRES.pdf) as well.

Chef is a cook and he has recently opened a restaurant.

The restaurant is open during $N$ time intervals $[L_1, R_1), [L_2, R_2), \dots, [L_N, R_N)$. No two of these intervals overlap — formally, for each valid $i$, $j$ such that $i \neq j$, either $R_i \lt L_j$ or $R_j \lt L_i$.

$M$ people (numbered $1$ through $M$) are planning to eat at the restaurant; let's denote the time when the $i$-th person arrives by $P_i$. If the restaurant is open at that time, this person does not have to wait, but if it is closed, this person will wait until it is open. Note that if this person arrives at an exact time when the restaurant is closing, they have to wait for the next opening time.

For each person, calculate how long they have to wait (possibly $0$ time), or determine that they will wait forever for the restaurant to open.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of the input contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $L_i$ and $R_i$.
- $M$ lines follow. For each valid $i$, the $i$-th of these lines contains a single integer $P_i$.

### Output
For each test case, print $M$ lines. For each valid $i$, the $i$-th of these lines should contain a single integer — the time person $i$ has to wait, or $-1$ if person $i$ has to wait forever.

### Constraints 
- $1 \le T \le 100$
- $1 \le N, M \le 10^5$
- $1 \le L_i \lt R_i \le 10^9$ for each valid $i$
- $1 \le P_i \le 10^9$ for each valid $i$
- the intervals are pairwise disjoint
- the sum of $N$ for all test cases does not exceed $3 \cdot 10^5$
- the sum of $M$ for all test cases does not exceed $3 \cdot 10^5$

### Subtasks
**Subtask #1 (30 points):**
- the sum of $N$ for all test cases does not exceed $1,000$
- the sum of $M$ for all test cases does not exceed $1,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
4 5
5 7
9 10
2 3
20 30
5
6
7
35
1
```

### Example Output
```
0
0
2
-1
1
```
