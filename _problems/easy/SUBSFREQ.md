---
{"category_name":"easy","problem_code":"SUBSFREQ","problem_name":"Subsequence Frequency Counting","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3\r\n2 2 3\r\n2\r\n1 2\r\n3\r\n1 2 2","output":"0 6 1\r\n2 1\r\n3 4 0","explanation":"**Example case 3:** There are $7$ non-empty subsequences:\r\n- $[1]$ (Chef writes down $1$)\r\n- $[2]$ (Chef writes down $2$)\r\n- $[2]$ (Chef writes down $2$)\r\n- $[1, 2]$ (Chef writes down $1$)\r\n- $[1, 2]$ (Chef writes down $1$)\r\n- $[2, 2]$ (Chef writes down $2$)\r\n- $[1, 2, 2]$ (Chef writes down $2$)","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"bthero","problem_tester":"","date_added":"3-05-2020","tags":{"0":"aug20","1":"bthero","2":"bthero","3":"daniel_1999","4":"dynamic","5":"greedy","6":"maths","7":"medium","8":"rishup_nitdgp"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/SUBSFREQ","time":{"view_start_date":1597656602,"submit_start_date":1597656602,"visible_start_date":1597656602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SUBSFREQ","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/AUG20/hindi/SUBSFREQ.pdf), [Bengali](https://www.codechef.com/download/translated/AUG20/bengali/SUBSFREQ.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG20/mandarin/SUBSFREQ.pdf), [Russian](https://www.codechef.com/download/translated/AUG20/russian/SUBSFREQ.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG20/vietnamese/SUBSFREQ.pdf) as well.

Chef has a sequence of integers $A_1, A_2, \ldots, A_N$. He takes a sheet of paper and for each non-empty subsequence $B$ of this sequence, he does the following:
1. For each integer which appears in $B$, count its number of occurrences in the sequence $B$.
2. Choose the integer with the largest number of occurrences. If there are several options, choose the smallest one.
3. Finally, write down the chosen integer (an element of $B$) on the sheet of paper.

For each integer between $1$ and $N$ inclusive, find out how many times it appears on Chef's sheet of paper. Since these numbers may be very large, compute them modulo $1,000,000,007$ ($10^9 + 7$).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing $N$ space-separated integers. For each valid $i$, the $i$-th of these integers should be the number of occurrences of $i$ on Chef's sheet of paper.

### Constraints
- $1 \le T \le 100$
- $1 \le A_i \le N$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $500,000$

### Subtasks
**Subtask #1 (20 points):** the sum of $N$ over all test cases does not exceed $5,000$

**Subtask #2 (10 points):** $A_1, A_2, \ldots, A_N$ is a permutation of the integers $1$ through $N$

**Subtask #3 (70 points):** original constraints

### Example Input
```
3
3
2 2 3
2
1 2
3
1 2 2
```

### Example Output
```
0 6 1
2 1
3 4 0
```

### Explanation
**Example case 3:** There are $7$ non-empty subsequences:
- $[1]$ (Chef writes down $1$)
- $[2]$ (Chef writes down $2$)
- $[2]$ (Chef writes down $2$)
- $[1, 2]$ (Chef writes down $1$)
- $[1, 2]$ (Chef writes down $1$)
- $[2, 2]$ (Chef writes down $2$)
- $[1, 2, 2]$ (Chef writes down $2$)

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>