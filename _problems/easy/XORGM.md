---
{"category_name":"easy","problem_code":"XORGM","problem_name":"XOR Game","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5\r\n3 1 2 4 5\r\n2 4 5 1 3","output":"3 1 2 4 5","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"y0u_kn0w_wh0","problem_tester":null,"date_added":"28-01-2020","tags":{"0":"akashbhalotia","1":"cook115","2":"easy","3":"observation","4":"xor","5":"y0u_kn0w_wh0"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/XORGM","time":{"view_start_date":1582021800,"submit_start_date":1582021800,"visible_start_date":1582021800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=XORGM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK115/hindi/XORGM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK115/mandarin/XORGM.pdf), [Russian](https://www.codechef.com/download/translated/COOK115/russian/XORGM.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK115/vietnamese/XORGM.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK115/bengali/XORGM.pdf) as well.

You are given an odd integer $N$ and two integer sequences $A_1, A_2, \ldots, A_N$ and $B_1, B_2, \ldots, B_N$.

Your task is to reorder the elements of $B$, forming a new sequence $C_1, C_2, \ldots, C_N$ (i.e. choose a permutation $P_1, P_2, \ldots, P_N$ of the integers $1$ through $N$, where $C_i = B_{P_i}$ for each valid $i$), in such a way that the following condition holds: $(A_1 \oplus C_1) = (A_2 \oplus C_2) = \ldots = (A_N \oplus C_N)$, where $\oplus$ denotes bitwise XOR. Find one such reordered sequence or determine that it is impossible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$.

### Output
For each test case:
- If there is no valid way to reorder the sequence $B$, print a single line containing the integer $-1$.
- Otherwise, print a single line containing $N$ space-separated integers $C_1, C_2, \ldots, C_N$. If there are multiple solutions, you may find any one.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $N$ is odd
- $0 \le A_i \le 10^6$ for each valid $i$
- $0 \le B_i \le 10^6$ for each valid $i$

### Example Input
```
1
5
3 1 2 4 5
2 4 5 1 3
```

### Example Output
```
3 1 2 4 5
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>