---
{"category_name":"medium","problem_code":"MAXPRODU","problem_name":"Maximize Product","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"27-10-2018","tags":{"0":"admin3","1":"differentiation","2":"easy","3":"math","4":"proof","5":"snck1b19","6":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/MAXPRODU","time":{"view_start_date":1540827000,"submit_start_date":1540827000,"visible_start_date":1540827000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Russian](http://www.codechef.com/download/translated/S191BTST/russian/MAXPRODU.pdf) , [Vietnamese](http://www.codechef.com/download/translated/S191BTST/vietnamese/MAXPRODU.pdf), [Hindi](http://www.codechef.com/download/translated/S191BTST/hindi/MAXPRODU.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/S191BTST/mandarin/MAXPRODU.pdf) and [Bengali](http://www.codechef.com/download/translated/S191BTST/bengali/MAXPRODU.pdf) as well.

You are given two integers $N$ and $K$. Consider all ways to represent $N$ as the sum of exactly $K$ distinct positive integers $x_1, x_2, \dots, x_K$ — in other words, $x_i \gt 0$ for each valid $i$, $x_i \neq x_j$ for each valid $i \neq j$ and $x_1 + x_2 + \ldots + x_K = N$ should hold.

You have to find the maximum possible value of the product $(x_1^2 - x_1) \cdot (x_2^2 - x_2) \cdot \ldots \cdot (x_K^2 - x_K)$. Because this number could be huge, compute it modulo $10^9 + 7$. If $N$ cannot be represented as the sum of any $K$ distinct positive integers, output $-1$ instead.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $K$. 

### Output
For each test case, print a single line containing one integer — the maximum product, or $-1$ if $N$ cannot be represented in the given way.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N \le 10^9$
- $1 \le K \le 10^4$

### Subtasks
**Subtask #1 (50 points):**
- $1 \le N \le 500$
- $1 \le K \le 500$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
5 2
6 2
```

### Example Output
```
12
24
```
	
### Explanation
**Example case 1:** We want two distinct positive integers whose sum is $5$. There are only two possibilities: $(1, 4)$ and $(2, 3)$. The corresponding products are $(1^2 - 1) \cdot (4^2 - 4) = 0$ and $(2^2 - 2) \cdot (3^2 - 3) = 2 \cdot 6 = 12$. The maximum is $12$, which is the answer.

**Example case 2:** We want two distinct positive integers whose sum is $6$. There are only two possibilities again: $(1, 5)$ and $(2, 4)$. Their corresponding products are $0$ and $24$ and the maximum is $24$.
