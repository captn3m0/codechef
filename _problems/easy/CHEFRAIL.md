---
{"category_name":"easy","problem_code":"CHEFRAIL","problem_name":"Chef and Railway Stations","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2 2\r\n-4 2\r\n2 -8\r\n8 4\r\n1 2 3 6 -1 -2 -3 -6\r\n6 -6 1 -1","output":"1\r\n8","explanation":"**Example case 1:** There are no triplets where two stations lie on the $x$-axis and one triplet where two stations lie on the $y$-axis, which is $((0, 2), (0, -8), (-4, 0))$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":null,"date_added":"20-11-2019","tags":{"0":"easy","1":"feb20","2":"geometry","3":"math","4":"number","5":"rishup_nitdgp","6":"tmwilliamlin"},"problem_difficulty_level":"Easy-Medium","best_tag":"Number Theory","editorial_url":"https://discuss.codechef.com/problems/CHEFRAIL","time":{"view_start_date":1581931802,"submit_start_date":1581931802,"visible_start_date":1581931802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFRAIL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB20/hindi/CHEFRAIL.pdf), [Bengali](https://www.codechef.com/download/translated/FEB20/bengali/CHEFRAIL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB20/mandarin/CHEFRAIL.pdf), [Russian](https://www.codechef.com/download/translated/FEB20/russian/CHEFRAIL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB20/vietnamese/CHEFRAIL.pdf) as well.

Chef was working on building rail tracks connecting pairs of railway stations in a 2D Cartesian coordinate system. There are $N$ stations on the $x$-axis, with coordinates $x_1, x_2, \ldots, x_N$, and $M$ stations on the $y$-axis, with coordinates $y_1, y_2, \ldots, y_M$. Chef has completed his task and built a rail track (line segment) between each pair of stations.

Now, Chef is wondering how many right triangles have the following property: the vertices are stations and the sides are railway tracks between them. Since Chef is busy with his other projects, help him answer this question.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $x_1, x_2, \ldots, x_N$.
- The third line contains $M$ space-separated integers $y_1, y_2, \ldots, y_M$.

### Output
For each test case, print a single line containing one integer ― the number of right triangles.

### Constraints
- $1 \le T \le 5$
- $1 \le N, M \le 10^5$
- $|x_i| \le 10^5$ for each valid $i$
- $|y_i| \le 10^5$ for each valid $i$
- the positions of the stations are pairwise distinct

### Subtasks
**Subtask #1 (15 points):**
- $N, M \le 10^2$

**Subtask #2 (25 points):**
- $N, M \le 10^3$

**Subtask #3 (60 points):** original constraints

### Example Input
```
2
2 2
-4 2
2 -8
8 4
1 2 3 6 -1 -2 -3 -6
6 -6 1 -1
```

### Example Output
```
1
8
```

### Explanation
**Example case 1:** There are no triplets where two stations lie on the $x$-axis and one triplet where two stations lie on the $y$-axis, which is $((0, 2), (0, -8), (-4, 0))$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>