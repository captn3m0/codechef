---
{"category_name":"easy","problem_code":"PTMSSNG","problem_name":"Missing a Point","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n2\r\n1 1\r\n1 2\r\n4 6\r\n2 1\r\n9 6\r\n9 3\r\n4 3","output":"2 2","explanation":"The original set of points are:     \r\n![fig1](https://i.imgur.com/7oHoe86.png =333x211)\r\n\r\nUpon adding the missing point $(2, 2)$, $N = 2$ rectangles can be formed:    \r\n![fig1](https://i.imgur.com/N8ceCw0.png =333x211)","isDeleted":false}}},"video_editorial_url":"https://youtu.be/fJYWTLKSVaI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sanroylozan","problem_tester":"","date_added":"9-04-2020","tags":{"0":"data","1":"july20","2":"observation","3":"sanroylozan","4":"sanroylozan","5":"simple","6":"sorting"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PTMSSNG","time":{"view_start_date":1594632600,"submit_start_date":1594632600,"visible_start_date":1594632600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PTMSSNG","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY20/hindi/PTMSSNG.pdf), [Bengali](https://www.codechef.com/download/translated/JULY20/bengali/PTMSSNG.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY20/mandarin/PTMSSNG.pdf), [Russian](https://www.codechef.com/download/translated/JULY20/russian/PTMSSNG.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY20/vietnamese/PTMSSNG.pdf) as well.

Chef has $N$ axis-parallel rectangles in a 2D Cartesian coordinate system. These rectangles may intersect, but it is guaranteed that all their $4N$ vertices are pairwise distinct.

Unfortunately, Chef lost one vertex, and up until now, none of his fixes have worked (although putting an image of a point on a milk carton might not have been the greatest idea after all...). Therefore, he gave you the task of finding it! You are given the remaining $4N-1$ points and you should find the missing one.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Then, $4N-1$ lines follow. Each of these lines contains two space-separated integers $x$ and $y$ denoting a vertex $(x, y)$ of some rectangle.

### Output
For each test case, print a single line containing two space-separated integers $X$ and $Y$ ― the coordinates of the missing point. It can be proved that the missing point can be determined uniquely.

### Constraints
- $T \le 100$
- $1 \le N \le 2 \cdot 10^5$
- $|x|, |y| \le 10^9$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$

### Subtasks
**Subtask #1 (20 points):**
- $T = 5$
- $N \le 20$

**Subtask #2 (30 points):** $|x|, |y| \le 10^5$

**Subtask #3 (50 points):** original constraints

### Example Input
```
1
2
1 1
1 2
4 6
2 1
9 6
9 3
4 3
```

### Example Output
```
2 2
```

### Explanation

The original set of points are:     
![fig1](https://i.imgur.com/7oHoe86.png =333x211)

Upon adding the missing point $(2, 2)$, $N = 2$ rectangles can be formed:    
![fig1](https://i.imgur.com/N8ceCw0.png =333x211)
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>