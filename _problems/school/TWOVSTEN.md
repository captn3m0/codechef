---
{"category_name":"school","problem_code":"TWOVSTEN","problem_name":"Two vs Ten","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"altruist_","problem_tester":"kingofnumbers","date_added":"20-04-2018","tags":{"0":"altruist_"},"editorial_url":"https://discuss.codechef.com/problems/TWOVSTEN","time":{"view_start_date":1524934802,"submit_start_date":1524934802,"visible_start_date":1524934802,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME59/mandarin/TWOVSTEN.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME59/russian/TWOVSTEN.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME59/vietnamese/TWOVSTEN.pdf">Vietnamese</a> as well.</h3>

Chef Two and Chef Ten are playing a game with a number $X$. In one turn, they can multiply $X$ by $2$. The goal of the game is to make $X$ divisible by $10$.

Help the Chefs find the smallest number of turns necessary to win the game (it may be possible to win in zero turns) or determine that it is impossible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer denoting the initial value of $X$. 

### Output
For each test case, print a single line containing one integer — the minimum required number of turns or $-1$ if there is no way to win the game.

### Constraints
- $1 \le T \le 1000$
- $0 \le X \le 10^9$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
3
10
25
1
```

### Example Output
```
0
1
-1
```
