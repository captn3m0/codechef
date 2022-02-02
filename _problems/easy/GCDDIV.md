---
{"category_name":"easy","problem_code":"GCDDIV","problem_name":"The hardest gcd problem","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"altruist_","problem_tester":"kingofnumbers","date_added":"20-04-2018","tags":{"0":"altruist_"},"editorial_url":"https://discuss.codechef.com/problems/GCDDIV","time":{"view_start_date":1524934802,"submit_start_date":1524934802,"visible_start_date":1524934802,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME59/mandarin/GCDDIV.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME59/russian/GCDDIV.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME59/vietnamese/GCDDIV.pdf">Vietnamese</a> as well.</h3>

You are given a sequence $A_1, A_2, \dots, A_N$ of positive integers and an integer $K$. You are allowed to perform the following operation any number of times (including zero):
- choose an index $j$ between $1$ and $N$ inclusive
- choose a positive divisor $d$ of $A_j$ such that $d \le K$
- divide $A_j$ by $d$

Determine if it is possible to modify the sequence $A$ in such a way that it would satisfy the following condition: there is no positive integer strictly greater than $1$ which divides every element of $A$. (In other words, the greatest common divisor of all elements of $A$ should be $1$.)

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print a single line containing the string `"YES"` if it is possible to make the GCD of all elements of $A$ equal to $1$ or `"NO"` if it is impossible.

### Constraints 
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- $1 \le K \le 10^9$ 

### Subtasks
**Subtask #1 (30 points):**
- $1 \le N, K \le 100$
- $1 \le A_i \le 100$ for each valid $i$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
3 6
10 15 30
3 4
5 10 20
```

### Example Output
```
YES
NO
```
