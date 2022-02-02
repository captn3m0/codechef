---
{"category_name":"medium","problem_code":"MINPROD","problem_name":"6 - Product of Minimums","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sjshohag","problem_tester":"","date_added":"6-04-2020","tags":{"0":"sjshohag"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1605438000,"submit_start_date":1605438000,"visible_start_date":1605438000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MINPROD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
The *beauty* of an array $A_1,A_2,\ldots,A_N$ is defined by the following formula:  $$\prod\limits_{i = 1}^{N}\prod\limits_{j = i}^{N}\min(A_i,A_{i+1},\ldots,A_j).$$

You are given two integers $X$ and $P$ where $P$ is prime. You have to find an array $A$ such that

- $1 \leq N \leq 2000$
- $0 \leq A_i \leq 100$ for each $i$ from $1$ to $N$
- The *beauty* of $A$ is equivalent to $X$ modulo $P$.

If there is no solution under such constraints then just output "-1" (without quotes).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The descriptions of $T$ test cases follow.
- The first and only line of each test case contains two space-separated integers  $X$ and $P$.

### Output
For each test case, print the answer in the following way: 

- If a solution exists then on the first line print $N$, the length of the array $A$. On the next line, print $N$ space-separated integers, the elements of $A$.
- If there are multiple solutions, you can print any.
- If there is no solution then just output "-1" (without quotes). 

### Constraints 
- $1 \le T \le 1000$
- $0 \leq X  < P \leq 10^6$
- $P$ is prime.

### Example Input

```
3
1 7
5 19
0 13
```

### Example Output
```
3
2 2 2
6
2 4 11 5 7 4
2
1 13
```

### Explanation:

**Sample case $1$:** The beauty is equal to $2^6=64$, which has remainder $1$ when divided by $7$.

**Sample case $2$:** The beauty is equal to $2^6\cdot 4^9\cdot 5^4\cdot 7\cdot 11=807,403,520,000$, which has remainder $5$ when divided by $19$.

**Sample case $3$:** The beauty is equal to $1^2\cdot 13=13$, which has remainder $0$ when divided by $13$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>