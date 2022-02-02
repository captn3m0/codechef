---
{"category_name":"easy","problem_code":"INTEREQ","problem_name":"Interactive Equivalency","problemComponents":{"constraints":"- $1 \\leq T \\leq 10$\n- $2 \\leq N \\leq 100$\n- $Q = 6N$","constraintsState":false,"subtasks":"- 30 points : $1 \\leq R \\leq 10000$\n- 70 points : $1 \\leq R \\leq 10^9$\n","subtasksState":false,"inputFormat":"First, you should read the number of test cases $T$.\n\nFor each test case, you should read two integers $N$ and $Q$.\n\nThen you may ask questions:\n- Output $?$ followed by an integer denoting the number of elements in subset followed by the indices $?$ $k$ $i_1$ $i_2$ ... $i_k$.\n- Read an integer $x$ denoting the answer to your query.\n- If the query was invalid or you have exceeded the query limit, judge returns -1 and exits with wrong answer verdict. In this case, you must also terminate your program.\n\nWhen you have determined the answer, print the character $!$ followed by $N$ space separated integers denoting the array $!$ $A_1$ $A_2$ ... $A_N$. Note that this does not count towards a query.\n\nNow you must read an integer denoting that your answer is correct or not.\n- If your answer is correct, judge prints 1. In this case, you should continue solving the remaining test cases.\n- If your answer is incorrect, judge prints -1 and exits with wrong answer verdict. You must also terminate your program in this case otherwise, you may receive any verdict. \n\n","inputFormatState":false,"outputFormat":"For each testcase, output in a single line answer given by Charlie to Tracy modulo 1000000007.\n","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anshugarg12","problem_tester":"","date_added":"15-08-2021","tags":{"0":"anshugarg12","1":"binary","2":"cook132","3":"easy"},"problem_difficulty_level":"Easy-Medium","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/INTEREQ","time":{"view_start_date":1629658802,"submit_start_date":1629658802,"visible_start_date":1629658802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=INTEREQ","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK132/mandarin/INTEREQ.pdf), [Russian](https://www.codechef.com/download/translated/COOK132/russian/INTEREQ.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK132/bengali/INTEREQ.pdf) as well.

Two arrays $A$ and $B$ of size $N$ are **equivalent** if for every $(i,j)$ $(1 \le i \lt j \le N)$, $B_i = B_j$ if and only if $A_i = A_j$. For example, $[1,2,2]$, $[10,11,11]$, $[5,1,1]$ are equivalent, while $[1,2,3,1]$, $[10,20,10,10]$ are not.

There is a hidden array of $N$ integers, where the elements are numbered from $A_1, A_2, \dots, A_N$. Your task is to guess any array which is equivalent to the hidden array by asking the following query at most $Q$ times. The elements of the guessed array must be within the range $[1,10^{9}]$.

In each query, you give a subset of indices $\{i_1,i_2,\dots,i_k\}$ in the array i.e some subset of $\{1,2,\dots,N\}$ and the judge returns the frequency of **most** frequent element among $\{A_{i_1}, A_{i_2}, \dots, A_{i_k}\}$. Note that the indices must be distinct and the order doesn't matter.

For example, consider the array $[10,3,1,10,1,1,3]$.
- The ouput of query $\{2,3,4,7\}$ is $2$. ($3$ occurs maximum number of times i.e $2$ times)
- Ouput of query $\{2,3,1,4,5\}$ is $2$. (Both $1$ and $10$ occur $2$ times)

### Interaction
First, you should read the number of test cases $T$.

For each test case, you should read two integers $N$ and $Q$.

Then you may ask questions:
- Output $?$ followed by an integer denoting the number of elements in subset followed by the indices $? k i_1 i_2 \dots i_k$.
- Read an integer $x$ denoting the answer to your query.
- If the query was invalid or you have exceeded the query limit, judge prints `'-1'` and exits with wrong answer verdict. In this case, you must also terminate your program.

When you have determined the answer, print the character $!$ followed by $N$ space-separated integers denoting the array $! A_1 A_2 \dots A_N$. Note that this does not count towards a query.

Now you must read an integer denoting that your answer is correct or not.
- If your answer is correct, judge prints `'1'`. In this case, you should continue solving the remaining test cases.
- If your answer is incorrect, judge prints `'-1'` and exits with wrong answer verdict. You must also terminate your program in this case otherwise, you may receive any verdict. 

### Constraints
- $1 \leq T \leq 10$
- $2 \leq N \leq 100$
- $Q = 6N$
- For the given constraints, it is guaranteed that the answer can be found in the given number of queries.

### Sample interaction
<pre>
You       Grader
          1
          3 18
? 2 1 2
          1
? 3 1 2 3 
          2
? 2 2 3
          1
? 2 1 3
          2
! 3 4 3
          1
</pre>
### Explanation
The hidden array was $A$ = $[10,20,10]$.
- We ask a query for subset $\{1,2\}$. The grader responds with $1$ since both $10$ and $20$ occur $1$ time.
- Then we query for $\{1,2,3\}$. The grader responds with $2$ because frequency of $10$ is $2$.
- Then we query for $\{2,3\}$. Grader responds with $1$ since both elements are distinct.
- Lastly we query for $\{1,3\}$ and the grader responds with $2$ i.e frequency of $10$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>