---
{"category_name":"medium","problem_code":"SHENQ","problem_name":"Quest for Dragon Balls","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2\r\n2 2\r\n3\r\n1 3 5","output":"1\r\n5\r\n2\r\n1 8","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ramzz","problem_tester":"","date_added":"8-08-2020","tags":{"0":"construction","1":"ltime87","2":"maths","3":"medium","4":"psychik","5":"ramzz","6":"ramzz"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SHENQ","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SHENQ","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME87/hindi/SHENQ.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME87/bengali/SHENQ.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME87/mandarin/SHENQ.pdf), [Russian](https://www.codechef.com/download/translated/LTIME87/russian/SHENQ.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME87/vietnamese/SHENQ.pdf) as well.

There are seven magical dragon balls in total scattered across the Earth. Upon collecting all seven of them, one can summon the divine dragon Shenron by chanting magical words. The dragon would then grant any one wish of the summoner.

Chef and his two friends Ramzz and Raju embarked on a journey to collect all seven magical dragon balls. After much difficulty, they have collected them all and proceeded to summon Shenron by chanting magical words. Upon arrival, Shenron told the three friends that he would grant their wish only if they solve the following problem.

You are given a sequence of integers $A_1, A_2, \ldots, A_N$, on which you may perform operations of the following two types:
1. Choose two consecutive odd elements and replace them by a single element ― their sum. For example, the sequence $[1, 2, \underline{3}, \underline{3}, 4]$ may be changed to $[1, 2, \underline{6}, 4]$ (the replaced elements are underlined).
2. Choose two consecutive even elements and replace them by a single element ― their sum plus $1$. For example, the sequence $[1, \underline{2}, \underline{2}, 3, 4]$ may be changed to $[1, \underline{5}, 3, 4]$.

Your goal is to create a sequence whose length is the smallest possible. If there are multiple sequences with this minimum length, find the most beautiful one among them. (A sequence $A_1, A_2, \ldots, A_M$ is *more beautiful* than a sequence $B_1, B_2, \ldots, B_M$ if there is a valid index $i$ such that $A_i \lt B_i$ and for each valid $j \lt i$, $A_j = B_j$.)

Help Chef and his friends Ramzz and Raju solve Shenron's problem.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print two lines.
- The first of these lines should contain a single integer $K$ ― the smallest possible length of the final sequence.
- The second line should contain $K$ space-separated integers ― the most beautiful final sequence with length $K$.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 10^5$
- $0 \le A_i \le 10^6$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):** $A_1, A_2, \ldots, A_N$ are either all odd or all even

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
2
2 2
3
1 3 5
```

### Example Output
```
1
5
2
1 8
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>