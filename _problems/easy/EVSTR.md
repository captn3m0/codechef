---
{"category_name":"easy","problem_code":"EVSTR","problem_name":"Even Sequence","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4\r\n1 1 2 1\r\n11\r\n2 2 2 10 2 10 1 1 5 3 5","output":"2\r\n3","explanation":"**Example case 1:** Here are two ways to make the sequence even using $2$ operations:\r\n- Delete the first element $1$ and the only element $2$, resulting in a sequence $(1, 1)$, which is even.\r\n- Delete the last element $1$ and insert $2$ at the end, resulting in a sequence $(1,1,2,2)$, which is even.\r\n\r\nIt can be proved that one operation is not enough to make the initial sequence even.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/6amG0ySHvoM","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sanroylozan","problem_tester":"","date_added":"20-12-2020","tags":{"0":"dynamic","1":"easy","2":"ltime91","3":"sanroylozan","4":"taran_1407"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/EVSTR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EVSTR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME91/hindi/EVSTR.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME91/bengali/EVSTR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME91/mandarin/EVSTR.pdf), [Russian](https://www.codechef.com/download/translated/LTIME91/russian/EVSTR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME91/vietnamese/EVSTR.pdf) as well.

An *even sequence* has the following property: each maximal contiguous subsequence which contains only equal integers (i.e. the same integer repeated a number of times) has an even length. In particular, the empty sequence is even. A subsequence is *maximal* if it is not contained in a larger contiguous subsequence which contains only equal integers.

Chef was given an integer sequence $A_1, A_2, \ldots, A_N$ by his friend Mr. Z. He may perform the following operation any number of times: either delete an element of the current sequence (if it is non-empty) or insert an integer anywhere in the current sequence (possibly at the beginning or at the end).

Find the minimum number of operations needed to make the sequence even.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer — the minimum number of operations.

### Constraints
- $1 \leq T \leq 10$
- $1 \leq N \leq 2 \cdot 10^5$
- $1 \leq A_i \leq N$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^6$

### Subtasks
**Subtask #1 (10 points):** $N \leq 18$

**Subtask #2 (10 points):** $A_i \leq A_{i+1}$ for each valid $i$

**Subtask #3 (20 points):** $N \leq 3,000$

**Subtask #4 (20 points):** $A_i \leq 26$ for each valid $i$

**Subtask #5 (40 points):** original constraints

### Example Input
```
2
4
1 1 2 1
11
2 2 2 10 2 10 1 1 5 3 5
```

### Example Output
```
2
3
```

### Explanation
**Example case 1:** Here are two ways to make the sequence even using $2$ operations:
- Delete the first element $1$ and the only element $2$, resulting in a sequence $(1, 1)$, which is even.
- Delete the last element $1$ and insert $2$ at the end, resulting in a sequence $(1,1,2,2)$, which is even.

It can be proved that one operation is not enough to make the initial sequence even.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>