---
{"category_name":"easy","problem_code":"PERMSPL","problem_name":"Permutation Split","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n1\r\n1\r\n3\r\n3 2 1\r\n4\r\n4 3 2 1\r\n5 \r\n1 4 3 2 5","output":"YES\r\nNO\r\nYES\r\nNO","explanation":"**Example case 1:** We can split $(1)$ into $(1)$ and $()$. There are $0$ inversions in each of these sequences.\r\n\r\n**Example case 3:** We can split $(4, 3, 2, 1)$ into $(4, 3)$ and $(2, 1)$. There is $1$ inversion in each of them. Note that this is not the only solution ? we could also split the permutation into sequences $(4, 1)$ and $(3, 2)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anton_trygub","problem_tester":"","date_added":"12-09-2020","tags":{"0":"anton_trygub","1":"dynamic","2":"easy","3":"knapsack","4":"ltime88","5":"math"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/PERMSPL","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PERMSPL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME88/hindi/PERMSPL.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME88/bengali/PERMSPL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME88/mandarin/PERMSPL.pdf), [Russian](https://www.codechef.com/download/translated/LTIME88/russian/PERMSPL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME88/vietnamese/PERMSPL.pdf) as well.

For a sequence of positive integers $A_1, A_2, \ldots, A_K$, let's define the number of inversions in it as the number of pairs of integers $(i, j)$ such that $1 \le i \lt j \le K$ and $A_i \gt A_j$.

You are given a permutation $P_1, P_2, \ldots, P_N$ of the integers $1$ through $N$. Determine if it is possible to partition this permutation into two subsequences (possibly empty or non-contiguous) such that:
- Each element of $P$ appears in exactly one of these subsequences.
- The numbers of inversions in one subsequence is equal to the number of inversions in the other subsequence.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $P_1, P_2, \ldots, P_N$.

### Output
For each test case, print a single line containing the string `"YES"` if it is possible to partition the permutation in a given way or `"NO"` if it is impossible.

### Constraints
- $1 \le N \le 100$
- $1 \le P_i \le N$ for each valid $i$
- $P_1, P_2, \ldots, P_N$ are pairwise distinct
- the sum of $N$ over all test cases does not exceed $200$

### Subtasks
**Subtask #1 (20 points):** $N \le 16$

**Subtask #2 (80 points):** original constraints

### Example Input
```
4
1
1
3
3 2 1
4
4 3 2 1
5 
1 4 3 2 5
```

### Example Output
```
YES
NO
YES
NO
```

### Explanation
**Example case 1:** We can split $(1)$ into $(1)$ and $()$. There are $0$ inversions in each of these sequences.

**Example case 3:** We can split $(4, 3, 2, 1)$ into $(4, 3)$ and $(2, 1)$. There is $1$ inversion in each of them. Note that this is not the only solution ― we could also split the permutation into sequences $(4, 1)$ and $(3, 2)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>