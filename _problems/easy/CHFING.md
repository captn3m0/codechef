---
{"category_name":"easy","problem_code":"CHFING","problem_name":"Chef and Ingredients","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2 1\r\n3 3","output":"0\r\n2","explanation":"**Example case 1:** It is possible to obtain ingredients with all values of tastiness.\r\n\r\n**Example case 2:** Ingredients with tastiness $1$ and $2$ cannot be made.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":null,"date_added":"28-04-2019","tags":{"0":"june19","1":"junechallenge","2":"rishup_nitdgp"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHFING","time":{"view_start_date":1560763800,"submit_start_date":1560763800,"visible_start_date":1560763800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHFING","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE19/hindi/CHFING.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE19/bengali/CHFING.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE19/mandarin/CHFING.pdf), [Russian](https://www.codechef.com/download/translated/JUNE19/russian/CHFING.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE19/vietnamese/CHFING.pdf) as well.

Chef wants to make a feast. In order to do that, he needs a lot of different ingredients. Each ingredient has a certain *tastiness*; the tastiness of each ingredient may be any positive integer. Initially, for each tastiness between $K$ and $K+N-1$ (inclusive), Chef has an infinite supply of ingredients with this tastiness.

The ingredients have a special property: any two of them can be mixed to create a new ingredient. If the original ingredients had tastiness $x$ and $y$ (possibly $x = y$), the new ingredient has tastiness $x+y$. The ingredients created this way may be used to mix other ingredients as well. Chef is free to mix ingredients in any way he chooses any number of times.

Let's call a tastiness $v$ ($v \gt 0$) *unreachable* if there is no way to obtain an ingredient with tastiness $v$; otherwise, tastiness $v$ is *reachable*. Chef wants to make ingredients with all reachable values of tastiness and he would like to know the number of unreachable values. Help him solve this problem. Since the answer may be large, compute it modulo $1,000,000,007$ ($10^9+7$).

Note that there is an infinite number of reachable values of tastiness, but it can be proven that the number of unreachable values is always finite for $N \ge 2$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $K$.

### Output
For each test case, print a single line containing one integer — the number of unreachable values of tastiness, modulo $1,000,000,007$.

### Constraints
- $1 \le T \le 10^5$
- $2 \le N \le 10^{18}$
- $1 \le K \le 10^{18}$

### Subtasks
**Subtask #1 (20 points):** $N = 2$

**Subtask #2 (80 points):** original constraints

### Example Input
```
2
2 1
3 3
```

### Example Output
```
0
2
```

### Explanation
**Example case 1:** It is possible to obtain ingredients with all values of tastiness.

**Example case 2:** Ingredients with tastiness $1$ and $2$ cannot be made.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>