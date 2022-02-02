---
{"category_name":"school","problem_code":"REDONE","problem_name":"Reduce to One","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vinay_katare","problem_tester":null,"date_added":"20-04-2019","tags":{"0":"vinay_katare"},"time":{"view_start_date":1557739980,"submit_start_date":1557739980,"visible_start_date":1557739980,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/MAY19/hindi/REDONE.pdf), [Bengali](http://www.codechef.com/download/translated/MAY19/bengali/REDONE.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/MAY19/mandarin/REDONE.pdf), [Russian](http://www.codechef.com/download/translated/MAY19/russian/REDONE.pdf), and [Vietnamese](http://www.codechef.com/download/translated/MAY19/vietnamese/REDONE.pdf) as well.

You have become good friends with Chef. Right now, Chef is busy in the kitchen, so he asked you to solve a problem for him.

Consider a list of integers $L$. Initially, $L$ contains the integers $1$ through $N$, each of them exactly once (but it may contain multiple copies of some integers later). The order of elements in $L$ is not important. You should perform the following operation $N-1$ times:
- Choose two elements of the list, let's denote them by $X$ and $Y$. These two elements may be equal.
- Erase the chosen elements from $L$.
- Append the number $X + Y + X \cdot Y$ to $L$.

At the end, $L$ contains exactly one integer. Find the maximum possible value of this integer. Since the answer may be large, compute it modulo $1,000,000,007$ ($10^9+7$).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$.

### Output
For each test case, print a single line containing one integer ― the maximum possible value of the final number in the list modulo $10^9+7$.

### Constraints
- $1 \le T \le 100,000$
- $1 \le N \le 1,000,000$

### Subtasks
**Subtask #1 (20 points):** $1 \le T, N \le 25$ 

**Subtask #2 (80 points):** original constraints

### Example Input
```
3
1
2
4
```

### Example Output
```
1
5
119
```
### Explanation
**Example case 1:** $L=[1]$

**Example case 2:** $L=[1,2] \rightarrow [1 + 2 + 1 \cdot 2] $

**Example case 3:** $L=[\textbf{1},2,3,\textbf{4}] \rightarrow [\textbf{2},3,\textbf{9}] \rightarrow [3,29] \rightarrow [119] $. The chosen elements in each step are in bold.
