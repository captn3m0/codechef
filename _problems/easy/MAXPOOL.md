---
{"category_name":"easy","problem_code":"MAXPOOL","problem_name":"G - Maxpool","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"adikr_singh","problem_tester":"","date_added":"6-04-2021","tags":{"0":"adikr_singh","1":"constructive","2":"easy","3":"greedy","4":"spyb2021"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MAXPOOL","time":{"view_start_date":1618509602,"submit_start_date":1618509602,"visible_start_date":1618509602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MAXPOOL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Robert is a maths teacher and he made a question for his students.
Question is a matrix of $N$ X $N$ with all distinct elements from  $1$ to $N*N$. One has to apply **maxpool** function of filter matrix $2$ X $2$ to get the answer, that is for each $2$ X $2$ matrix you have to write the maximum element in corresponding matrix of size $(N-1)$ X $(N-1)$.

for example
if $N$ = $3$ and matrix given is
```
1 7 4
2 3 5
9 8 6
```

<img src="https://s3.amazonaws.com/codechef_shared/download/Images/SPYB2021/MAXPOOL/MAXPOOL.jpg" width="100%" > 

then after applying maxpool function we get:
```
7 7
9 8
```

Robert is a careless person and forgot the actual question or $N$ X $N$ matrix but he knows the answer or $(N-1)$ X $(N-1)$ matrix.

Can you help him to derive any valid question matrix(must contain all the numbers from $1$ to $N$ * $N$ ) back from the answer given?

Inputs are given in such a way that the answer always exists. In case of multiple answers print any.

###Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$:- The size of the question matrix or matrix before the filter is applied.
- Next $(N-1)$ lines contains $(N-1)$ space-seperated integers in each line.

### Output

- For each test case, print the matrix of size $N$ X $N$ . Print $N$ lines where each line will contain $N$ integers separated by a space.

### Constraints

- $1 \leq T  \leq 5$
- $2 \leq N \leq 200$
- $1 \leq A[i][j] \leq (N*N) $ , for all $1 \leq i,j  \leq  (N-1) $, and $A$ is the matrix after the filter is applied.
 
### Example Input
```
2
3
7 7
9 8
2
4
```

### Example Output
```
1 7 4
2 3 5
9 8 6
1 2
3 4
```
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>