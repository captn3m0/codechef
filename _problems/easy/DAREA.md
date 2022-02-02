---
{"category_name":"easy","problem_code":"DAREA","problem_name":"Minimum Dual Area","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n1\r\n100 100\r\n4\r\n1 100\r\n100 100\r\n100 1\r\n1 1\r\n5\r\n1 100\r\n100 100\r\n100 1\r\n1 1\r\n50 50","output":"0\r\n0\r\n4851","explanation":"**Case 1:** Since there is only one point, the minimum area of a rectangle to cover this point is $0$.\r\n\r\n**Case 2:** We can have rectangles as $2$ opposite sides of the square. Since the width of the rectangles is $0$, the total area is also $0$.\r\n\r\n\u003Cimg src=\u0022https://s3.amazonaws.com/codechef_shared/download/Images/MARCH21/DAANISH/2.png\u0022 width=\u0022450\u0022 height=\u0022378\u0022 /\u003E\r\n\r\n**Case 3:** The optimal solution is with the rectangles having endpoints $\\{(1, 1), (100, 1), (1, 50), (100, 50)\\}$ and $\\{(1, 100), (1, 100), (100, 100), (100, 100)\\}$. Therefore the total area is $49 \\cdot 99 + 0 \\cdot 99 = 4851$\r\n\r\n\u003Cimg src=\u0022https://s3.amazonaws.com/codechef_shared/download/Images/MARCH21/DAANISH/3.png\u0022 width=\u0022450\u0022 height=\u0022378\u0022 /\u003E","isDeleted":false}}},"video_editorial_url":"https://youtu.be/NoHjFIRnpOs","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"iscsi","date_added":"9-02-2021","tags":{"0":"daanish_adm","1":"easy","2":"june21","3":"prefix"},"problem_difficulty_level":"Easy","best_tag":"Prefix Suffix","editorial_url":"https://discuss.codechef.com/problems/DAREA","time":{"view_start_date":1623663000,"submit_start_date":1623663000,"visible_start_date":1623663000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DAREA","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Vietnamese](https://www.codechef.com/download/translated/JUNE21/vietnamese/DAREA.pdf),
[Bengali](https://www.codechef.com/download/translated/JUNE21/bengali/DAREA.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE21/mandarin/DAREA.pdf), and [Russian](https://www.codechef.com/download/translated/JUNE21/russian/DAREA.pdf) as well. 

Given $N$ points in a $2D$ space, find the minimum sum of areas of rectangles required to cover all the points given that we can use at most $2$ non-overlapping rectangles whose sides can touch. The rectangles must be axis-aligned, meaning the sides are vertical and horizontal.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains $N + 1$ lines of input.
- The first line contains a single integer $N$, the number of points. 
- The next $N$ lines each contains two integers $x_i$, $y_i$, the coordinates of the $i$-th point.

**Note:** Points need not be distinct.

###Output
For each test case, output in a single line the answer to the problem.

###Constraints 
- $1 \leq T \leq 10^5$
- $1 \leq N \leq 10^5$
- $0 \leq x_i, y_i \leq 10^9$
- The sum of $N$ over all test cases is at most $10^5$.

### Subtasks
**Subtask #1 (100 points):** original constraints

###Sample Input
```
3
1
100 100
4
1 100
100 100
100 1
1 1
5
1 100
100 100
100 1
1 1
50 50
```

###Sample Output
```
0
0
4851
```
	
###Explanation
**Case 1:** Since there is only one point, the minimum area of a rectangle to cover this point is $0$.

**Case 2:** We can have rectangles as $2$ opposite sides of the square. Since the width of the rectangles is $0$, the total area is also $0$.

<img src="https://s3.amazonaws.com/codechef_shared/download/Images/MARCH21/DAANISH/2.png" width="450" height="378" />

**Case 3:** The optimal solution is with the rectangles having endpoints $\{(1, 1), (100, 1), (1, 50), (100, 50)\}$ and $\{(1, 100), (1, 100), (100, 100), (100, 100)\}$. Therefore the total area is $49 \cdot 99 + 0 \cdot 99 = 4851$

<img src="https://s3.amazonaws.com/codechef_shared/download/Images/MARCH21/DAANISH/3.png" width="450" height="378" />
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>