---
{"category_name":"easy","problem_code":"SFRV","problem_name":"Swapping","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n4\n2 1 4 3\n4\n7 6 3 2","output":"30\n39","explanation":"**Example case 1:** Swap the first and second element of the initial sequence. Then, swap the third and fourth element of the resulting sequence. The final sequence $A$ is $(1, 2, 3, 4)$.\n\n**Example case 2:** Swap the second and third element to make the sequence $(7, 3, 6, 2)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"26-07-2019","tags":{"0":"dynamic","1":"easy","2":"kingofnumbers","3":"ltime74"},"problem_difficulty_level":"Easy","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/SFRV","time":{"view_start_date":1564246800,"submit_start_date":1564246800,"visible_start_date":1564246800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SFRV","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME74/hindi/SFRV.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME74/bengali/SFRV.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME74/mandarin/SFRV.pdf), [Russian](https://www.codechef.com/download/translated/LTIME74/russian/SFRV.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME74/vietnamese/SFRV.pdf) as well.

You are given a sequence $A_1, A_2, \ldots, A_N$. You may perform the following operation an arbitrary number of times (including zero): choose two adjacent elements of this sequence, i.e. $A_i$, $A_{i+1}$ for some valid $i$, and swap them. However, for each valid $i$, it is not allowed to choose $A_i$ (the element with the index $i$, regardless of its value at any point in time) more than once in total during this process.

Find the maximum of the sum $S = \sum_{i=1}^N A_i \cdot i$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the maximum possible value of $S$.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):**
- $N \le 20$
- the sum of $N$ over all test cases does not exceed $200$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
4
2 1 4 3
4
7 6 3 2
```

### Example Output
```
30
39
```

### Explanation
**Example case 1:** Swap the first and second element of the initial sequence. Then, swap the third and fourth element of the resulting sequence. The final sequence $A$ is $(1, 2, 3, 4)$.

**Example case 2:** Swap the second and third element to make the sequence $(7, 3, 6, 2)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>