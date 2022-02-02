---
{"category_name":"medium","problem_code":"FREQFUN","problem_name":"Frequency Function","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n3\r\n-1 0 -1\r\n0 3 0 0\r\n3\r\n2 2 1\r\n3 0 0 0\r\n3\r\n-1 2 -1\r\n1 1 1 0\r\n3\r\n-1 2 2\r\n0 1 1 0","output":"1 0 2\r\nimpossible\r\n0 2 0\r\nimpossible","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"27-12-2019","tags":{"0":"deadwing97","1":"easy","2":"greedy","3":"kingofnumbers","4":"ltime79"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/FREQFUN","time":{"view_start_date":1577552402,"submit_start_date":1577552402,"visible_start_date":1577552402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FREQFUN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME79/hindi/FREQFUN.pdf),[Bengali](https://www.codechef.com/download/translated/LTIME79/bengali/FREQFUN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME79/mandarin/FREQFUN.pdf), [Russian](https://www.codechef.com/download/translated/LTIME79/russian/FREQFUN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME79/vietnamese/FREQFUN.pdf) as well.

Chef had a sequence $S_0, S_1, \ldots, S_{N-1}$; each element of this sequence was an integer between $0$ and $N-1$ (inclusive). Unfortunately, he forgot some (possibly zero or all) elements of this sequence. You are given a sequence $A_0, A_1, \ldots, A_{N-1}$, where for each valid $i$, $A_i = -1$ denotes an element Chef forgot and if $A_i \neq -1$, then $A_i = S_i$.

Before Chef forgot any elements of $S$, he created a sequence $B_0, B_1, \ldots, B_{N-1}$, where for each valid $i$, $B_i$ is the number of occurrences of the value $i$ in $S$ (the number of valid indices $j$ such that $S_j = i$), and then, he created a third sequence $G_0, G_1, \ldots, G_N$, where for each valid $i$, $G_i$ is the number of occurrences of the value $i$ in $B$. (Note that the elements of $B$ are between $0$ and $N$ inclusive.) Unfortunately, Chef also forgot the sequence $B$, but he remembers $G$.

Help Chef restore the missing elements of the sequence $S$. Precisely, find the lexicographically smallest sequence $S$ which is consistent with all the given information or determine that there is no such sequence.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_0, A_1, \ldots, A_{N-1}$.
- The third line contains $N+1$ space-separated integers $G_0, G_1, \ldots, G_N$.

### Output
For each test case:
- If there is no sequence $S$ consistent with all the given information, print a single line containing the string `"impossible"`.
- Otherwise, print a single line containing $N$ space-separated integers $S_0, S_1, \ldots, S_{N-1}$ - the lexicographically smallest valid sequence $S$.

### Constraints
- $1 \le T \le 1,000$
- $2 \le N \le 10^5$
- $-1 \le A_i \le N-1$ for each valid $i$
- $0 \le G_i \le N$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):**
- $1 \le N \le 50$
- the sum of $N$ over all test cases does not exceed $500$

**Subtask #2 (50 points):** original constraints

### Example Input
```
4
3
-1 0 -1
0 3 0 0
3
2 2 1
3 0 0 0
3
-1 2 -1
1 1 1 0
3
-1 2 2
0 1 1 0
```

### Example Output
```
1 0 2
impossible
0 2 0
impossible
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>