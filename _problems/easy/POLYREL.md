---
{"category_name":"easy","problem_code":"POLYREL","problem_name":"Polygon Relationship","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4\r\n-100 1\r\n0 2\r\n0 0\r\n100 1\r\n7\r\n-4 0\r\n-3 -2\r\n-3 2\r\n0 -4\r\n2 -3\r\n2 3\r\n3 2","output":"4\r\n10","explanation":"**Example case 1:** It is not possible to draw a child polygon.\r\n\r\n**Example case 2:** We can draw a child polygon once, e.g. with vertices $(-3, -2)$, $(-3, 2)$ and $(3, 2)$. Even though there are several other ways to draw a child polygon, it can only be a triangle, so the total number of sides cannot exceed $7+3 = 10$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/bQoqZqo0r-U","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"pandey__ji","problem_tester":"","date_added":"15-08-2020","tags":{"0":"cook121","1":"easy","2":"geometry","3":"greedy","4":"pandey__ji","5":"pandey__ji","6":"psychik"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/POLYREL","time":{"view_start_date":1598208302,"submit_start_date":1598208302,"visible_start_date":1598208302,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=POLYREL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK121/hindi/POLYREL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK121/mandarin/POLYREL.pdf), [Russian](https://www.codechef.com/download/translated/COOK121/russian/POLYREL.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK121/vietnamese/POLYREL.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK121/bengali/POLYREL.pdf) as well.

You are given a strictly convex polygon with $N$ vertices (numbered $1$ through $N$). For each valid $i$, the coordinates of the $i$-th vertex are $(X_i, Y_i)$. You may perform the following operation any number of times (including zero):
- Consider a *parent polygon*. Initially, this is the polygon you are given.
- Draw one of its *child polygons* ― a simple non-degenerate polygon such that each of its sides is a chord of the parent polygon (it cannot be a side of the parent polygon). The operation cannot be performed if the parent polygon does not have any child polygons.
- The child polygon which you drew becomes the new parent polygon.

Your goal is to draw as many sides of polygons in total as possible (including the polygon given at the start). Find this maximum total number of sides.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $X_i$ and $Y_i$.

### Output
Print a single line containing one integer ― the maximum possible number of sides of polygons.

### Constraints
- $1 \le T \le 1,000$
- $3 \le N \le 10^5$
- $|X_i|, |Y_i| \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^6$

### Example Input
```
2
4
-100 1
0 2
0 0
100 1
7
-4 0
-3 -2
-3 2
0 -4
2 -3
2 3
3 2
```

### Example Output
```
4
10
```

### Explanation
**Example case 1:** It is not possible to draw a child polygon.

**Example case 2:** We can draw a child polygon once, e.g. with vertices $(-3, -2)$, $(-3, 2)$ and $(3, 2)$. Even though there are several other ways to draw a child polygon, it can only be a triangle, so the total number of sides cannot exceed $7+3 = 10$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>