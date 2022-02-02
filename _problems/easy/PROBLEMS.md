---
{"category_name":"easy","problem_code":"PROBLEMS","problem_name":"Problem Sort","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vidyut_1","problem_tester":null,"date_added":"15-06-2018","tags":{"0":"aug18","1":"easy","2":"likecs","3":"sorting","4":"vidyut_1","5":"vidyut_1"},"editorial_url":"https://discuss.codechef.com/problems/PROBLEMS","time":{"view_start_date":1534152605,"submit_start_date":1534152605,"visible_start_date":1534152605,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/AUG18/hindi/PROBLEMS.pdf" target="_blank">Hindi,</a>
<a href="http://www.codechef.com/download/translated/AUG18/mandarin/PROBLEMS.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/AUG18/russian/PROBLEMS.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/AUG18/vietnamese/PROBLEMS.pdf" target="_blank">Vietnamese</a> as well.</h3>

Chef is organising a contest with $P$ problems (numbered $1$ through $P$). Each problem has $S$ subtasks (numbered $1$ through $S$).

The *difficulty* of a problem can be calculated as follows:
- Let's denote the score of the $k$-th subtask of this problem by $SC_k$ and the number of contestants who solved it by $NS_k$.
- Consider the subtasks sorted in the order of increasing score.
- Calculate the number $n$ of valid indices $k$ such that $NS_k > NS_{k + 1}$.
- For problem $i$, the difficulty is a pair of integers $(n, i)$.

You should sort the problems in the increasing order of difficulty levels. Since difficulty level is a pair, problem $a$ is more difficult than problem $b$ if the number $n$ is greater for problem $a$ than for problem $b$, or if $a \gt b$ and $n$ is the same for problems $a$ and $b$.

### Input
- The first line of the input contains two space-separated integers $P$ and $S$ denoting the number of problems and the number of subtasks in each problem.
- $2P$ lines follow. For each valid $i$, the $2i-1$-th of these lines contains $S$ space-separated integers $SC_1, SC_2, \dots, SC_S$ denoting the scores of the $i$-th problem's subtasks, and the $2i$-th of these lines contains $S$ space-separated integers $NS_1, NS_2, \dots, NS_S$ denoting the number of contestants who solved the $i$-th problem's subtasks.

### Output
Print $P$ lines containing one integer each — the indices of the problems in the increasing order of difficulty.

### Constraints
- $1 \le P \le 100,000$
- $2 \le S \le 30$
- $1 \le SC_i \le 100$ for each valid $i$
- $1 \le NS_i \le 1,000$ for each valid $i$
- in each problem, the scores of all subtasks are unique

### Subtasks
**Subtask #1 (25 points):** $S = 2$

**Subtask #2 (75 points):** original constraints

### Example Input
```
3 3
16 24 60
498 861 589
14 24 62
72 557 819
16 15 69
435 779 232
```

### Example Output
```
2
1
3
```
