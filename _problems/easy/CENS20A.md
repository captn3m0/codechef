---
{"category_name":"easy","problem_code":"CENS20A","problem_name":"Cherry and Bits","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/yTkYKR9Esj4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"cherry0697","problem_tester":"","date_added":"13-07-2020","tags":{"0":"cens2020","1":"cherry0697","2":"saurabhshadow"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CENS20A","time":{"view_start_date":1597860000,"submit_start_date":1597860000,"visible_start_date":1597860000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CENS20A","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Cherry has a binary matrix $A$ consisting of $N$ rows and $M$ columns. The rows are numbered from $1$ to $N$, columns are numbered from $1$ to $M$. Element at row $i$ ($1$ ≤ $i$ ≤ $N$) and column $j$ ($1$ ≤ $j$ ≤ $M$) is denoted as $A_{ij}$. All elements of $A$ are either $0$ or $1$.

He performs $Q$ queries on matrix. Each query is provided by four integers $x_{1}$, $y_{1}$, $x_{2}$, $y_{2}$ which define the rectangle, where ($x_{1}$, $y_{1}$) stands for the coordinates of the top left cell of the rectangle, while ($x_{2}$, $y_{2}$) stands for the coordinates of the bottom right cell. You need to flip all the bits i.e. ($0$ to $1$, $1$ to $0$) that are located fully inside the query rectangle.

Finally, print the matrix after performing all the queries.

Note: $x_{1}$ represents the row number while $y_{1}$ represents the column number.

###Input:

- The first line of the input contains two integers $N$ and $M$ — the number of rows and the number of columns in the matrix.
- Each of the next $N$ lines contains a string of length $M$, where the $j^{th}$ character of $i^{th}$ line denotes the value of $A_{i,j}$. 
- Next line contains an integer $Q$ — the number of queries.
- Then follow $Q$ lines with queries descriptions. Each of them contains four space-seperated integers $x_{1}$, $y_{1}$, $x_{2}$, $y_{2}$ — coordinates of the up left and bottom right cells of the query rectangle.

###Output:

Print the matrix, in the form of $N$ strings, after performing all the queries.

###Constraints 
- $1 \leq N,M \leq 1000$
- $0 \leq  A_{ij}  \leq 1$
- $1 \leq Q \leq 10^6$
- $1 \leq x_{1} \leq x_{2} \leq N$
- $1 \leq y_{1} \leq y_{2} \leq M$

###Sample Input:
```
2 2
00
00
3
1 1 1 1
2 2 2 2
1 1 2 2 
```

###Sample Output:
```
01
10
```

###Explanation:

**Example case 1:**

After processing the 1st query **1 1 1 1**, matrix becomes:   
$$\begin{bmatrix} 10 \\ 00  \end{bmatrix}$$
After processing the 2nd query **2 2 2 2**, the matrix becomes:
$$\begin{bmatrix} 10 \\ 01  \end{bmatrix}$$
After processing the 3rd query **1 1 2 2**, matrix becomes:
$$\begin{bmatrix} 01 \\ 10  \end{bmatrix}$$
We need to output the matrix after processing all queries. 

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>