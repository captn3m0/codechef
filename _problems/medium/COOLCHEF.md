---
{"category_name":"medium","problem_code":"COOLCHEF","problem_name":"Chef and His Dish","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5 3\r\n1 2 3 7 10\r\n1 1 1 1\r\n2 1 3 4\r\n0 0 0 4","output":"1\r\n2\r\n120","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"coolreshab","problem_tester":null,"date_added":"29-04-2019","tags":{"0":"coolreshab","1":"june19","2":"junechallenge"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/COOLCHEF","time":{"view_start_date":1560763800,"submit_start_date":1560763800,"visible_start_date":1560763800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COOLCHEF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE19/hindi/COOLCHEF.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE19/bengali/COOLCHEF.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE19/mandarin/COOLCHEF.pdf), [Russian](https://www.codechef.com/download/translated/JUNE19/russian/COOLCHEF.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE19/vietnamese/COOLCHEF.pdf) as well.

Chef is experimenting in his kitchen. He has $N$ spices (numbered $0$ through $N-1$) with types $S_0, S_1, \ldots, S_{N-1}$.

You should answer $Q$ queries. Each query is described by two integers $L$ and $R$. In each query, Chef wants to use the spices $S_L, S_{L+1}, \ldots, S_R$ in some order to make a dish. However, he has no clue about the order in which he should use them to make a perfect dish, so he wants to try all possible orders (sequences created by permuting these $R-L+1$ spices) to find out. Tell Chef the number of distinct orders (sequences) of spices he needs to try. Since this number can be very large, compute it modulo $10^9+7$.

Two sequences of spices are considered different if there is a valid index $i$ such that the type of the $i$-th spice in one sequence is different from the type of the $i$-th spice used in the other sequence.

Note that the input is encoded so that you have to answer the queries online.
  
### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- The next line contains $N$ space-separated integers $S_0, S_1, S_2, \ldots, S_{N-1}$.
- Each of the next $Q$ lines contains four space-separated integers $L_1$, $L_2$, $R_1$ and $R_2$ describing a query. The parameters $L$ and $R$ can be calculated in the following way:
    - Let's denote the answer to the previous query by $a$; for the first query, $a = 0$.
    - Calculate $L = (L_1 \cdot a + L_2) \% N$ and $R = (R_1 \cdot a + R_2) \% N$.
    - Then, if $L \gt R$, swap $L$ and $R$.

### Output
For each query, print a single line containing one integer — the number of distinct orders of spices modulo $10^9+7$.

### Constraints
- $1 \le N, Q \le 3 \cdot 10^5$
- $1 \le S_i \le 10^9$ for each valid $i$
- $0 \le L_1, L_2, R_1, R_2 \le N-1$

### Subtasks
**Subtask #1 (10 points):** $1 \le N, Q \le 10^3$

**Subtask #2 (40 points):**
- $1 \le N, Q \le 10^5$
- $L_1 = R_1 = 0$

**Subtask #3 (30 points):** $1 \le N, Q \le 10^5$

**Subtask #4 (20 points):** original constraints

### Example Input
```
5 3
1 2 3 7 10
1 1 1 1
2 1 3 4
0 0 0 4
```

### Example Output
```
1
2
120
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>