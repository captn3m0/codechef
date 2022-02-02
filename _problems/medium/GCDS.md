---
{"category_name":"medium","problem_code":"GCDS","problem_name":"GCD Subsequences","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1.2,"source_sizelimit":50000,"problem_author":"allllekssssa","problem_tester":null,"date_added":"29-03-2019","tags":{"0":"allllekssssa","1":"branch","2":"hard","3":"ltime70","4":"number","5":"partial","6":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/GCDS","time":{"view_start_date":1553965202,"submit_start_date":1553965202,"visible_start_date":1553965202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME70/mandarin/GCDS.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME70/bengali/GCDS.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME70/hindi/GCDS.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME70/russian/GCDS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME70/vietnamese/GCDS.pdf) as well.

Pantelija was given a sequence of positive integers $a_1, a_2, \ldots, a_N$. Let's define the *gcd value* of this sequence as the number of its non-empty contiguous subsequences with greatest common divisor strictly greater than $1$. The greatest common divisor of any contiguous subsequence $a_l, a_{l+1}, \ldots, a_r$ ($1 \le l \le r \le N$) is the greatest positive integer which divides each element of this subsequence.

Pantelija wants to maximise the gcd value of this sequence. In order to do that, he may choose a valid index $i$, an integer $b$ ($1 \le b \le 5 \cdot 10^5$, since he does not like large numbers) and change the element $a_i$ to $b$. What is the maximum possible gcd value he can obtain?

### Input
- The first line of the input contains a single integer $N$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
Print a single line containing one integer ― the largest possible gcd value.

### Constraints
- $1 \le N \le 5 \cdot 10^4$
- $1 \le a_i \le 5 \cdot 10^5$ for each valid $i$

### Subtasks
**Subtask #1 (15 points):**
- $1 \le N \le 100$
- $1 \le a_i \le 100$ for each valid $i$

**Subtask #2 (35 points):**
- $1 \le N \le 5 \cdot 10^4$
- $1 \le a_i \le 500$ for each valid $i$

**Subtask #3 (50 points):** original constraints

### Example Input
```
5
4 5 10 3 7
```

### Example Output
```
9
```
