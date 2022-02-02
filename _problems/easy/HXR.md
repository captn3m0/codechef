---
{"category_name":"easy","problem_code":"HXR","problem_name":"Xor Jar Muluk Tar","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"sajib_readd","problem_tester":null,"date_added":"19-04-2020","tags":{"0":"easy","1":"ltime83","2":"matrix","3":"sajib_readd","4":"taran_1407"},"problem_difficulty_level":"Easy-Medium","best_tag":"Matrix Exponentiation","editorial_url":"https://discuss.codechef.com/problems/HXR","time":{"view_start_date":1587834602,"submit_start_date":1587834602,"visible_start_date":1587834602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HXR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME83/hindi/HXR.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME83/bengali/HXR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME83/mandarin/HXR.pdf), [Russian](https://www.codechef.com/download/translated/LTIME83/russian/HXR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME83/vietnamese/HXR.pdf) as well.

Recently, Chef found a new formula for computing powers of a sequence:
- You are given two sequences $A_1, A_2, \ldots, A_N$ and $(l_1, r_1), (l_2, r_2), \ldots, (l_N, r_N)$.
- The $1$-st power of the sequence $A$ is $A^1 = A$.
- For each $k \gt 1$, the $k$-th power of the sequence $A$ (denoted by $A^k$) is a sequence with length $N$ such that for each valid $i$, the $i$-th element of this sequence is $$(A^k)_i = (A^{k-1})_{l_i} \oplus (A^{k-1})_{l_i+1} \oplus \ldots \oplus (A^{k-1})_{r_i-1} \oplus (A^{k-1})_{r_i} \,.$$

After discovering this new formula, Chef tried to find $A^K$, but he felt that it is very time consuming. Therefore, Chef wants you to do it. Can you find the $K$-th power of $A$ for Chef?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $l_i$ and $r_i$.

### Output
For each test case, print a single line containing $N$ space-separated integers $(A^K)_1, (A^K)_2, \ldots, (A^K)_N$.

### Constraints
- $1 \le T \le 3$
- $1 \le N \le 500$
- $1 \le K \le 5 \cdot 10^7$
- $1 \le A_i \le 10^{18}$ for each valid $i$
- $1 \le l_i \le r_i \le N$ for each valid $i$

### Subtasks
**Subtask #1 (50 points):**
- $T = 1$
- $N \le 100$

**Subtask #2 (50 points):** original constraints

### Sample Input
```
1
3 2
1 2 3
1 2
2 3
1 3
```

### Example Ouput
```
3 1 0
```

### Explanation
**Example case 1:**
- $(A^2)_1 = A_1 \oplus A_2 = 1 \oplus 2 = 3$
- $(A^2)_2 = A_2 \oplus A_3 = 2 \oplus 3 = 1$
- $(A^2)_3 = A_1 \oplus A_2 \oplus A_3 =1 \oplus 2 \oplus 3 = 0$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>