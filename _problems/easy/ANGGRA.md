---
{"category_name":"easy","problem_code":"ANGGRA","problem_name":"Angry Grandfather","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3 2 2\r\n3 2 1","output":"4\r\n7","explanation":"For $N = 3$ and $M = 2$, there are eight possible sequences satisfying the first condition: $[0,0,0]$, $[0,0,1]$, $[0,1,0]$, $[0,1,1]$, $[1,0,0]$, $[1,0,1]$, $[1,1,0]$ and $[1,1,1]$. Their prefix sums are $[0,0,0]$, $[0,0,1]$, $[0,1,1]$, $[0,1,2]$, $[1,1,1]$, $[1,1,2]$, $[1,2,2]$ and $[1,2,3]$ respectively.\r\n\r\nAs we can see, there are:\r\n- one sequence with $0$ prefix sums divisible by $2$: $[1,0,0]$\r\n- three sequences with exactly $1$ prefix sum divisible by $2$: $[0,1,0]$, $[1,0,1]$, $[1,1,1]$\r\n- three sequences with $2$ prefix sums divisible by $2$: $[0,0,1]$, $[0,1,1]$, $[1,1,0]$\r\n- one sequence with $3$ prefix sums divisible by $2$: $[0,0,0]$","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"i_love_islam","problem_tester":null,"date_added":"17-09-2019","tags":{"0":"combinatorics","1":"cook110","2":"i_love_islam","3":"maths","4":"observation","5":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ANGGRA","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ANGGRA","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK110/hindi/ANGGRA.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK110/mandarin/ANGGRA.pdf), [Russian](https://www.codechef.com/download/translated/COOK110/russian/ANGGRA.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK110/vietnamese/ANGGRA.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK110/bengali/ANGGRA.pdf) as well.

Every time Rami comes up with an idea for a nice problem, his grandfather Saeed rejects it, claiming that it takes a lot of work to write tests for such a problem. Therefore, Rami spent days thinking about a problem with only three numbers as the input. Finally, he thought up such a problem and ran happily to his grandfather, shouting:

You are given three integers $N$, $M$ and $K$. Find the number of sequences $A_1, A_2, \ldots, A_N$ such that:
- For each valid $i$, $A_i$ is an integer in the range $[0, M-1]$.
- Let's define $N$ prefix sums of $A$ as $S_i = \sum_{j=1}^i A_j$, where $1 \le i \le N$. At least $K$ of these prefix sums are divisible by $M$.

Let's see if you can solve this simple problem! Rami knows that the answer could be really large, so you should compute it modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $N$, $M$ and $K$.

### Output
For each test case, print a single line containing one integer — the number of valid sequences modulo $10^9+7$.

### Constraints
- $1 \le T \le 100$
- $1 \le K \le N \le 10^5$
- $1 \le M \le 10^9$
- the sum of $N$ over all test cases does not exceed $10^6$

### Example Input
```
2
3 2 2
3 2 1
```

### Example Output
```
4
7
```

### Explanation
For $N = 3$ and $M = 2$, there are eight possible sequences satisfying the first condition: $[0,0,0]$, $[0,0,1]$, $[0,1,0]$, $[0,1,1]$, $[1,0,0]$, $[1,0,1]$, $[1,1,0]$ and $[1,1,1]$. Their prefix sums are $[0,0,0]$, $[0,0,1]$, $[0,1,1]$, $[0,1,2]$, $[1,1,1]$, $[1,1,2]$, $[1,2,2]$ and $[1,2,3]$ respectively.

As we can see, there are:
- one sequence with $0$ prefix sums divisible by $2$: $[1,0,0]$
- three sequences with exactly $1$ prefix sum divisible by $2$: $[0,1,0]$, $[1,0,1]$, $[1,1,1]$
- three sequences with $2$ prefix sums divisible by $2$: $[0,0,1]$, $[0,1,1]$, $[1,1,0]$
- one sequence with $3$ prefix sums divisible by $2$: $[0,0,0]$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>