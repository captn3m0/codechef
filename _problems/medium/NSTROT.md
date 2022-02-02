---
{"category_name":"medium","problem_code":"NSTROT","problem_name":"Nested Rotation","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4 2\r\n4 1 2 3\r\n3 2 4 1","output":6,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"ezio_26","problem_tester":null,"date_added":"24-03-2020","tags":{"0":"contribution","1":"ezio_26","2":"ltime82","3":"medium","4":"observation","5":"taran_1407"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/NSTROT","time":{"view_start_date":1585408500,"submit_start_date":1585408500,"visible_start_date":1585408500,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=NSTROT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME82/hindi/NSTROT.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME82/bengali/NSTROT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME82/mandarin/NSTROT.pdf), [Russian](https://www.codechef.com/download/translated/LTIME82/russian/NSTROT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME82/vietnamese/NSTROT.pdf) as well.

Chef is feeling tired after his birthday party, so he decided to ask you to compute the result of the following pseudocode rather than explain this problem. The input for the code consists of an integer $V$ and two permutations $P_1, P_2, \ldots, P_N$ and $Q_1, Q_2, \ldots, Q_N$ of the integers $1$ through $N$. Don't worry, Chef will give you this input.

```
function Log2(x):
    if x is at most 1:
        return 0
    else:
        return Log2(floor(x / 2)) + 1

function F(A[1...N], B[1...N]):
    posA[i] = index j such that A[j] == i
    posB[i] = index j such that B[j] == i
    ret = 0
    for i = 1 to N:
        ret += Log2(absolute_value(posA[i] - posB[i]))
    return ret

result = 1
For i = 0 to v - 1:
    R = cyclic right shift of Q by i
    result *= F(P, R)
result %= 998244353        
```
  

For each $i$  ( $0 \le i \lt N$), the cyclic right shift of the permutation $Q$ by $i$ is the permutation created by moving the last $i$ elements of $Q$ to the beginning, i.e. the sequence $Q_{N-i+1}, Q_{N-i+2}, \ldots, Q_N, Q_1, Q_2, \ldots, Q_{N-i}$. For example, if we perform a cyclic right shift by $1$ on the permutation $(4, 1, 2, 3)$, it becomes $(3, 4, 1, 2)$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $V$.
- The second line contains $N$ space-separated integers $P_1, P_2, \ldots, P_N$.
- The third line contains $N$ space-separated integers $Q_1, Q_2, \ldots, Q_N$.

### Output
For each test case, print a single line containing one integer ― the result of the code.

### Constraints
- $1 \le T \le 10$
- $1 \le V \le N \le 10^5$
- $1 \le P_i, Q_i \le N$ for each valid $i$
- $P_1, P_2, \ldots, P_N$ are pairwise distinct
- $Q_1, Q_2, \ldots, Q_N$ are pairwise distinct

### Subtasks
**Subtask #1 (50 points):** $N \le 5 \cdot 10^3$

**Subtask #2 (50 points):**: original constraints

### Example Input
```
1
4 2
4 1 2 3
3 2 4 1
```

### Example Output
```
6
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>