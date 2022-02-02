---
{"category_name":"easy","problem_code":"CHKPTS","problem_name":"Checkpoints","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3 1\r\n1 1\r\n1 0\r\n3 2","output":"2 2","explanation":"**Example case 1:** One optimal solution is to set up checkpoints at coordinates $(1, 1)$ and $(1, 0)$. Since the points $(1, 1)$ and $(1, 0)$ are already located at checkpoints, Chef can just move the point $(3, 2)$ to the checkpoint $(1, 0)$ in two moves: $(3, 2) \\rightarrow (2, 1) \\rightarrow (1, 0)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tasmeemreza","problem_tester":null,"date_added":"15-06-2020","tags":{"0":"cook119","1":"easy","2":"taran_1407","3":"tasmeemreza"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHKPTS","time":{"view_start_date":1592764202,"submit_start_date":1592764202,"visible_start_date":1592764202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHKPTS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK119/hindi/CHKPTS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK119/mandarin/CHKPTS.pdf), [Russian](https://www.codechef.com/download/translated/COOK119/russian/CHKPTS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK119/vietnamese/CHKPTS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK119/bengali/CHKPTS.pdf) as well.

Chef has $N$ points (numbered $1$ through $N$) in a 2D Cartesian coordinate system. For each valid $i$, the $i$-th point is $(x_i, y_i)$. He also has a fixed integer $c$ and he may perform operations of the following type: choose a point $(x_i, y_i)$ and move it to $(x_i + c, y_i + c)$ or $(x_i - c, y_i - c)$.

Now, Chef wants to set up one or more *checkpoints* (points in the same coordinate system) and perform zero or more operations in such a way that after they are performed, each of his (moved) $N$ points is located at one of the checkpoints.

Chef's primary objective is to minimise the number of checkpoints. Among all options with this minimum number of checkpoints, he wants to choose one which minimises the number of operations he needs to perform.

Can you help Chef find the minimum number of required checkpoints and the minimum number of operations he needs to perform to move all $N$ points to these checkpoints?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $c$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $x_i$ and $y_i$.

### Output
For each test case, print a single line containing two integers ― the minimum number of checkpoints and the minimum number of moves.

### Constraints
- $1 \le T \le 5$
- $1 \le N \le 5 \cdot 10^5$
- $|x_i|, |y_i| \le 10^9$ for each valid $i$
- $0 \lt c \le 10^9$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$

### Example Input
```
1
3 1
1 1
1 0
3 2
```

### Example Output
```
2 2
```

### Explanation
**Example case 1:** One optimal solution is to set up checkpoints at coordinates $(1, 1)$ and $(1, 0)$. Since the points $(1, 1)$ and $(1, 0)$ are already located at checkpoints, Chef can just move the point $(3, 2)$ to the checkpoint $(1, 0)$ in two moves: $(3, 2) \rightarrow (2, 1) \rightarrow (1, 0)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>