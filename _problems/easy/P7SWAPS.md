---
{"category_name":"easy","problem_code":"P7SWAPS","problem_name":"Permutation Swaps","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n    3\r\n    1 2 3\r\n    2 3 1\r\n    3\r\n    1\r\n    2 2 3\r\n    3 1","output":3,"explanation":"Initially, array $A$ is $[1,2,3]$.\r\nIt changes as follows: $[1,2,3]$ -\u003E $[3,1,2]$ -\u003E $[3,2,1]$.\r\nSo, we output element at position $1$ in array $A$, which is $3$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/q5--Czkw15k","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"ashish99hanny","problem_tester":"","date_added":"3-05-2021","tags":{"0":"ashish99hanny","1":"binary","2":"cook129","3":"easy"},"problem_difficulty_level":"Easy","best_tag":"Binary Lifting","editorial_url":"https://discuss.codechef.com/problems/P7SWAPS","time":{"view_start_date":1621794602,"submit_start_date":1621794602,"visible_start_date":1621794602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=P7SWAPS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK129/mandarin/P7SWAPS.pdf), [Russian](https://www.codechef.com/download/translated/COOK129/russian/P7SWAPS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK129/vietnamese/P7SWAPS.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK129/bengali/P7SWAPS.pdf) as well.

A permutation is an array consisting of $N$ distinct integers from $1$ to $N$ in arbitrary order.

Chef has two permutation arrays $A$ and $P$ of length $N$. Chef performs the following three types of operations on the array $A$:
- $1$ : Permute the array $A$ according to the order defined by permutation $P$.That is, replace $A$ with the array $B$ where $B[P[i]]=A[i]$.
- $2 \ x \ y$ : Swap the elements at positions $x$ and $y$ in $A$.
- $3 \ x$ : Output the element at position $x$ in array $A$. 

For each operation of type $3$, Chef wants you to output the element at position $x$ in array $A$ after all preceding operations have been applied.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ integers denoting elements of array $A$.
- The third line contains $N$ integers denoting elements of array $P$.
- The fourth line contains a single integer $Q$, denoting the number of operations to be performed.
- $Q$ lines follow, each describing an operation of one of the three types above.

###Output
For each test case, for each query of type $3$, output the answer in a separate line.

###Constraints
- $1 \leq T \leq 1000$
- $1 \leq N, Q \leq 10^5$
- $1 \leq A[i],P[i], x, y \leq N$
- $A$ and $P$ are permutations.
- $x\ne y$ in type $2$ operations.
- The sum of $N$ and the sum of $Q$ over all test cases do not exceed $10^5$.

###Sample Input
    1
    3
    1 2 3
    2 3 1
    3
    1
    2 2 3
    3 1

###Sample Output
	3
	
###Explanation
Initially, array $A$ is $[1,2,3]$.
It changes as follows: $[1,2,3]$ -> $[3,1,2]$ -> $[3,2,1]$.
So, we output element at position $1$ in array $A$, which is $3$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>