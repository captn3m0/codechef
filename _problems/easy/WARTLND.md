---
{"category_name":"easy","problem_code":"WARTLND","problem_name":"War in Treeland Again","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n5\n1 2 4\n1 3 3\n2 4 1\n2 5 2","output":17,"explanation":"**Example case 1:**\n- $f(1, 2) = \\mathrm{GCD}\\,(4) = 4$\n- $f(1, 3) = \\mathrm{GCD}\\,(3) = 3$\n- $f(1, 4) = \\mathrm{GCD}\\,(4, 1) = 1$\n- $f(1, 5) = \\mathrm{GCD}\\,(4, 2) = 2$\n- $f(2, 3) = \\mathrm{GCD}\\,(4, 3) = 1$\n- $f(2, 4) = \\mathrm{GCD}\\,(1) = 1$\n- $f(2, 5) = \\mathrm{GCD}\\,(2) = 2$\n- $f(3, 4) = \\mathrm{GCD}\\,(3, 4, 1) = 1$\n- $f(3, 5) = \\mathrm{GCD}\\,(3, 4, 2) = 1$\n- $f(4, 5) = \\mathrm{GCD}\\,(1, 2) = 1$","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"ezio_26","problem_tester":null,"date_added":"11-07-2019","tags":{"0":"cook108","1":"divisors","2":"ezio_26","3":"inclusion","4":"taran_1407","5":"union"},"problem_difficulty_level":"Easy","best_tag":"Union Find","editorial_url":"https://discuss.codechef.com/problems/WARTLND","time":{"view_start_date":1563733802,"submit_start_date":1563733802,"visible_start_date":1563733802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=WARTLND","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK108/hindi/WARTLND.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK108/mandarin/WARTLND.pdf), [Russian](https://www.codechef.com/download/translated/COOK108/russian/WARTLND.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK108/vietnamese/WARTLND.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK108/bengali/WARTLND.pdf) as well.

There is a full-scale war taking place in Treeland. Chef needs to travel between cities in Treeland to work, but during the war, it is not safe.

In Treeland, there are $N$ cities (numbered $1$ through $N$) and $N - 1$ bidirectional roads connecting them in such a way that Chef can reach each city from any other city using these roads. Each road is occupied by a unique faction that assigned a positive integer code to it.

Let $f(A, B)$ denote the greatest positive integer which divides the code of each road on the shortest path between cities $A$ and $B$ (the GCD of these codes). If Chef wants to go from city $A$ to city $B$ *safely*, he needs to pay $f(A, B)$ units of money.

Since Chef is not sure between which pairs of cities he is going to travel, he wants to know
$$S = \sum\limits_{i=1}^{N} \sum\limits_{j=i+1}^{N} f(i, j) \,.$$

Help Chef calculate $S$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the next $N-1$ lines contains three space-separated integers $X$, $Y$ and $Z$ denoting that cities $X$ and $Y$ are connected by a road with code $Z$.

### Output
For each test case, print a single line containing one integer $S$.

### Constraints
- $1 \le T \le 10$
- $1 \le N, Z \le 10^5$
- $1 \le X, Y \le N$

### Example Input
```
1
5
1 2 4
1 3 3
2 4 1
2 5 2
```

### Example Output
```
17
```

### Explanation
**Example case 1:**
- $f(1, 2) = \mathrm{GCD}\,(4) = 4$
- $f(1, 3) = \mathrm{GCD}\,(3) = 3$
- $f(1, 4) = \mathrm{GCD}\,(4, 1) = 1$
- $f(1, 5) = \mathrm{GCD}\,(4, 2) = 2$
- $f(2, 3) = \mathrm{GCD}\,(4, 3) = 1$
- $f(2, 4) = \mathrm{GCD}\,(1) = 1$
- $f(2, 5) = \mathrm{GCD}\,(2) = 2$
- $f(3, 4) = \mathrm{GCD}\,(3, 4, 1) = 1$
- $f(3, 5) = \mathrm{GCD}\,(3, 4, 2) = 1$
- $f(4, 5) = \mathrm{GCD}\,(1, 2) = 1$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>