---
{"category_name":"easy","problem_code":"ROBOTS","problem_name":"Robots in Chefland","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"17-11-2019","tags":{"0":"cook112","1":"easy","2":"geometry","3":"kingofnumbers","4":"prefix","5":"taran_1407","6":"trigonometry"},"problem_difficulty_level":"Easy-Medium","best_tag":"Prefix Sum","editorial_url":"https://discuss.codechef.com/problems/ROBOTS","time":{"view_start_date":1574015400,"submit_start_date":1574015400,"visible_start_date":1574015400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ROBOTS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK112/hindi/ROBOTS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK112/mandarin/ROBOTS.pdf), [Russian](https://www.codechef.com/download/translated/COOK112/russian/ROBOTS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK112/vietnamese/ROBOTS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK112/bengali/ROBOTS.pdf) as well.

Chefland is a big city which consists of infinite number of junctions on a 2D plane. The junctions are depicted below and they form a hexagonal grid — they satisfy the following conditions:
- Two of the junctions have coordinates $(0,0)$ and $(1,0)$.
- Each junction $J$ is connected by line segments with six other junctions. These junctions are the vertices of a regular hexagon with side length $1$ and their distances from $J$ are also all equal to $1$.

![](https://codechef_shared.s3.amazonaws.com/download/Images/COOK112/ROBOTS/ROBOTS.png)

Chef created a robot that can traverse the junctions. Initially, it is in some junction and oriented towards another junction which is connected to it by a line segment. The robot accepts a string of instructions — decimal digits $0$ through $5$. It executes the instructions one by one and stops after executing the final instruction. When the robot executes an instruction denoted by a digit $d$, it first rotates by $60 \cdot d$ degrees counterclockwise and then moves $1$ unit forward, to the junction it is oriented towards.

Chef wants to test the robot, so he wrote a string $S$ of $N$ instructions. You should answer $Q$ queries. In each query, Chef wants to give the robot a substring of instructions $S_L, S_{L+1}, \ldots, S_R$; the robot starts in the junction $(0, 0)$ and it is oriented towards $(1, 0)$. You should find the final position (the $x$- and $y$-coordinates) of the robot.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains a single string $S$ with length $N$.
- $Q$ lines follow. Each of these lines contains two space-separated integers $L$ and $R$ describing a query.

### Output
For each query, print a single line containing two space-separated real numbers — the coordinates of the robot. Your answer will be considered correct if the absolute or relative error of each coordinate does not exceed $10^{-6}$.

**Warning:** Outputting more than 8 digits after floating point may result in exceeding output size limit and receiving "Runtime error" verdict.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N, Q \le 2 \cdot 10^5$
- $1 \le L \le R \le N$
- $S$ contains only characters '0', '1', '2', '3', '4' and '5'
- the sum of $N$ over all test cases does not exceed $10^6$
- the sum of $Q$ over all test cases does not exceed $10^6$

### Example Input
```
1
3 3
012
1 1
1 2
2 2
```

### Example Output
```
1.00000000 0.00000000
1.50000000 0.86602540
0.50000000 0.86602540
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>