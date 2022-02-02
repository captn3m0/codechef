---
{"category_name":"easy","problem_code":"CHGCDG","problem_name":"Chef and GCD Game ","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kefaa","problem_tester":null,"date_added":"20-07-2018","tags":{"0":"cook96","1":"gcd","2":"implementation","3":"kefaa","4":"math","5":"pre","6":"sieve"},"editorial_url":"https://discuss.codechef.com/problems/CHGCDG","time":{"view_start_date":1532284205,"submit_start_date":1532284205,"visible_start_date":1532284205,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/COOK96/mandarin/CHGCDG.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/COOK96/russian/CHGCDG.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/COOK96/vietnamese/CHGCDG.pdf" target="_blank">Vietnamese</a> as well.</h3>

Chef has a sequence $A$ consisting of $N$ positive integers. 

He is playing a game with this sequence. The goal of the game is to maximize the greatest common divisor of all elements of the sequence. Chef may perform the following operation an arbitrary number of times (including zero):
- Choose a positive integer $d$ and a valid index $i$ such that $A_i$ is divisible by $d^2$.
- Divide $A_i$ by $d^2$.
- Choose a valid index $j$ (not necessarily different from $i$) and multiply $A_j$ by $d$.

Help Chef and find the maximum GCD of all integers in the sequence he could obtain if he plays optimally!

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.
 
### Output
For each test case, print a single line containing one integer — the maximum possible value of the greatest common divisor of all elements of the sequence.

### Constraints 
- $1 \le T \le 5$
- $1 \le N \le 10^5$
- $1 \le A_i \le 10^6$ for each valid $i$

### Example Input
```
2
2
1 25
5
27 3 15 1024 15
```

### Example Output
```
1
6
```
