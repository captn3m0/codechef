---
{"category_name":"medium","problem_code":"ABSNX","problem_name":"Absolute Min Max","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3\r\n1 2 3","output":6,"explanation":"**Example case 1:** All contiguous subsequences, i.e. $[1]$, $[2]$, $[3]$, $[1,2]$, $[2,3]$ and $[1,2,3]$, are fruitful.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vitz_6","problem_tester":null,"date_added":"16-05-2020","tags":{"0":"fenwick","1":"ltime84","2":"medium","3":"stack","4":"taran_1407","5":"vitz_6"},"problem_difficulty_level":"Medium","best_tag":"Fenwick Tree","editorial_url":"https://discuss.codechef.com/problems/ABSNX","time":{"view_start_date":1590858002,"submit_start_date":1590858002,"visible_start_date":1590858002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ABSNX","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME84/hindi/ABSNX.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME84/bengali/ABSNX.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME84/mandarin/ABSNX.pdf), [Russian](https://www.codechef.com/download/translated/LTIME84/russian/ABSNX.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME84/vietnamese/ABSNX.pdf) as well.

Chef is given a sequence of integers $A_1, A_2, \ldots, A_N$.

Chef considers a contiguous subsequence $A_l, A_{l+1}, \ldots, A_r$ (where $1 \le l \le r \le N$) *fruitful* if it satisfies the condition
$$|A_l - A_r| = \mathrm{max}(A_l, A_{l+1}, \ldots, A_r) - \mathrm{min}(A_l, A_{l+1}, \ldots, A_r) \,.$$

Please help Chef find the number of fruitful contiguous subsequences of the sequence $A$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the number of fruitful contiguous subsequences.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 250,000$
- $1 \le A_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (20 points):** $N \le 2,000$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1
3
1 2 3
```

### Example Output
```
6
```

### Explanation
**Example case 1:** All contiguous subsequences, i.e. $[1]$, $[2]$, $[3]$, $[1,2]$, $[2,3]$ and $[1,2,3]$, are fruitful.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>