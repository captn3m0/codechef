---
{"category_name":"easy","problem_code":"UWCOI21F","problem_name":"Binary Puzzle","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"astoria","problem_tester":"","date_added":"18-12-2020","tags":{"0":"astoria","1":"easy","2":"uwcoi21"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/UWCOI21F","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=UWCOI21F","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Salmon is playing a game!

He is given two integers $N$ and $K$. His goal is to output $K$ pairs $(x_i,y_i)$. He creates a function $f$ such that $f(x_i) = y_i$ and $f$ is undefined for all other values of $x$. His pairs must then meet the following conditions:

- All $x_i$ are distinct.
- All $y_i$ are distinct.
- All $x_i, y_i$ are in the range $[0,2^N - 1]$ and are integers.
- $f(f(x_i))$ is defined for all $i$.
- Let $H(x)$ be the number of set bits in the binary representation of $x$. Then, $H(x_i) \neq H(f(f(x_i)))$ for all $i$.

Unfortunately, Salmon is unable to solve this. Help Salmon win the game!   
 If there are multiple correct solutions, you may output any one of them. It can be proven that a solution exists for all $N$ and $K$ that meet constraints.

### Input

- The first line input contains a single integer $T$ denoting the number of testcases
- Each of the next $T$ lines contains two space-separated integers $N$ and $K$ respectively.

### Output

- Output $K$ lines for each testcase.
- The $i$-th line of a testcase should contain two space-separated integers: $x_i$ and $y_i$, following the given constraints.

### Constraints

- $1 \leq T \leq 2^{15}$
- $3 \leq N \leq 18$ 
- $3 \leq K \leq 2^N$ 
- The sum of $2^N$ over all testcases doesn't exceed $2^{18}$

### Subtasks

- Subtask 1 [20 points]: $K \leq 8$
- Subtask 2 [40 points]: $K = 2^N$
- Subtask 3 [40 points]: No additional constraints.

### Sample Input

```
2
3 7
4 6
```

### Sample Output

```
5 3
1 7
0 4
2 5
3 1
4 2 
7 0
1 10
10 14
15 1
14 13
5 15
13 5
```

### Explanation

In the answer to the first testcase, there are 7 pairs. $x_i$ and $y_i$ are all in the range $[0,2^3 - 1]$, which is the range $[0,7]$. All values of $x_i$ are distinct, and all values of $y_i$ are distinct. However, note that some integers appear in both lists. For example, 5 appears both as $x_1$ and as $y_4$. This is allowed. For all $x_i$, $f(f(x_i))$ is defined and $H(f(f(x_i))) \neq H(x_i)$. For example, $f(f(7)) = 4$. $H(7) = 3$, but $H(4) = 1$. Therefore, $H(f(f(7))) \neq H(7)$, as desired.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>