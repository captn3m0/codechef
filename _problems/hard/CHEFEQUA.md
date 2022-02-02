---
{"category_name":"hard","problem_code":"CHEFEQUA","problem_name":"Chef and Equations","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"wxh010910","problem_tester":null,"date_added":"12-09-2018","tags":{"0":"divide","1":"generating_functions","2":"interpolation","3":"medium","4":"nov18","5":"ntt","6":"taran_1407","7":"wxh010910"},"time":{"view_start_date":1542015002,"submit_start_date":1542015002,"visible_start_date":1542015002,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/NOV18/hindi/CHEFEQUA.pdf) , [Vietnamese](http://www.codechef.com/download/translated/NOV18/vietnamese/CHEFEQUA.pdf) , [Mandarin Chinese](http://www.codechef.com/download/translated/NOV18/mandarin/CHEFEQUA.pdf) , [Russian](http://www.codechef.com/download/translated/NOV18/russian/CHEFEQUA.pdf) and [Bengali](http://www.codechef.com/download/translated/NOV18/bengali/CHEFEQUA.pdf) as well.

You are given a sequence of positive integers $A_0, A_1, \ldots, A_{N-1}$ and a sequence of non-negative integers $C_0, C_1, \ldots, C_{N-1}$. Let's denote $M = 998244353$. You know that for
$$C_i = \sum_{j = 0}^{N-1} B_j A_j^i \mod M$$
holds for each valid $i$, with some coefficients $B_0, B_1, \dots, B_{N-1}$ (such that $0 \le B_i \lt M$ for each $i$). Your task is to find these coefficients.

It is possible to prove that under the given constraints, the solution is unique.

### Input
- The first line of the input contains a single integer $N$. 
- The second line contains $N$ space-separated integers $A_0, A_1, \ldots, A_{N-1}$.
- The third line contains $N$ space-separated integers $C_0, C_1, \ldots, C_{N-1}$. 

### Output
Print a single line containing $N$ space-separated integers $B_0, B_1, \ldots, B_{N-1}$.

###Constraints 
- $1 \le N \le 60,000$
- $1 \le A_i \lt M$ for each valid $i$
- $0 \le C_i \lt M$ for each valid $i$
- $A_i \neq A_j$ for each valid $i, j$ ($i \neq j$)

### Subtasks
**Subtask #1 (5 points):** $1 \le N \le 300$

**Subtask #2 (15 points):** $1 \le N \le 3,000$

**Subtask #3 (20 points):** $C_i = C_1^i\;\mathrm{mod}\;M$ for each valid $i$

**Subtask #4 (60 points):** original constraints 

### Example Input
```
3
1 2 3
3 6 14
```

### Example Output
```
1 1 1
```

### Explanation
The relations between $A$, $B$ and $C$ hold:
- $C_0 = 3 = 1^0 + 2^0 + 3^0$
- $C_1 = 6 = 1^1 + 2^1 + 3^1$
- $C_2 = 14 = 1^2 + 2^2 + 3^2$
