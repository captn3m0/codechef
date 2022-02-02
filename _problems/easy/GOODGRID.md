---
{"category_name":"easy","problem_code":"GOODGRID","problem_name":"Good Grid","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n\t1 1\r\n\t2 3\r\n\t2 4","output":"Yes\r\n\tNo\r\n\tYes","explanation":"For the first test case, any $1 \\times 1$ grid contains exactly one good cell.\r\n\r\nFor the second test case, it can be proven that there does not exist any $2 \\times 2$ grid with exactly 3 good cells.\r\n\r\nFor the third test case, any grid with all elements same is a valid grid with exactly 4 good cells.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/Cy7QUU3-S90","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"utkarsh_25dec","problem_tester":"","date_added":"23-12-2020","tags":{"0":"easy","1":"ltime92","2":"utkarsh_25dec"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/GOODGRID","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GOODGRID","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME92/hindi/GOODGRID.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME92/bengali/GOODGRID.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME92/mandarin/GOODGRID.pdf), [Russian](https://www.codechef.com/download/translated/LTIME92/russian/GOODGRID.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME92/vietnamese/GOODGRID.pdf) as well.

In a grid, a cell is said to be good if the value in the cell is maximum in its column and minimum in its row. You are given two integers $N$ and $X$. 

Determine whether there exists any $N \times N$ grid with $\textbf{exactly}$ $X$ good cells. The grid can contain repeated elements. You have to answer $T$ such queries.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- The only line of each test case contains a two space separated integers $N$ ($1 \leq N \leq 5000$) and $X$ ($1 \leq X \leq N^2$).

###Output:
For every test case if a grid with required conditions exists then print "Yes" otherwise print "No"(without quotes).

###Constraints 
- $1 \leq T \leq 1000$
- $1 \leq N \leq 5000$
- $1 \leq X \leq N^2$

### Subtasks
**Subtask #1 (100 points):** original constraints

###Sample Input:
	3
	1 1
	2 3
	2 4

###Sample Output:
	Yes
	No
	Yes
	
###Explanation:

For the first test case, any $1 \times 1$ grid contains exactly one good cell.

For the second test case, it can be proven that there does not exist any $2 \times 2$ grid with exactly 3 good cells.

For the third test case, any grid with all elements same is a valid grid with exactly 4 good cells.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>