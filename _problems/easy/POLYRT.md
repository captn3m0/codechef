---
{"category_name":"easy","problem_code":"POLYRT","problem_name":"Polynomial Root","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"ausca","problem_tester":"","date_added":"19-06-2021","tags":{"0":"ausca","1":"cook130","2":"easy","3":"math","4":"prefix"},"problem_difficulty_level":"Easy-Medium","best_tag":"Prefix Sum","editorial_url":"https://discuss.codechef.com/problems/POLYRT","time":{"view_start_date":1624214704,"submit_start_date":1624214704,"visible_start_date":1624214704,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=POLYRT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK130/mandarin/POLYRT.pdf), [Russian](https://www.codechef.com/download/translated/COOK130/russian/POLYRT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK130/vietnamese/POLYRT.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK130/bengali/POLYRT.pdf) as well.

Let's define a function $P(x, y) = (x-y)^2$. For given real numbers $a$ and $b$, let's define a polynomial $Q_{a,b}(x) = P(P(P(x, a), a-b), x-b)$.

Next, let's define a function $F(a, b)$:
- If $Q_{a,b}(x)$ has no real roots, $F(a, b) = 0$.
- Otherwise, let $r$ be the largest real root of $Q_{a,b}(x)$.
- If $r$ is rational, it can be represented by a fraction $r = \frac{p}{q}$, where $p$ and $q$ are coprime integers and $q \gt 0$. Then, $F(a, b) = p + q$.
- If $r$ is irrational, it can be proved that in this case, it can be represented in the form $r = \frac{p + \sqrt{z}}{q}$, where $p$, $q$ and $z$ are integers, $q \gt 0$ and $z \gt 0$. Choose the representation with the smallest value of $q$ (it is guaranteed to be unique in this case). Then, $F(a, b) = p + z + q$.

You are given a sequence of integers $c_1, c_2, \ldots, c_N$. Find $\sum_{i=1}^N \sum_{j=1}^N F(c_i, c_j)$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $c_1, c_2, \ldots, c_N$.

### Output
For each test case, print a single line containing one integer ― the sum of $F(c_i, c_j)$.

### Constraints
- $1 \leq T \leq 20$
- $1 \leq N \leq 2 \cdot 10^5$
- $0 \leq c_i \leq 2 \cdot 10^5$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2\cdot 10^5$

### Example Input
```
3
1 
0
2
3 0
5
3 2 2 0 6
```

### Example Output
```
2
29
193
```

### Explanation
**Example case 1:** $Q_{0,0}(x) = x^4-x$, so the largest real root is $r = \frac{1}{1}$, $F(0, 0) = 1+1 = 2$ and the answer is $2$.

**Example case 2:**
- $Q_{0,0}(x)$ has $r=2$, so $F(0, 0) = 1+1 = 2$
- $Q_{0,3}(x)$ has no real roots, so $F(0, 3) = 0$
- $Q_{3,0}(x)$ has $r=\frac{7+\sqrt{13}}{2}$, so $F(3, 0) = 7+13+2 = 22$
- $Q_{3,3}(x)$ has $r=4$, so $F(3, 3) = 4+1 = 5$

The answer is $2+0+22+5=29$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>