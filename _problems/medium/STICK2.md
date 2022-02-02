---
{"category_name":"medium","problem_code":"STICK2","problem_name":"Stick and polygon","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n4\r\n7\r\n19","output":"2\r\n74\r\n522749","explanation":"**Example case 1:** There are four sticks with lengths $1, 2, 3, 4$. The only subsets from which we can create a polygon are $\\{2, 3, 4\\}$ and $\\{1, 2, 3, 4\\}$. On the other hand, we cannot choose e.g. $\\{1, 2, 3\\}$ because degenerate polygons are not allowed.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":null,"date_added":"31-10-2019","tags":{"0":"chemthan"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1577552402,"submit_start_date":1577552402,"visible_start_date":1577552402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=STICK2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME79/hindi/STICK2.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME79/bengali/STICK2.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME79/mandarin/STICK2.pdf), [Russian](https://www.codechef.com/download/translated/LTIME79/russian/STICK2.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME79/vietnamese/STICK2.pdf) as well.

Creatnx, a 7-year-old child, is playing with $7$ sticks with lengths $1, 2, \ldots, 7$, which can be connected together. He is trying to use some of them to create a polygon. Trans, his father, is looking, and since he is a programmer, he quickly comes up with a problem based on this game:

There are $N$ sticks (line segments) with lengths $1, 2, 3, \ldots, N$. You should choose a non-empty subset of these sticks and create a (simple, non-degenerate) polygon by connecting their endpoints together. How many such subsets of sticks can you choose? Since this number could be large, compute it modulo $10^9 + 7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$.

### Output
For each test case, print a single line containing one integer - the number of subsets that can be chosen, modulo $10^9 + 7$.

### Constraints
- $1 \le T \le 10^5$
- $1 \le N \le 10^5$

### Subtasks
**Subtask #1 (50 points):**
- $1 \le T \le 50$
- $1 \le N \le 50$

**Subtask #2 (50 points):** original constraints

### Example Input
```
3
4
7
19
```

### Example Output
```
2
74
522749
```

### Explanation
**Example case 1:** There are four sticks with lengths $1, 2, 3, 4$. The only subsets from which we can create a polygon are $\{2, 3, 4\}$ and $\{1, 2, 3, 4\}$. On the other hand, we cannot choose e.g. $\{1, 2, 3\}$ because degenerate polygons are not allowed.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>