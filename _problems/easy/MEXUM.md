---
{"category_name":"easy","problem_code":"MEXUM","problem_name":"Positive Mex","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2\r\n1 1\r\n3\r\n1 2 1","output":"7\r\n17","explanation":"**Example case 1:** The values for all possible subsequences are $f([])=1$, $f([1])=2$, $f([1])=2$, $f([1,1])=2$.\r\n\r\n**Example case 2:** The values for all possible subsequences are $f([])=1$, $f([1])=2$, $f([2])=1$, $f([1])=2$, $f([1,2])=3$, $f([2,1])=3$, $f([1,1])=2$, $f([1,2,1])=3$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"nirjhor","problem_tester":null,"date_added":"20-04-2020","tags":{"0":"combinatorics","1":"easy","2":"ltime83","3":"nirjhor","4":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MEXUM","time":{"view_start_date":1587834602,"submit_start_date":1587834602,"visible_start_date":1587834602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MEXUM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME83/hindi/MEXUM.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME83/bengali/MEXUM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME83/mandarin/MEXUM.pdf), [Russian](https://www.codechef.com/download/translated/LTIME83/russian/MEXUM.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME83/vietnamese/MEXUM.pdf) as well.

Chef recently read about the mex function and came up with a function similar to that. For a (possibly empty) sequence of positive integers $S$, Chef defines $f(S)$ as the smallest positive integer that does not appear in $S$. For example, $f([])=1$, $f([3,4,3,5])=1$, $f([2,5,1,1,2,3])=4$.

Chef's friend heard about Chef's idea and found it really cool. Therefore, he sent a sequence $a_1, a_2, \ldots, a_N$ to Chef and asked him to find the sum of $f(S)$ over all $2^N$ possible subsequences $S$ of this sequence. Since Chef is busy, he entrusted you with solving the problem.

Since the resulting sum can be very big, compute it modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
For each test case, print a single line containing one integer ― the sum of $f(S)$ over all subsequences modulo $998,244,353$.

### Constraints
- $1 \le T \le 50$
- $1 \le N \le 10^5$
- $1 \le a_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$

### Subtasks
**Subtask #1 (50 points):** the sum of $N$ over all test cases does not exceed $1,000$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
2
1 1
3
1 2 1
```

### Example Output
```
7
17
```

### Explanation
**Example case 1:** The values for all possible subsequences are $f([])=1$, $f([1])=2$, $f([1])=2$, $f([1,1])=2$.

**Example case 2:** The values for all possible subsequences are $f([])=1$, $f([1])=2$, $f([2])=1$, $f([1])=2$, $f([1,2])=3$, $f([2,1])=3$, $f([1,1])=2$, $f([1,2,1])=3$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>