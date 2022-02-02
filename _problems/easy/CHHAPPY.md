---
{"category_name":"easy","problem_code":"CHHAPPY","problem_name":"Chef and Happiness","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"1-11-2018","tags":{"0":"data","1":"implementation","2":"mgch","3":"nov18","4":"simple","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/CHHAPPY","time":{"view_start_date":1542015002,"submit_start_date":1542015002,"visible_start_date":1542015002,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/NOV18/hindi/CHHAPPY.pdf) , [Vietnamese](http://www.codechef.com/download/translated/NOV18/vietnamese/CHHAPPY.pdf) , [Mandarin Chinese](http://www.codechef.com/download/translated/NOV18/mandarin/CHHAPPY.pdf) , [Russian](http://www.codechef.com/download/translated/NOV18/russian/CHHAPPY.pdf) and [Bengali](http://www.codechef.com/download/translated/NOV18/bengali/CHHAPPY.pdf) as well.

"What do you know about happiness?" — Yoda 

Chef is happy only if three conditions hold:
- Chef finished cooking a delicious meal
- Chef got AC for a programming problem with an almost correct code
- Chef got a new problem with a sequence of integers

Today, all three conditions are satisfied. Chef would like you to feel his happiness and provide him with a solution for this new problem with a sequence of integers. The problem is as follows.

You are given a sequence $A_1, A_2, \dots, A_N$. You need to determine if it is possible to choose two indices $i$ and $j$ such that $A_i \neq A_j$, but $A_{A_i}$ = $A_{A_j}$. (If it was possible, Chef would be truly happy.)

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing the string `"Truly Happy"` if it is possible to choose required indices or `"Poor Chef"` otherwise.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $1 \le A_i \le N$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$

### Subtasks
**Subtask #1 (27 points):** $1 \le N \le 1,000$

**Subtask #2 (73 points):** original constraints

### Example Input
```
4
4
1 1 2 3
4
2 1 3 3
5
5 4 4 3 1
5
3 2 1 1 4
```

### Example Output
```
Truly Happy
Poor Chef
Poor Chef
Truly Happy
```

### Explanation
**Example case 1:** Chef is truly happy because $A_{A_3} = A_{A_1}$ and $A_3 \neq A_1$.

**Example case 2:** There is no pair of indices which would make Chef truly happy. For instance, $A_{A_3} = A_{A_4}$, but $A_3 = A_4$,
