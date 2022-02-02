---
{"category_name":"medium","problem_code":"FFT","problem_name":"Fast forward travelling","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"altruist_","problem_tester":"kingofnumbers","date_added":"21-04-2018","tags":{"0":"altruist_"},"editorial_url":"https://discuss.codechef.com/problems/FFT","time":{"view_start_date":1524934802,"submit_start_date":1524934802,"visible_start_date":1524934802,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME59/mandarin/FFT.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME59/russian/FFT.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME59/vietnamese/FFT.pdf">Vietnamese</a> as well.</h3>

Gritukan likes to take cyclic trips around the world. There are $N$ countries numbered $1$ through $N$ in the world. Before starting his travels, Gritukan chooses a permutation $P$ of all $N$ countries. Then, he visits all countries (some countries may be visited multiple times) using the following algorithm:
- for each $v$ from $1$ to $N$ inclusive:
    - travel to country $v$
    - travel from country $v$ to country $P_v$, then from country $P_v$ to country $P_{P_v}$, and so on until he reaches country $v$ again; let's call this sequence of visited countries a *cyclic route*

(Each country appears at most once in a cyclic route. It is also possible for a route to contain only one country if $v=P_v$, in which case Gritukan's travel along this route consists of staying in country $v$.)

Unfortunately, Gritukan does not remember the routes he took. He only remembers a sequence $A_{1..N}$ with the following meaning: for each country $v$, the number of cyclic routes which contained this country is $A_v$. Given the sequence $A$, Gritukan asks you to calculate the number of permutations $P$ consistent with this sequence, modulo $998244353$ (it's prime).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$. 

### Output
For each test case, print a single line containing one integer — the number of possible permutations modulo $998244353$ (it's prime).

### Constraints 
- $1 \le T \le 100$
- $1 \le N \le 10^6$
- $1 \le A_i \le N$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (40 points):** $1 \le N \le 5000$

**Subtask #2 (60 points):** original constraints

### Example Input
```
2
6
1 1 1 1 1 1
6
6 6 6 6 6 6
```

### Example Output
```
1
120
```
