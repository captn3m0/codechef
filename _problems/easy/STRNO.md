---
{"category_name":"easy","problem_code":"STRNO","problem_name":"Strange Number","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4 2","output":1,"explanation":"**Example case 1:** $A = 6$ has $X = 4$ factors: $1$, $2$, $3$ and $6$. It also has exactly $K = 2$ prime factors: $2$ and $3$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"krikti","problem_tester":null,"date_added":"1-01-2020","tags":{"0":"april20","1":"easy","2":"krikti","3":"number","4":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"Number Theory","editorial_url":"https://discuss.codechef.com/problems/STRNO","time":{"view_start_date":1586779202,"submit_start_date":1586779202,"visible_start_date":1586779202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=STRNO","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/APRIL20/hindi/STRNO.pdf), [Bengali](https://www.codechef.com/download/translated/APRIL20/bengali/STRNO.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL20/mandarin/STRNO.pdf), [Russian](https://www.codechef.com/download/translated/APRIL20/russian/STRNO.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL20/vietnamese/STRNO.pdf) as well.

When Varsha was travelling home, she saw a mysterious villa. Varsha is curious about this strange villa and wants to explore it. When she reached the entry gate, the guard gave her a problem to solve and said that he would allow her to enter the villa only if she solved it.

The guard gave Varsha two integers $X$ and $K$. Varsha needs to determine whether there is an integer $A$ such that it has exactly $X$ positive integer divisors and exactly $K$ of them are prime numbers.

Varsha found this problem really hard to solve. Can you help her?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $X$ and $K$.

### Output
For each test case, print a single line containing one integer: $1$ if a valid integer $A$ exists or $0$ if it does not exist.

### Constraints
- $1 \le T \le 10^3$
- $1 \le X, K \le 10^9$

### Subtasks
**Subtask #1 (15 points):**
- $T \le 100$
- $K \le 2$

**Subtask #2 (85 points):** original constraints

### Example Input
```
1
4 2
```

### Example Output
```
1
```

### Explanation
**Example case 1:** $A = 6$ has $X = 4$ factors: $1$, $2$, $3$ and $6$. It also has exactly $K = 2$ prime factors: $2$ and $3$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>