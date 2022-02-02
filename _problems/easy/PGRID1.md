---
{"category_name":"easy","problem_code":"PGRID1","problem_name":"Point Grid","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\n3\n1 1 1\n3\n5 3 2\n3\n4 2 5","output":"3\n7\n8","explanation":"**TestCase 1:** All the points need to be considered to cover all $1$-s.\n\n**TestCase 2:** The optimal set of starting points is $\\{(1, 3), (2, 3), (2, 2), (3, 2), (3, 1), (4, 1), (5, 1)\\}$.\n\n![fig1](https://codechef_shared.s3.amazonaws.com/download/Images/DAANISH/pointGrid.png =394x336)","isDeleted":false}}},"video_editorial_url":"https://youtu.be/RNN-Ab3EUPs","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"29-12-2020","tags":{"0":"daanish_adm","1":"easy","2":"start2"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PGRID1","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PGRID1","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Suppose we have a 2D grid $A$ of infinite width and height of $N$ units. Each row of the grid can be represented in the form of $111\ldots100\ldots \infty$ where the $1$s are repeated $x$ times, $x > 0$. Implying that the row starts with $x$ consecutive $1$-s followed by all $0$-s. 

Initially all cells are unmarked. Cell (i,j) refers to the i-th row, and j-th column. (1,1) refers to the bottom-left cell.

Now you do the following in each step.
```
Choose an unmarked cell having 1. Let it be (i, j).
while((i,j) lies in the grid boundaries && A[i][j] == 1){
	mark[i][j] = true; i--; j--;
}
```

How many minimum number of steps are required to mark all the cells containing $1$?

Note: The number of consecutive $1$-s at each height is given by the array $W$ where $W_i$ represents the same at $i^{th}$ row.

###Input:
- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contain $2$ lines of input.
- First line will contain $N$, height of the grid (number of rows). 
- Second line contains $N$ space separated integers where $i^{th}$ index represents number of consecutive $1$-s at the beginning of row $i$.

###Output:
For each testcase, output in a single line answer to the problem.

###Constraints 
- $1 \leq T \leq 10$
- $1 \leq N \leq 10^5$
- $1 \leq W_i \leq 10^9$

###Sample Input:
```
3
3
1 1 1
3
5 3 2
3
4 2 5
```

###Sample Output:
```
3
7
8
```

###Explanation:
**TestCase 1:** All the points need to be considered to cover all $1$-s.

**TestCase 2:** The optimal set of starting points is $\{(1, 3), (2, 3), (2, 2), (3, 2), (3, 1), (4, 1), (5, 1)\}$.

![fig1](https://codechef_shared.s3.amazonaws.com/download/Images/DAANISH/pointGrid.png =394x336)
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>