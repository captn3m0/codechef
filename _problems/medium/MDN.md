---
{"category_name":"medium","problem_code":"MDN","problem_name":"Median","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"nots0fast","problem_tester":null,"date_added":"21-11-2018","tags":{"0":"nots0fast"},"time":{"view_start_date":1543078801,"submit_start_date":1543078801,"visible_start_date":1543078801,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME66/mandarin/MDN.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME66/bengali/MDN.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME66/hindi/MDN.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME66/russian/MDN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME66/vietnamese/MDN.pdf) as well.

You are given an integer sequence $A_1, A_2, \dots, A_N$ and integers $K$ and $M$. For $1 \le i \le j \le N$, let's define $S(i, j)$ as the number of ways to choose exactly $K$ elements of the contiguous subsequence $A_i, A_{i+1}, \dots, A_j$ in such a way that the median of these $K$ elements is $\ge M$.

Find the sum of $S(i, j)$ over all $i, j$ such that $1 \le i \le j \le N$. Since this sum may be large, calculate it modulo $10^9+7$.

### Input
- The first line of the input contains three space-separated integers $N$, $K$ and $M$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
Print a single line containing one integer — $\sum_{i=1}^N \sum_{j=i}^N S(i, j)$ modulo $10^9+7$.

### Constraints 
- $1 \le N \le 10^5$
- $3 \le K \le 100$
- $K$ is an odd number
- $1 \le M \le 200$
- $1 \le A_i \le 10^9$ for each valid $i$
- all elements of $A$ are pairwise distinct

### Subtasks
**Subtask #1 (30 points):**
- $1 \le N \le 80$
- $3 \le K \le 80$

**Subtask #2 (70 points):** original constraints

### Example Input
```
4 3 2
1 2 3 4
```

### Example Output
```
6
```
	
### Explanation
$S(1,1) = S(1,2) = S(2,2) = S(2,3) = S(3,3) = S(3,4) = S(4,4) = 0$, $S(1,3) = S(2,4) = 1$ and $S(1,4) = 4$.
