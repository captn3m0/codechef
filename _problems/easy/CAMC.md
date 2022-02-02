---
{"category_name":"easy","problem_code":"CAMC","problem_name":"Chef and Minimum Colouring","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1   \r\n4 2  \r\n10 20 15 28","output":5,"explanation":"**Example case 1:** Let\u0027s denote the colours by \u0027R\u0027 (red) and \u0027G\u0027 (green). There are two possible ways of painting the boxes: \u0022RGRG\u0022 and  \u0022GRGR\u0022.\r\n\r\nThere are four ways to choose two boxes (one red and one green box). The numbers of balls in them and the differences are:\r\n- $(10, 28)$ with difference $28-10=18$\r\n- $(10, 20)$ with difference $20-10=10$\r\n- $(15, 28)$ with difference $28-15=13$\r\n- $(15, 20)$ with difference $20-15=5$, which is the smallest possible","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ojasbansal","problem_tester":null,"date_added":"9-10-2019","tags":{"0":"challenge","1":"nov19","2":"ojasbansal","3":"sorting","4":"two","5":"watcher"},"problem_difficulty_level":"Easy","best_tag":"Two Pointers","editorial_url":"https://discuss.codechef.com/problems/CAMC","time":{"view_start_date":1573464602,"submit_start_date":1573464602,"visible_start_date":1573464602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CAMC","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin Chinese](https://www.codechef.com/download/translated/NOV19/mandarin/CAMC.pdf) and [Vietnamese](https://www.codechef.com/download/translated/NOV19/vietnamese/CAMC.pdf) as well.

Chef placed $N$ boxes (numbered $1$ through $N$) in a straight line. For each valid $i$, the $i$-th box contains $A_i$ balls. 

Then, Chef painted the boxes using $M$ distinct colours in such a way that for each $M$ consecutive boxes, no two of these boxes have the same colour.

Help Chef choose $M$ distinct boxes (not necessarily consecutive) such that no two of the chosen boxes have the same colour and the difference between the number of balls in a box that contains the maximum number of balls and a box that contains the minimum number of balls among the chosen boxes is the smallest possible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the minimum possible difference between the maximum and minimum number of balls in the chosen boxes.

### Constraints
- $1 \le T \le 5$
- $2 \le M \le N \le 10^5$
- $1 \le A_i \le 10^9$, for each valid $i$

### Subtasks
**Subtask #1 (30 points):** $N \le 10^3$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1   
4 2  
10 20 15 28
```

### Example Output
```
5
```

### Explanation
**Example case 1:** Let's denote the colours by 'R' (red) and 'G' (green). There are two possible ways of painting the boxes: "RGRG" and  "GRGR".

There are four ways to choose two boxes (one red and one green box). The numbers of balls in them and the differences are:
- $(10, 28)$ with difference $28-10=18$
- $(10, 20)$ with difference $20-10=10$
- $(15, 28)$ with difference $28-15=13$
- $(15, 20)$ with difference $20-15=5$, which is the smallest possible

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>