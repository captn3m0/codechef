---
{"category_name":"school","problem_code":"SNUG_FIT","problem_name":"School of Geometry","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4\r\n8 8 10 12\r\n15 20 3 5\r\n3\r\n20 20 20\r\n10 10 10","output":"30\r\n30","explanation":"**Example case 1:** Four rectangles with dimensions $8 \\times 3$, $8 \\times 5$, $10 \\times 20$ and $12 \\times 15$ lead to an optimal answer.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sahi1422","problem_tester":null,"date_added":"21-01-2020","tags":{"0":"cakewalk","1":"feb20","2":"geometry","3":"greedy","4":"sahi1422","5":"tmwilliamlin"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SNUG_FIT","time":{"view_start_date":1581931802,"submit_start_date":1581931802,"visible_start_date":1581931802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SNUG_FIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB20/hindi/SNUG_FIT.pdf), [Bengali](https://www.codechef.com/download/translated/FEB20/bengali/SNUG_FIT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB20/mandarin/SNUG_FIT.pdf), [Russian](https://www.codechef.com/download/translated/FEB20/russian/SNUG_FIT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB20/vietnamese/SNUG_FIT.pdf) as well.

Once again, we have a lot of requests from coders for a challenging problem on geometry. Geometry expert Nitin is thinking about a problem with parabolas, icosahedrons, crescents and trapezoids, but for now, to encourage beginners, he chooses to work with circles and rectangles.

You are given two sequences $A_1, A_2, \ldots, A_N$ and $B_1, B_2, \ldots, B_N$. You should choose a permutation $P_1, P_2, \ldots, P_N$ of the integers $1$ through $N$ and construct $N$ rectangles with dimensions $A_1 \times B_{P_1}, A_2 \times B_{P_2}, \ldots, A_N \times B_{P_N}$. Then, for each of these rectangles, you should construct an inscribed circle, i.e. a circle with the maximum possible area that is completely contained in that rectangle.

Let $S$ be the sum of diameters of these $N$ circles. Your task is to find the maximum value of $S$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$. 
- The third line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$. 

### Output
For each test case, print a single line containing one integer ― the maximum value of $S$. It is guaranteed that this value is always an integer.

### Constraints
- $1 \le T \le 50$
- $1 \le N \le 10^4$
- $1 \le A_i, B_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (20 points):**
- $A_1 = A_2 = \ldots = A_N$
- $B_1 = B_2 = \ldots = B_N$

**Subtask #2 (80 points):** original constraints

### Example Input
```
2
4
8 8 10 12
15 20 3 5
3
20 20 20
10 10 10
```

### Example Output
```
30
30
```

### Explanation
**Example case 1:** Four rectangles with dimensions $8 \times 3$, $8 \times 5$, $10 \times 20$ and $12 \times 15$ lead to an optimal answer.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>