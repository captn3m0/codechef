---
{"category_name":"hard","problem_code":"NOSS","problem_name":"Maximize the NOSS","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"arpa","problem_tester":null,"date_added":"25-12-2018","tags":{"0":"arpa","1":"dynamic","2":"knapsack","3":"ltime67"},"editorial_url":"https://discuss.codechef.com/problems/NOSS","time":{"view_start_date":1546103100,"submit_start_date":1546103100,"visible_start_date":1546103100,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTM67TST/mandarin/NOSS.pdf) , [Bengali](http://www.codechef.com/download/translated/LTM67TST/bengali/NOSS.pdf) , [Hindi](http://www.codechef.com/download/translated/LTM67TST/hindi/NOSS.pdf) , [Russian](http://www.codechef.com/download/translated/LTM67TST/russian/NOSS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTM67TST/vietnamese/NOSS.pdf) as well.

You are given a sequence of positive integers $a_1, a_2, \ldots, a_N$. You may change up to two elements of this sequence, each of them to any positive integer (not necessarily the same for two elements). Let's denote the resulting sequence by $b_1, b_2, \ldots, b_N$.

Consider all $2^N$ subsequences of $b_1, b_2, \ldots, b_N$. For each subsequence, compute the sum of its elements ($0$ for the empty subsequence). Let's denote the set of these sums by $S$; note that a set contains each integer at most once. Finally, NOSS is the size of set $S$. For example, if $[b_1, b_2, b_3] = [17, 23, 40]$, then $S = \{0, 17, 23, 40, 57, 63, 80\}$ and NOSS is $7$.

Find the maximum possible NOSS.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
For each test case, print a single line containing one integer — the maximum possible NOSS.

### Constraints 
- $1 \le T \le 3$
- $2 \le N \le 10,000$
- $1 \le a_i \le 10,000$ for each valid $i$
- $1 \le \sum_{i=1}^N a_i \le 10,000$

### Subtasks
**Subtask #1 (20 points):**
- $1 \le \sum_{i=1}^N a_i \le 100$

**Subtask #2 (20 points):**
- $1 \le \sum_{i=1}^N a_i \le 1000$

**Subtask #3 (60 points):** original constraints

### Example Input
```
3
5 
1 2 3 4 5
6
1 1 1 1 1 1
3
1 5 7 
```

### Example Output
```
32
20
8
```

### Explanation
**Example case 1:** One possible way is to change $3$ to $10$ and $5$ to $20$. Then $S = \{0 \ldots 7, 10 \ldots 17, 20 \ldots 27, 30 \ldots 37\}$ ($a \ldots b$ denotes all integer from $a$ to $b$ inclusive) and NOSS is $32$.

**Example case 2:** One possible way is to change one element of the initial sequence from $1$ to $10$ and another from $1$ to $20$.

**Example case 3:** The optimal NOSS is achieved even if nothing is changed.
