---
{"category_name":"school","problem_code":"NAICHEF","problem_name":"Naive Chef","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"adlet_zeineken","problem_tester":"mgch","date_added":"21-05-2018","tags":{"0":"adlet_zeineken","1":"adlet_zeineken","2":"cakewalk","3":"june18","4":"likecs","5":"probability"},"time":{"view_start_date":1528709405,"submit_start_date":1528709405,"visible_start_date":1528709405,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/JUNE18/mandarin/NAICHEF.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/JUNE18/russian/NAICHEF.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/JUNE18/vietnamese/NAICHEF.pdf" target="_blank">Vietnamese</a> as well.</h3>

Once, after a stressful day, Chef decided to relax and visit a casino near his house to gamble. He feels lucky and he's going to bet almost all of his money.

The game Chef is going to play in the casino consists of tossing a die with $N$ faces twice. There is a number written on each face of the die (these numbers are not necessarily distinct). In order to win, Chef must get the number $A$ on the first toss and the number $B$ on the second toss of the die.

The excited viewers want to know the probability that Chef will win the game. Can you help them find that number? Assume that Chef gets each face of the die with the same probability on each toss and that tosses are mutually independent.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $A$ and $B$.
- The second line contains $N$ space-separated integers $x_1, x_2, \dots, x_N$ denoting the numbers written on the faces of the die.

### Output
For each test case, print a single line containing one real number — the probability that Chef will win. Your answer will be considered correct if its absolute error does not exceed $10^{-6}$.

### Constraints
- $1 \le T \le 70$
- $1 \le N \le 10^4$
- $1 \le A \le N$
- $1 \le B \le N$
- $1 \le x_i \le N$ for each valid $i$

### Subtasks
**Subtask #1 (20 points):**
- $T \le 10$
- $N \le 100$

**Subtask #2 (80 points):** original constraints

### Example Input
```
2
5 1 1
1 1 1 1 1
2 1 1
1 2
```

### Example Output
```
1.0000000000
0.2500000000
```
