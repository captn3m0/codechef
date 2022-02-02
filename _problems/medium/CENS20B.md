---
{"category_name":"medium","problem_code":"CENS20B","problem_name":"Cherry and Squares","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"cherry0697","problem_tester":"","date_added":"13-07-2020","tags":{"0":"cens2020","1":"cherry0697","2":"saurabhshadow"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CENS20B","time":{"view_start_date":1597860000,"submit_start_date":1597860000,"visible_start_date":1597860000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CENS20B","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Cherry has a matrix $A$ consisting of $N$ rows and $M$ columns, filled with lowercase English letters.

You are asked $Q$ queries. Each query is provided by four integers $x_{1}$, $y_{1}$, $x_{2}$, $y_{2}$ which define the rectangle, where ($x_{1}$, $y_{1}$) stands for the coordinates of the top left cell of the rectangle, while ($x_{2}$, $y_{2}$) stands for the coordinates of the bottom right cell. The answer to the query is the size of the maximum square, that is located fully inside the query rectangle such that :

1. The characters of each row should be in non-decreasing order.
2. The characters of each column should be in non-decreasing order.

Note: $x_{1}$ represents the row number while $y_{1}$ represents the column number.

###Input:

- The first line of the input contains two integers $N$ and $M$ — the number of rows and the number of columns in the matrix.
- Each of the next $N$ lines contains a string of $M$ lowercase English letters denoting one row of the matrix.
- Next line contains an integer $Q$ — the number of queries.
- Then follow $Q$ lines with queries descriptions. Each of them contains four integers $x_{1}$, $y_{1}$, $x_{2}$, $y_{2}$ — coordinates of the up left and bottom right cells of the query rectangle.

###Output:

Print $Q$  lines. The $i$-th of them should contain the maximum size of the square for the $i$-th query.

###Constraints
- $1 \leq N,M \leq 500$
- $1 \leq Q \leq 10^5$
- $1 \leq x_{1} \leq x_{2} \leq N$
- $1 \leq y_{1} \leq y_{2} \leq M$

###Sample Input:
```
4 4
aaaa
bbaa
cdef
wxyz
3
1 1 4 4
1 2 2 3
3 1 4 4
```

###Sample Output:
```
2
1
2
```

###Explanation:

**Example Case 1:**

**Query 1:** The maximum size square that lies inside the query rectangle is **2**. One of the such squares is: 

$$\begin{bmatrix} aa \\ bb \end{bmatrix}$$

**Query 2:** The maximum size square that lies inside the query rectangle is **1**. One of the such square is:

$$\begin{bmatrix} a \end{bmatrix}$$

**Query 3:** The maximum size square that lies inside the query rectangle is **2**. One of the such square is:

$$\begin{bmatrix} de \\ xy \end{bmatrix}$$
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>