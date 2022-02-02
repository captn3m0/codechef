---
{"category_name":"school","problem_code":"TLAPM","problem_name":"The Last Problem","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n\t1 1 3 3","output":32,"explanation":"The only way to achieve the maximum possible value is by visiting cells with values $1 \\to 3 \\to 6 \\to 9 \\to 13$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/mnuevAf6uig","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"deepraj99","problem_tester":"","date_added":"2-04-2021","tags":{"0":"cakewalk","1":"cook129","2":"deepraj99","3":"prefix"},"problem_difficulty_level":"Cakewalk","best_tag":"Prefix Sum","editorial_url":"https://discuss.codechef.com/problems/TLAPM","time":{"view_start_date":1621794602,"submit_start_date":1621794602,"visible_start_date":1621794602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TLAPM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK129/mandarin/TLAPM.pdf), [Russian](https://www.codechef.com/download/translated/COOK129/russian/TLAPM.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK129/vietnamese/TLAPM.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK129/bengali/TLAPM.pdf) as well.

Deep wants to become a 7-star coder on CodeChef. To achieve this goal, everyday, he has to solve as many problems as he can. But for the first time since he was new to programming, he wasn't able to solve a single problem and lost his confidence. Can you help him solve the problem so that he gets a new boost to go ahead?

In this problem, you are given a matrix that extends infinitely to the right and down, filled with values as shown below.

<img align="center" alt="Coding" width="250" hight="250" src="https://user-images.githubusercontent.com/43384092/113391831-be87d700-93b1-11eb-8190-dfe914ec3c3e.jpeg">

Let $(x, y)$ denote the cell in the $x$-th row and $y$-th column. The upper-left cell $(1, 1)$ contains an integer $1$. You begin at the cell $(x_1, y_1)$ and must walk to the cell $(x_2, y_2)$ by only moving right and down. Formally, from the cell $(x, y)$, in one step you can move to the cell $(x+1, y)$ or $(x, y+1)$.

The value of a path is the sum of the values in all visited cells, including $(x_1, y_1)$ and $(x_2, y_2)$. You need to calculate the maximum possible value on the path of a path from $(x_1, y_1)$ to $(x_2, y_2)$.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains of a single line of input, four integers $x_1$, $y_1$, $x_2$, $y_2$.

###Output
For each test case, output in a single line the maximum possible value of a path from $(x_1, y_1)$ to $(x_2, y_2)$.

###Constraints 
- $1 \leq T \leq 1000$
- $1\leq x_1\leq x_2\leq 1000$
- $1\leq y_1\leq y_2\leq 1000$

###Sample Input
	1
	1 1 3 3

###Sample Output
	32
	
###Explanation
The only way to achieve the maximum possible value is by visiting cells with values $1 \to 3 \to 6 \to 9 \to 13$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>