---
{"category_name":"easy","problem_code":"MINARRS","problem_name":"Minimum Sum","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"26-04-2019","tags":{"0":"bitwise","1":"easy","2":"greedy","3":"kingofnumbers","4":"ltime71","5":"observations","6":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/MINARRS","time":{"view_start_date":1556384402,"submit_start_date":1556384402,"visible_start_date":1556384402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/LTIME71/hindi/MINARRS.pdf), [Bengali](http://www.codechef.com/download/translated/LTIME71/bengali/MINARRS.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME71/mandarin/MINARRS.pdf), [Russian](http://www.codechef.com/download/translated/LTIME71/russian/MINARRS.pdf), and [Vietnamese](http://www.codechef.com/download/translated/LTIME71/vietnamese/MINARRS.pdf) as well.

You are given a sequence of non-negative integers $A_1, A_2, \ldots, A_N$. At most once, you may choose a non-negative integer $X$ and for each valid $i$, change $A_i$ to $A_i \oplus X$ ($\oplus$ denotes bitwise XOR).

Find the minimum possible value of the sum of all elements of the resulting sequence.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of the input contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the minimum possible sum.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):**
- $1 \le N \le 10^3$
- $1 \le A_i \le 10^3$ for each valid $i$

**Subtask #2 (50 points):** original constraints

### Example Input
```
3
5
2 3 4 5 6
4
7 7 7 7
3
1 1 3
```

### Example Output
```
14
0
2
```

### Explanation
**Example case 1:** If we choose $X = 6$, the sequence becomes $(4, 5, 2, 3, 0)$.

**Example case 2:** We can choose $X = 7$ to make all elements of the resulting sequence equal to $0$.

**Example case 3:** We can choose $X = 1$. The sequence becomes $(0, 0, 2)$, with sum $2$.
