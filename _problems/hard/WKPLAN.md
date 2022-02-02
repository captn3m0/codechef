---
{"category_name":"hard","problem_code":"WKPLAN","problem_name":"Chef and Working Plan","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":"1 - 18","source_sizelimit":50000,"problem_author":"whzzt","problem_tester":null,"date_added":"5-12-2018","tags":{"0":"whzzt"},"time":{"view_start_date":1545075122,"submit_start_date":1545075122,"visible_start_date":1545075122,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/DEC18/hindi/WKPLAN.pdf), [Vietnamese](http://www.codechef.com/download/translated/DEC18/vietnamese/WKPLAN.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/DEC18/mandarin/WKPLAN.pdf), [Russian](http://www.codechef.com/download/translated/DEC18/russian/WKPLAN.pdf) and [Bengali](http://www.codechef.com/download/translated/DEC18/bengali/WKPLAN.pdf) as well.

These days, Chef is working on opening a restaurant. Obviously, Chef dislikes running the restaurant by himself. In order to avoid such a terrible thing, he decided to hire exactly $M$ workers (numbered $1$ through $M$) to help him.

The workers will choose some positive integer constants $a_1, a_2, \dots, a_M$. A worker with a constant $a$ wants to be paid a fixed salary after each $a$ days. Chef is very orderly, so he wants to choose a *Chef-year* — a period of $x$ days, and a *Chef-week* — a period of $y$ days, where $x$ and $y$ depend on the workers' constants in such a way that Chef can always pay each worker's salary at the end of a Chef-week and all the workers are paid their salaries at once at the end of a Chef-year.

Chef also wants a Chef-year to be as short as possible and a Chef-week to be as long as possible. It can be shown that these conditions are satisfied when $x$ is the lowest common multiple of $a_1, a_2, \dots, a_M$ and $y$ is the greatest common divisor of $a_1, a_2, \dots, a_M$. For a group of $M$ workers with known $a_1, a_2, \dots, a_M$, Chef then defines the *value* of the group as $x^p f(y)$，where $f(x) = \sum_{i = 0}^q f_i x^{q-i}$ is a polynomial of degree $q$.

Now, Chef wants to know the sum of values of the group of $M$ workers over all possible sequences $a_1, a_2, \dots, a_M$ which meet the constraint $x \le N$. Since the answer may be extremely large, you should compute it modulo $10^9 + 7$.

**Note**: This problem has a stricter submission limit, each user may only submit this problem at most 50 times during the contest.

### Input
- The first line of the input contains four space-separated integers $N$, $M$, $p$ and $q$.
- The second line contains $q+1$ space-separated integers $f_0, f_1, \ldots, f_q$ — the coefficients of the polynomial $f$.

### Output
Print a single line containing one integer — the sum of values for all possible groups of workers modulo $10^9 + 7$.

### Constraints
- $1 \le N \le 5 \times 10^{12}$
- $1 \le M \le 10^9$
- $0 \le p, q \le 20$
- $0 \le f_i < 10^9 + 7$ for each valid $i$
- $f_0 \neq 0$

### Subtasks
**Subtask #1 (5 points):**
- $1 \le N, M \le 1,000$
- time limit 1 second

**Subtask #2 (10 points):**
- $1 \le N, M \le 10^7$
- time limit 5 seconds

**Subtask #3 (10 points):**
- $M = 2, p = 0, q = 1, f_1 = 0$
- $1 \le N \le 10^{11}$ 

**Subtask #4 (25 points):** $1 \le N \le 10^{11}$

**Subtask #5 (50 points):** original constraints

### Example Input
```
5 2 1 1
1 0
```

### Example Output
```
99
```

### Explanation
There are $15$ possible sequences: $[1, 1]$, $[1, 2]$, $[1, 3]$, $[1, 4]$, $[1, 5]$, $[2, 1]$, $[2, 2]$, $[2, 4]$, $[3, 1]$, $[3, 3]$, $[4, 1]$, $[4, 2]$, $[4, 4]$, $[5, 1]$, $[5, 5]$. The sum of corresponding values is $1 + 2 + 3 + 4 + 5 + 2 + 4 + 8 + 3 + 9 + 4 + 8 + 16 + 5 + 25 = 99$.
