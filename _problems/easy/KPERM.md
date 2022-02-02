---
{"category_name":"easy","problem_code":"KPERM","problem_name":"Inversions in Permutations","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3 1 2","output":"2 1 3","explanation":"**Example case 1:** There are two permutations with $1$ inversion: $[1, 3, 2]$ and $[2, 1, 3]$. The first permutation is lexicographically smaller than the second permutation.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rumblefool","problem_tester":null,"date_added":"6-04-2020","tags":{"0":"cook117","1":"dynamic","2":"easy","3":"inversions","4":"permutation","5":"rajarshi_basu","6":"rumblefool"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/KPERM","time":{"view_start_date":1587407402,"submit_start_date":1587407402,"visible_start_date":1587407402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=KPERM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK117/hindi/KPERM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK117/mandarin/KPERM.pdf), [Russian](https://www.codechef.com/download/translated/COOK117/russian/KPERM.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK117/vietnamese/KPERM.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK117/bengali/KPERM.pdf) as well.

**Note**: For the problem KPERM, we have observed that PYPY3 performs better than Python3.

You are given integers $N$, $R$ and $K$. Consider all permutations of the integers $1$ through $N$ with exactly $R$ inversions. Find the $K$-th lexicographically smallest among these permutations.

Notes:
- The number of inversions in a permutation $P_1, P_2, \ldots, P_N$ is the number of pairs of integers $(i, j)$ such that $1 \le i \lt j \le N$ and $P_i \gt P_j$.
- A permutation $A_1, A_2, \ldots, A_N$ is lexicographically smaller than a permutation $B_1, B_2, \ldots, B_N$ if there is an index $i$ ($1 \le i \le N$) such that $A_i \lt B_i$ and for each valid $j \lt i$, $A_j = B_j$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $N$, $R$ and $K$.

### Output
For each test case:
- If the lexicographically $K$-th smallest permutation with $R$ inversions does not exist, print a single line containing the integer $-1$.
- Otherwise, print a single line containing $N$ space-separated integers ― the lexicographically $K$-th smallest permutation with $R$ inversions.

### Constraints
- $1 \le T \le 2,000$
- $1 \le N \le 500$
- $0 \le R \le 200,000$
- $1 \le K \le 10^{18}$

### Example Input
```
1
3 1 2
```

### Example Output
```
2 1 3
```

### Explanation
**Example case 1:** There are two permutations with $1$ inversion: $[1, 3, 2]$ and $[2, 1, 3]$. The first permutation is lexicographically smaller than the second permutation.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>