---
{"category_name":"easy","problem_code":"AVGPR","problem_name":"Average of Pairs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anuj_2106","problem_tester":null,"date_added":"2-04-2018","tags":{"0":"anuj_2106","1":"april18","2":"array","3":"looping","4":"math"},"editorial_url":"https://discuss.codechef.com/problems/AVGPR","time":{"view_start_date":1523957400,"submit_start_date":1523957400,"visible_start_date":1523957400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/mandarin/AVGPR.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/russian/AVGPR.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/vietnamese/AVGPR.pdf">Vietnamese</a> as well.</h3>

You are given an integer sequence $A$ with length $N$.

Find the number of (unordered) pairs of elements such that the average of these two elements is also present in the sequence. Formally, find the number of pairs $(i,j)$ such that $1 \le i \lt j \le N$ and there is an index $k$ ($1 \le k \le N$) for which $2A_k = A_i+A_j$ holds.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print a single line containing one integer — the number of valid pairs $(i,j)$.

### Constraints 
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $|A_i| \le 10^3$ for each valid $i$

### Subtasks

**Subtask #1 (30 points):** $1 \le N \le 10^3$

**Subtask #2 (70 points):** $1 \le N \le 10^5$

### Example Input
<pre><tt>
3
2
2 2
3
2 1 3
6
4 2 5 1 3 5
</tt></pre>

### Example Output
<pre><tt>
1
1
7
</tt></pre>

### Explanation
**Example case 1:** We can take $k$ for $A_k$ to be either 1 or 2, since $A_k=2$ either way. Since the problem asks for unordered pairs, $(1,2)$ is the only possible valid pair (the same as $(2,1)$). Hence, the answer is 1.

**Example case 2:** We see that $A_1 = 2 = (1+3)/2$. No other valid pair exists.
