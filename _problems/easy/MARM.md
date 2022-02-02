---
{"category_name":"easy","problem_code":"MARM","problem_name":"Array Modification","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n2 2\r\n1 2","output":"3 1","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mayank1601","problem_tester":null,"date_added":"1-09-2019","tags":{"0":"array","1":"mayank1601","2":"oct19","3":"r_64","4":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MARM","time":{"view_start_date":1571045400,"submit_start_date":1571045400,"visible_start_date":1571045400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MARM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/OCT19/hindi/MARM.pdf), [Bengali](https://www.codechef.com/download/translated/OCT19/bengali/MARM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT19/mandarin/MARM.pdf), [Russian](https://www.codechef.com/download/translated/OCT19/russian/MARM.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT19/vietnamese/MARM.pdf) as well.

Chef is really interested in the XOR operation. He wants to take a sequence $A_0, A_1, \ldots, A_{N-1}$ and for each $i$ from $0$ to $K-1$ inclusive (in this order, one by one), perform the following operation:
- Let's denote $a = A_{i\%N}$ and $b = A_{N-(i\%N)-1}$ before this operation.
- Change $A_{i\%N}$ to $a \oplus b$, i.e. $a$ XOR $b$.

Since Chef is busy, he asked you to find the final sequence he should get after performing these operations.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_0, A_1, \ldots, A_{N-1}$.

### Output
For each test case, print a single line containing $N$ space-separated integers ― the elements of the final sequence.

### Constraints
- $1 \le T \le 70$
- $1 \le N \le 10^4$
- $1 \le K \le 10^{12}$
- $1 \le A_i \le 10^7$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):** $1 \le K \le 10^6$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
2 2
1 2
```

### Example Output
```
3 1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>