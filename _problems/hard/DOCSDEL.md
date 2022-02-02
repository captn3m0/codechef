---
{"category_name":"hard","problem_code":"DOCSDEL","problem_name":"Permutation Composition Queries","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"isaf27","problem_tester":null,"date_added":"23-06-2018","tags":{"0":"complexity","1":"isaf27","2":"isaf27","3":"likecs","4":"ltime61","5":"medium","6":"prefix","7":"queries"},"editorial_url":"https://discuss.codechef.com/problems/DOCSDEL","time":{"view_start_date":1530378005,"submit_start_date":1530378005,"visible_start_date":1530378005,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME61/mandarin/DOCSDEL.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME61/russian/DOCSDEL.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME61/vietnamese/DOCSDEL.pdf">Vietnamese</a> as well.</h3>

You are given $N$ sequences $P_1, P_2, \dots, P_N$. Each of them is a permutation of numbers $1$ through $M$.

Let's define a product of two permutations $X$ and $Y$ of numbers $1$ through $M$ as a permutation $Z = X\cdot Y$ such that $Z_i=Y_{X_i}$ for each valid $i$.

You should answer $Q$ queries. Each query is described by two numbers $L$ and $R$. Let's define a permutation $B = P_L \cdot P_{L+1} \cdot \,\dots\, \cdot P_R$; the multiplication of permutations is evaluated left to right, i.e. as $((P_L \cdot P_{L+1}) \cdot \dots) \cdot P_R$. The answer to a query is $\sum_{i=1}^M i \cdot B_i$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains $M$ space-separated integers $P_{i, 1}, P_{i, 2}, \dots, P_{i, M}$ denoting the permutation $P_i$.
- The next line contains a single integer $Q$.
- Each of the following $Q$ lines contains two space-separated integers $L$ and $R$ describing one query.

### Output
For each test case, print $Q$ lines. For each valid $i$, the $i$-th of these lines should contain a single integer — the answer to the $i$-th query.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N, M \le 10^5$
- $1 \le N \cdot M \le 2 \cdot 10^5$
- $1 \le P_{i, j} \le M$ for each valid $i$ and $j$
- $1 \le Q \le 2 \cdot 10^5$
- $1 \le L \le R \le N$
- for each valid $i$, $P_i$ is permutation of numbers $1$ through $M$
- the sum of $N \cdot M$ for all test cases does not exceed $2 \cdot 10^5$
- the sum of $Q$ for all test cases does not exceed $2 \cdot 10^5$

### Subtasks

**Subtask #1 (15 points):**
- $1 \le T \le 100$
- $1 \le Q \le 50$
- $1 \le N \cdot M \le 200$

**Subtask #2 (25 points):**
- $1 \le T \le 100$
- $1 \le M \le 10$

**Subtask #3 (60 points):** original constraints

### Example Input
```
1
4 3
3 2 1
1 3 2
1 2 3
2 3 1
5
1 1
1 4
3 4
3 3
1 3
```

### Example Output
```
10
11
11
14
11
```

### Explanation
**Example case 1:** 
- query 1: $B = [3, 2, 1]$, so the answer is $1\cdot 3 + 2\cdot 2 + 3\cdot 1 = 10$
- query 2: $B = [3, 1, 2]$, the answer is $11$
- query 3: $B = [2, 3, 1]$, the answer is $11$
- query 4: $B = [1, 2, 3]$, the answer is $14$
- query 5: $B = [2, 3, 1]$, the answer is $11$
